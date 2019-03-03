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

        $this->db->insert('msme_emp_transactions', $data);


        $query = $this->db->get_where('msme',array('msme_id'=>$data['from_msme']));
        $result=$query->row()->bank_balance;
        $result=$result-$data['amount'];
        if($result <0)
        {
          show_error("Insufficient funds are present in your account");
        }
    
        $this->db->set('bank_balance', $result);
        $this->db->where('dep_id', $data['from_dep']);
        $this->db->update('departments');

        $query = $this->db->get_where('employee',array('employ_id'=>$data['to_emp']));
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

        $this->db->join('msme', 'employee.employee_msme = msme.msme_id');
        $query = $this->db->get_where('msme',array('msme_id'=>$data['from_msme']));
        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row) {

                $data[] = $row;
                $x=$row->basic_salary;
                $y=0.88*$x;
                $z=98.25*$y;

            }

            $data['pf'] = 0.1567*$x;
            $data['pension'] = 0.0833*$x;
            $data['esi'] = 0.0175*(.88*$x)+0.0475*(0.88*$x);
                }
    
    }
}
