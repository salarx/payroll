<?php

class Transaction_dep_model extends CI_Model{

    function __construct(){

        parent::__construct();
    }

    function fetch_transaction($limit, $start) {

        $this->db->limit($limit, $start);
        $this->db->join('msme', 'msme.msme_id = msme_emp_transactions.from_msme');
        $query = $this->db->get_where('msme_emp_transactions',array('from_msme'=>$this->session->userdata('flag')));

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row) {

                $data[] = $row;
            }

            return $data;
        }

        return false;
    }

    function fetch_transaction_by_id($transaction_id) {

        $this->db->join('msme', 'msme.msme_id = msme_emp_transactions.from_msme');
        $query = $this->db->get_where('msme_emp_transactions.from_msme',array('transaction_id'=>$transaction_id));
        return $query->row();
    }

    function save_transaction($data) {

        $this->db->insert('department_employee_transactions', $data);
        $query = $this->db->get_where('departments',array('dep_id'=>$data['from_dep']));
        $result=$query->row()->bank_balance;
        $result=$result-$data['amount'];
        if($result <0)
        {
          show_error("Insufficient funds are present in your account");
        }
        else{
        $this->db->set('bank_balance', $result);
        $this->db->where('dep_id', $data['from_dep']);
        $this->db->update('departments');

        $query = $this->db->get_where('employee',array('employee_id'=>$data['to_emp']));
        if($data['account_type']==1)
        {
           $type='balance_1';
           $result=$query->row()->balance_1;
        }
        if($data['account_type']==2)
        {
           $type='balance_2';
           $result=$query->row()->balance_2;
        }
        if($data['account_type']==3)
        {
           $type='balance_3';
           $result=$query->row()->balance_3;
        }
        $result=$result+$data['amount'];
        $this->db->set($type, $result);
        $this->db->where('employee_id', $data['to_emp']);
        $this->db->update('employee');
      }
    }
}
