<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaction_emp extends CI_Controller {

    function __construct(){

        parent::__construct();
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
