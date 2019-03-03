<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaction_msme extends CI_Controller {

    function __construct(){

        parent::__construct();
    }


    public function add_transaction(){

        $data = array();
        $data['title'] = "Add Transaction";
        $data['heading'] = "Add Transaction Details";
        $msme_id = $this->session->userdata('flag');
        $query = $this->db->get_where("employee",array("employee_msme"=>$msme_id));
        $amount = 0;
        foreach ($query->result() as $row){
              $x=$row->basic_salary;
              $y=0.88*$x;
              $z=98.25*$y;
              $amount = $amount + 0.1567*$x + 0.0833*$x + 0.065*$y;
        }
        $data['amount'] = $amount;
        $data['content'] = $this->load->view('add_transaction',$data,true);
        $this->load->view('master',$data);
    }

    public function add_transaction_commit(){

        $data = array();
        $msme_id = $this->session->userdata('flag');
        $data['from_msme'] = $msme_id;
        $data['amount'] = $this->input->post('amount',true);
        $data['date'] = date('Y-m-d H:i:s');
        $password = hash("SHA512",$this->input->post('password',true));
        $query = $this->db->get_where('msme',array('msme_id' => $msme_id));
        $result = $query->row();

        $transaction_pass = $result->transaction_pass;
        $salt = $result->transaction_salt;

        $password .= $salt;
        $transaction_pass.= $salt;

        if(!strcmp($password,$transaction_pass)){
          $this->transaction_msme_model->save_transaction($data);
          redirect('site_msme/transactions');
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
        $data['result'] = $this->transaction_msme_model->fetch_transaction_by_id($transaction_id);
        $data['content'] = $this->load->view('slip_msme',$data,true);
        $this->load->view('master',$data);
    }
}
