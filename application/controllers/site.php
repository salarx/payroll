<?php
session_start();
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

    function __construct(){

        parent::__construct();
        $flag = $this->session->userdata('flag');
        if($flag == NULL){

            redirect('authentication_login/admin_login','refresh');
        }
    }

    public function logout(){

        $this->session->unset_userdata('flag');
        $this->session->unset_userdata('username');
        $data['message'] = 'You are successfully logged out';
        $this->session->set_userdata($data);
        redirect('authentication_login/admin_login',"refresh");
    }

    public function index(){

        $data = array();
        $data['title'] = "Home";
        $data['heading'] = "Main Menu";
        $data['content'] = $this->load->view('home_admin',$data,true);
        $this->load->view('master',$data);
    }

    public function employee(){

        $data = array();
        $data["title"] = "Employee";
        $data["heading"] = "Employee Details";
        $data["base_url"] = base_url() . "site/employee";
        $data["per_page"] = 10;
        $data["uri_segment"] = 3;

        $this->pagination->initialize($data);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["results"] = $this->employee_model->fetch_employee($data["per_page"], $page);

        $data["links"] = $this->pagination->create_links();

        $data["content"] = $this->load->view('employee',$data,true);
        $this->load->view('master',$data);
    }

    public function msme(){

        $data = array();
        $data["title"] = "Department";
        $data["heading"] = "Department Head Details";
        $data["base_url"] = base_url() . "site/msme";
        $data["per_page"] = 10;
        $data["uri_segment"] = 3;

        $this->pagination->initialize($data);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["results"] = $this->msme_model->fetch_msme($data["per_page"], $page);

        $data["links"] = $this->pagination->create_links();

        $data["content"] = $this->load->view('hod',$data,true);
        $this->load->view('master',$data);
    }

    public function transactions(){

        $data = array();
        $data["title"] = "Transactions";
        $data["heading"] = "Transaction Details";
        $data["base_url"] = base_url() . "site/transactions";
        $data["per_page"] = 10;
        $data["uri_segment"] = 3;

        $this->pagination->initialize($data);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["results"] = $this->transaction_admin_model->fetch_transaction($data["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $query = $this->db->get_where('admin',array('admin_id'=>$this->session->userdata('flag')));
        $account_balance = $query->row()->bank_balance;
        $data['balance'] = $account_balance;
        $data["content"] = $this->load->view('transactions_admin',$data,true);
        $this->load->view('master',$data);
    }

    public function settings(){

        $data = array();
        $data['title'] = "Settings";
        $data['heading'] = "System Management";
        $data['content'] = $this->load->view('profile',$data,true);
        $this->load->view('master',$data);
    }

    public function create(){

        $data = array();
        $data['title'] = "Create Admin";
        $data['heading'] = "Create New Admin";
        $data['content'] = $this->load->view('create',$data,true);
        $this->load->view('master',$data);
    }

    public function create_admin(){

        $data = array();
        $data['admin_username'] = $this->input->post('username',true);
        $data['admin_password'] = hash("SHA512",$this->input->post('password',true));
        $options = [
            'cost' => 11,
        ];
        $data['admin_salt'] = password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options);
        $data['bank_balance'] = 0;
        $this->admin_model->save_admin($data);

        redirect('site');
    }

    public function reset(){

        $data = array();
        $data['title'] = "Reset Password";
        $data['heading'] = "Reset Admin Password";
        $data['content'] = $this->load->view('reset',$data,true);
        $this->load->view('master',$data);
    }

    public function reset_password(){

        $data = array();
        $admin_id = $this->session->userdata('flag');
        $data['admin_password'] = hash("SHA512",$this->input->post('password',true));
        $options = [
            'cost' => 11,
        ];
        $data['admin_salt'] = password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options);
        $this->admin_model->update_password_by_id($admin_id,$data);

        redirect('site');
    }
}
