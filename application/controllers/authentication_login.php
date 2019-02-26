<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authentication_login extends CI_Controller {

    function __construct(){

        parent::__construct();
        $this->load->model("department_model");
        $flag = $this->session->userdata('flag');
        $category = $this->session->userdata('category');
    }

	public function admin_login(){

		$this->load->view('admin_login');
	}

  public function admin_authentication(){

        $username = $this->input->post('username',true);
        $password = hash("SHA512",$this->input->post('password',true));
        $result = $this->admin_model->login($username,$password);

        if($result){

            $data['flag'] = $result->admin_id;
            $data['username'] = $result->admin_username;
            $data['category'] = 1;
            $this->session->set_userdata($data);

            redirect('site');
        }
        else{

            $data = array();
            $data['exception'] = 'Your User Id / Password Invalid!';
            $this->session->set_userdata($data);

            redirect('authentication_login/admin_login');
        }
    }
    public function hod_login(){

      $this->load->view('hod_login');
    }

    public function hod_authentication(){

      $username = $this->input->post('username',true);
        $password = hash("SHA512",$this->input->post('password',true));
      $result = $this->department_model->login($username,$password);
      if($result){
        $data['flag'] = $result->dep_id;
        $data['username'] = $result->dep_id;
        $data['category'] = 2;
        $this->session->set_userdata($data);
        redirect('site_dep');
      }
      else{
      $data = array();
      $data['exception'] = 'Your User Id / Password Invalid!';
      $this->session->set_userdata($data);
      redirect('authentication_login/hod_login');
      }
    }
    public function emp_login(){

    $this->load->view('login_emp');
  }

    public function emp_authentication(){

        $username = $this->input->post('username',true);
        $password = hash("SHA512",$this->input->post('password',true));
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

            redirect('authentication_login/emp_login');
        }
    }
}
