<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends CI_Controller {

    function __construct(){

        parent::__construct();
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
        $query1 = $this->db->get_where("employee",array('employee_id'=>$employee_id));
        $employee_department = $query1->row()->employee_department;
        $query2 = $this->db->get_where("departments",array('emp_id'=>$employee_id));
        if($employee_department != $data['employee_department'])
        {
          if($query2->num_rows() !=0)
          {
            show_error("This employee is HOD of another department. You cannot shift him to another department.");
          }
        }
        else{
        $data['employee_designation'] = $this->input->post('designation',true);
        $data['employee_phone'] = $this->input->post('phone',true);
        $data['employee_address'] = $this->input->post('address',true);
        $this->employee_model->update_employee_by_id($employee_id,$data);

        redirect('site/employee');
    }}


    public function add_employee(){
        $data = array();
        $data['title'] = "Add Employee";
        $data['heading'] = "Add Employee Details";
        $data['content'] = $this->load->view('add_employee',$data,true);
        $this->load->view('master',$data);
    }


    public function add_employee_commit(){
        $data = array();
        $data['employee_name'] = $this->input->post('name',true);
        $data['employee_msme'] = $this->input->post('msme',true);
        $data['employee_phone'] = $this->input->post('phone',true);
        $data['employee_email'] = $this->input->post('email',true);
        $data['emp_password'] = hash("SHA512",$this->input->post('password',true));
        $data['basic_salary'] = $this->input->post('salary',true);
        $data['balance_1'] = 0;
        $data['balance_2'] = 0;
        $data['balance_3'] = 0;
        $options = [
            'cost' => 11,
        ];
        $data['emp_salt'] = password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options);
        $this->employee_model->save_employee($data);

        redirect('site_msme/employee');
    }

    public function delete_employee($emp_id){

        $data = array();
        $data['title'] = "Delete Employee";
        $data['heading'] = "Confirm Employee Deletion";
        $data['emp_id'] = $emp_id;
        $data['content'] = $this->load->view('delete_employee',$data,true);
        $this->load->view('master',$data);
    }

    public function delete_employee_commit(){

        $data = array();
        $msme_id = $this->session->userdata('flag');
        $data['employee_id'] = $this->input->post('id',true);
        $password = hash("SHA512",$this->input->post('password',true));
        $query = $this->db->get_where('msme',array('msme_id' => $msme_id));
        $result = $query->row();

        $msme_password = $result->password;
        $salt = $result->msme_salt;

        $password .= $salt;
        $msme_password .= $salt;

        if(!strcmp($password,$msme_password)){
            $this->employee_model->erase_employee($data['employee_id']);
        redirect('site_msme/employee');
        }
        else{
          show_error('Password entered is incorrect');
        }
    }
}
