<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaction_msme extends CI_Controller {

    function __construct(){

        parent::__construct();
    }


    public function add_transaction(){

        $data = array();
        $data['title'] = "Add Transaction";
        $data['heading'] = "Add Transaction Details";
        $data['content'] = $this->load->view('add_transaction',$data,true);
        $this->load->view('master',$data);
    }

    public function add_transaction_commit(){

        $data = array();
        $dep_id = $this->session->userdata('flag');
        $data['from_dep'] = $dep_id;
        $data['to_emp'] = $this->input->post('id',true);
        $data['amount'] = $this->input->post('amount',true);
        $data['account_type'] = $this->input->post('account_type',true);
        $data['date'] = date('Y-m-d H:i:s');
        $password = hash("SHA512",$this->input->post('password',true));
        $query = $this->db->get_where('departments',array('dep_id' => $dep_id));
        $result = $query->row();

        $dep_password = $result->password;
        $salt = $result->dep_salt;

        $password .= $salt;
        $dep_password .= $salt;

        if(!strcmp($password,$dep_password)){
          $this->transaction_dep_model->save_transaction($data);
          redirect('site_dep/transactions');
        }
        else{
          show_error('Password entered is incorrect');
        }

    }

    public function view_transaction($salary_id){

        $data = array();
        $data['title'] = "View Salary";
        $data['heading'] = "View Salary Details";
        $data['result'] = $this->salary_model->fetch_salary_by_id($salary_id);
        $data['content'] = $this->load->view('view_salary',$data,true);
        $this->load->view('master',$data);
    }

    public function slip($transaction_id){

        $data = array();
        $data['title'] = "Payment Slip";
        $data['heading'] = "Employee Payment Slip";
        $data['result'] = $this->transaction_dep_model->fetch_transaction_by_id($transaction_id);
        $data['content'] = $this->load->view('slip',$data,true);
        $this->load->view('master',$data);
    }
}
