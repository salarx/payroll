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
        $data['from_admin'] = $this->session->userdata('flag');
        $data['to_dep'] = $this->input->post('id',true);
        $data['amount'] = $this->input->post('amount',true);
        $this->transaction_admin_model->save_transaction($data);
        redirect('site/transactions');
    }

    public function slip($transaction_id){

        $data = array();
        $data['title'] = "Payment Slip";
        $data['heading'] = "Department Payment Slip";
        $data['result'] = $this->salary_model->fetch_transaction_by_id($transaction_id);
        $data['content'] = $this->load->view('slip',$data,true);
        $this->load->view('master',$data);

    }
}
