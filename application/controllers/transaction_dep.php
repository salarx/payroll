<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaction_dep extends CI_Controller {

    function __construct(){

        parent::__construct();
    }


    public function add_transaction($employee_id){

        $data = array();
        $data['title'] = "Add Salary";
        $data['heading'] = "Add Salary Details";
        $data['employee_id'] = $employee_id;
        $data['content'] = $this->load->view('add_salary',$data,true);
        $this->load->view('master',$data);
    }

    public function add_transaction_commit(){

        $data = array();
        $data['employee_id'] = $this->input->post('id',true);
        $data['salary_basic'] = $this->input->post('basic',true);
        $data['salary_overtime'] = $this->input->post('overtime',true);
        $data['salary_other'] = $this->input->post('other',true);
        $this->salary_model->save_salary($data);
        $this->employee_model->update_salary_status($data['employee_id']);

        redirect('site/salary');
    }

    public function view_transaction($salary_id){

        $data = array();
        $data['title'] = "View Salary";
        $data['heading'] = "View Salary Details";
        $data['result'] = $this->salary_model->fetch_salary_by_id($salary_id);
        $data['content'] = $this->load->view('view_salary',$data,true);
        $this->load->view('master',$data);
    }

    public function slip($salary_id){

        $data = array();
        $data['title'] = "Payment Slip";
        $data['heading'] = "Employee Payment Slip";
        $data['result'] = $this->salary_model->fetch_salary_by_id($salary_id);
        $data['content'] = $this->load->view('slip',$data,true);
        $this->load->view('master',$data);
    }
}
