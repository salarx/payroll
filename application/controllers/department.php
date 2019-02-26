<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Department extends CI_Controller {

    function __construct(){

        parent::__construct();
        $this->load->model('Department_model');

    }


    public function update_dep($dep_id){

        $data = array();
        $data['title'] = "Update Department";
        $data['heading'] = "Update Department Details";
        $data['result'] = $this->department_model->fetch_dep_by_id($dep_id);
        $data['content'] = $this->load->view('update_department',$data,true);
        $this->load->view('master',$data);
    }

    public function update_dep_commit(){

        $data = array();
        $dep_id = $this->input->post('id',true);
        $data['dep_name'] = $this->input->post('name',true);
        $data['emp_id'] = $this->input->post('emp_id',true);
        $data['password'] = hash("SHA512",$this->input->post('password',true));
        $options = [
            'cost' => 11,
        ];
        $data['dep_salt'] = password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options);
        $this->department_model->update_dep_by_id($dep_id,$data);
        redirect('site/department');
    }
}
