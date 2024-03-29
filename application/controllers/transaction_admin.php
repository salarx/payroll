<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaction_admin extends CI_Controller {

    function __construct(){

        parent::__construct();
    }


    public function add_transaction($dep_id){

        $data = array();
        $data['title'] = "Add Transaction";
        $data['heading'] = "Add Transaction Details";
        $data['dep_id'] = $dep_id;
        $data['content'] = $this->load->view('add_transaction',$data,true);
        $this->load->view('master',$data);
    }

    public function add_transaction_commit(){

        $data = array();
        $admin_id = $this->session->userdata('flag');
        $data['from_admin'] = $admin_id;
        $data['to_dep'] = $this->input->post('id',true);
        $data['amount'] = $this->input->post('amount',true);
        $data['date'] = date('Y-m-d H:i:s');
        $password = hash("SHA512",$this->input->post('password',true));
        $query = $this->db->get_where('admin',array('admin_id' => $admin_id));
        $result = $query->row();

        $admin_password = $result->admin_password;
        $salt = $result->admin_salt;

        $password .= $salt;
        $admin_password .= $salt;

        if(!strcmp($password,$admin_password)){
          $this->transaction_admin_model->save_transaction($data);
          redirect('site/transactions');
        }
        else{
          show_error('Password entered is incorrect');
        }

    }

    public function slip($transaction_id){

        $data = array();
        $data['title'] = "Payment Slip";
        $data['heading'] = "Department Payment Slip";
        $data['result'] = $this->transaction_admin_model->fetch_transaction_by_id($transaction_id);
        $data['content'] = $this->load->view('slip_admin',$data,true);
        $this->load->view('master',$data);

    }
}
