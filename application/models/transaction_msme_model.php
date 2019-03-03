<?php

class Transaction_msme_model extends CI_Model{

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
        $this->db->join('employee', 'employee.employee_msme = msme.msme_id');
        $query = $this->db->get_where('msme',array('msme_id'=>$data['from_msme']));
        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row) {

                $data = [];
                $emp_id = $row->emp_id;
                $x=$row->basic_salary;
                $y=0.88*$x;
                $z=98.25*$y;
                $data['balance_1'] = $row->balance_1+ 0.1567*$x;
                $data['balance_2'] = $row->balance_2+ 0.0833*$x;
                $data['balance_3'] = $row->balance_3+ 0.0175*$y+ 0.0475*$y;
                $this->employee_model->update_employee_by_id($emp_id,$data);
            }
                }

    }
}
