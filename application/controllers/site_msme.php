<?php
session_start();
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_msme extends CI_Controller {

    function __construct(){

        parent::__construct();
        $flag = $this->session->userdata('flag');
        if($flag == NULL){
            redirect('authentication_login/hod_login','refresh');
        }
    }

    public function logout(){

        $this->session->unset_userdata('flag');
        $this->session->unset_userdata('username');
        $data['message'] = 'You are successfully logged out';
        $this->session->set_userdata($data);
        redirect('authentication_login/msme_login',"refresh");
    }

    public function index(){

        $data = array();
        $data['title'] = "Home";
        $data['heading'] = "Main Menu";
        $data['content'] = $this->load->view('home_msme',$data,true);
        $this->load->view('master',$data);
    }

    public function employee(){

        $data = array();
        $dep_id = $this->session->userdata('username');
        $data["title"] = "Employee";
        $data["heading"] = "Employee Details";
        $data["base_url"] = base_url() . "site_msme/employee";
        $data["per_page"] = 10;
        $data["uri_segment"] = 3;

        $this->pagination->initialize($data);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["results"] = $this->employee_model->fetch_employee_by_msme_id($data["per_page"], $page,$dep_id);

        $data["links"] = $this->pagination->create_links();

        $data["content"] = $this->load->view('employee',$data,true);
        $this->load->view('master',$data);
    }

    public function transactions(){

        $data = array();
        $data["title"] = "Transactions";
        $data["heading"] = "Transaction Details";
        $data["base_url"] = base_url() . "site_dep/transactions";
        $data["per_page"] = 10;
        $data["uri_segment"] = 3;

        $this->pagination->initialize($data);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["results"] = $this->transaction_dep_model->fetch_transaction($data["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $query = $this->db->get_where('departments',array('dep_id'=>$this->session->userdata('flag')));
        $account_balance = $query->row()->bank_balance;
        $data['balance'] = $account_balance;

        $data["content"] = $this->load->view('transactions_dep',$data,true);
        $this->load->view('master',$data);
    }


    public function settings(){

        $data = array();
        $data['title'] = "Settings";
        $data['heading'] = "System Management";
        $data['content'] = $this->load->view('profile',$data,true);
        $this->load->view('master',$data);
    }

    public function reset(){

        $data = array();
        $data['title'] = "Reset Password";
        $data['heading'] = "Reset HOD Password";
        $data['content'] = $this->load->view('reset',$data,true);
        $this->load->view('master',$data);
    }

    public function reset_password(){

        $data = array();
        $dep_id = $this->session->userdata('flag');
        $data['password'] = hash("SHA512",$this->input->post('password',true));
        $options = [
            'cost' => 11,
        ];
        $data['dep_salt'] = password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options);
        $this->department_model->update_dep_by_id($dep_id,$data);
        redirect('site_dep');
    }
}