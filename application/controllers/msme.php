<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Msme extends CI_Controller {

    function __construct(){

        parent::__construct();

    }

    public function add_msme(){
        $data = array();
        $data['title'] = "Add MSME";
        $data['heading'] = "Add MSME Details";
        $data['content'] = $this->load->view('add_msme',$data,true);
        $this->load->view('master',$data);
    }

    public function add_msme_commit(){
        $data = array();
        $data['msme_name'] = $this->input->post('name',true);
        $data['password'] = hash("SHA512",$this->input->post('password',true));
        $options = [
            'cost' => 11,
        ];
        $data['msme_salt'] = password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options);
        $data['transaction_pass'] = hash("SHA512",$this->input->post('transaction_pass',true));
        $data['transaction_salt'] = password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options);
        $this->msme_model->save_msme($data);

        redirect('site/msme');
    }

    public function update_msme($msme_id){

        $data = array();
        $data['title'] = "Update MSME";
        $data['heading'] = "Update MSME Details";
        $data['result'] = $this->msme_model->fetch_msme_by_id($msme_id);
        $data['content'] = $this->load->view('update_msme',$data,true);
        $this->load->view('master',$data);
    }

    public function update_msme_commit(){

        $data = array();
        $msme_id = $this->input->post('id',true);
        $data['msem_name'] = $this->input->post('name',true);
        $emp_id = $this->input->post('emp_id',true);
        $result = $this->employee_model->fetch_employee_by_id($emp_id);
        $emp_dep = $result->employee_department;
        if($dep_id!=$emp_dep)
        {
          $message = "Please enter an employee number of the same department not of another department";
          show_error($message);
        }
        else {
        $data['emp_id'] = $emp_id;
        $password = $this->input->post('password',true);
        if($password != '')
        {
          $data['password'] = hash("SHA512",$password);
        }
        $options = [
            'cost' => 11,
        ];
        $data['dep_salt'] = password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options);
        $this->department_model->update_dep_by_id($dep_id,$data);
        redirect('site/department');
    }}
}
