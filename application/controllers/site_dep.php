<?php
session_start();
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

    function __construct(){

        parent::__construct();
        $this->load->model('Department_model');
        $flag = $this->session->userdata('flag');
        if($flag == NULL){

            redirect('department','refresh');
        }
    }

    public function logout(){

        $this->session->unset_userdata('flag');
        $this->session->unset_userdata('username');
        $data['message'] = 'You are successfully logged out';
        $this->session->set_userdata($data);
        redirect('department/hod_login',"refresh");
    }

    public function index(){

        $data = array();
        $data['title'] = "Home";
        $data['heading'] = "Main Menu";
        $data['content'] = $this->load->view('home_hod',$data,true);
        $this->load->view('master',$data);
    }

    public function employee(){

        $data = array();
        $data["title"] = "Employee";
        $data["heading"] = "Employee Details";
        $data["base_url"] = base_url() . "site/employee";
        $data["total_rows"] = $this->employee_model->record_count();
        $data["per_page"] = 10;
        $data["uri_segment"] = 3;

        $this->pagination->initialize($data);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["results"] = $this->employee_model->fetch_employee($data["per_page"], $page);

        $data["links"] = $this->pagination->create_links();

        $data["content"] = $this->load->view('employee',$data,true);
        $this->load->view('master',$data);
    }

    public function salary(){

        $data = array();
        $data["title"] = "Salary";
        $data["heading"] = "Salary Details";
        $data["base_url"] = base_url() . "site/salary";
        $data["total_rows"] = $this->salary_model->record_count();
        $data["per_page"] = 10;
        $data["uri_segment"] = 3
        $this->pagination->initialize($data);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->salary_model->fetch_salary($data["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $data["content"] = $this->load->view('salary',$data,true);
        $this->load->view('master',$data);
    }

    public function profile(){

        $data = array();
        $data['title'] = "Profile";
        $data['heading'] = "Admin Details";
        $data['content'] = $this->load->view('profile',$data,true);
        $this->load->view('master',$data);
        }
