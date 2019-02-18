<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends CI_Controller {

    function __construct(){

        parent::__construct();
          $this->load->model('department_model');
        $flag = $this->session->userdata('flag');

        if($flag != NULL){

            redirect('site','refresh');
        }
    }

    public function login_emp(){

		$this->load->view('login_emp');
	}

    public function authentication(){

        $username = $this->input->post('username',true);
        $password = $this->input->post('password',true);
        $result = $this->employee_model->login($username,$password);

        if($result){

            $data['flag'] = $result->employee_id;
            $data['username'] = $result->employee_id;
            $data['category'] = 3;
            $this->session->set_userdata($data);

            redirect('site_emp');
        }
        else{

            $data = array();
            $data['exception'] = 'Your User Id / Password Invalid!';
            $this->session->set_userdata($data);

            redirect('employee');
        }
    }

    public function view_employee($employee_id){

        $data = array();
        $data['title'] = "View Employee";
        $data['heading'] = "View Employee Details";
        $data['result'] = $this->employee_model->fetch_employee_by_id($employee_id);
        $data['content'] = $this->load->view('view_employee',$data,true);
        $this->load->view('master',$data);
    }

    public function update_employee($employee_id){

        $data = array();
        $data['title'] = "Update Employee";
        $data['heading'] = "Update Employee Details";
        $data['result'] = $this->employee_model->fetch_employee_by_id($employee_id);
        $data['content'] = $this->load->view('update_employee',$data,true);
        $this->load->view('master',$data);
    }

    public function update_employee_commit(){

        $data = array();
        $employee_id = $this->input->post('id',true);
        $data['payment_id'] = $this->input->post('type',true);
        $data['status_id'] = $this->input->post('status',true);
        $data['employee_name'] = $this->input->post('name',true);
        $data['employee_department'] = $this->input->post('department',true);
        $data['employee_designation'] = $this->input->post('designation',true);
        $data['employee_phone'] = $this->input->post('phone',true);
        $data['employee_address'] = $this->input->post('address',true);
        $this->employee_model->update_employee_by_id($employee_id,$data);

        redirect('site/employee');
    }


    public function add_employee(){
        $data = array();
        $data['title'] = "Add Employee";
        $data['heading'] = "Add Employee Details";
        $data['content'] = $this->load->view('add_employee',$data,true);
        $this->load->view('master',$data);
    }


    public function add_employee_commit(){
        $data = array();
        $data['payment_id'] = $this->input->post('type',true);
        $data['status_id'] = $this->input->post('status',true);
        $data['employee_name'] = $this->input->post('name',true);
        $data['employee_department'] = $this->input->post('department',true);
        $data['employee_designation'] = $this->input->post('designation',true);
        $data['employee_phone'] = $this->input->post('phone',true);
        $data['employee_address'] = $this->input->post('address',true);
        $this->employee_model->save_employee($data);

        redirect('site/employee');
    }

    public function delete_employee_commit(){

        $employee_id = $this->input->post('id',true);

        $this->employee_model->erase_employee($employee_id);
		$this->salary_model->delete_salary_by_id($employee_id);

        redirect('site/employee');
    }
}
