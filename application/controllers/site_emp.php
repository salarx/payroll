<?php
session_start();
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_emp extends CI_Controller {

    function __construct(){

        parent::__construct();

        $flag = $this->session->userdata('flag');

        if($flag == NULL){

            redirect('authentication_login/emp_login','refresh');
        }
    }

    public function logout(){

        $this->session->unset_userdata('flag');
        $this->session->unset_userdata('username');
        $data['message'] = 'You are successfully logged out';
        $this->session->set_userdata($data);
        redirect('authentication_login/emp_login',"refresh");
    }

    public function index(){

        $data = array();
        $data['title'] = "Home";
        $data['heading'] = "Main Menu";
        $data['content'] = $this->load->view('home_emp',$data,true);
        $this->load->view('master',$data);
    }

    public function transactions(){
              $data = array();
              $data['title'] = "Account Details";
              $data['heading'] = "Employee Account Details";
              $query = $this->db->get_where('employee',array('emp_id'=>$this->session->userdata('flag')));
              $data['result']  = $query->row();
              $data['content'] = $this->load->view('slip_emp',$data,true);
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
        $data['heading'] = "Reset MSME Password";
        $data['content'] = $this->load->view('reset',$data,true);
        $this->load->view('master',$data);
    }

    public function reset_password(){

        $data = array();
        $employee_id = $this->session->userdata('flag');
        $data['emp_password'] = hash("SHA512",$this->input->post('password',true));
        $options = [
            'cost' => 11,
        ];
        $data['emp_salt'] = password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options);
        $this->employee_model->update_employee_by_id($employee_id,$data);
        redirect('site_emp');
    }
}
