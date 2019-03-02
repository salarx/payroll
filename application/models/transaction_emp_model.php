<?php

class Transaction_emp_model extends CI_Model{

    function __construct(){

        parent::__construct();
    }

    function fetch_transaction($limit, $start) {

        $this->db->limit($limit, $start);
        $this->db->join('departments', 'departments.dep_id = department_employee_transactions.from_dep');
        $this->db->join('employee', 'employee.employee_id = department_employee_transactions.to_emp');
        $query = $this->db->get_where('department_employee_transactions',array('to_emp'=>$this->session->userdata('flag')));

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row) {

                $data[] = $row;
            }

            return $data;
        }

        return false;
    }

    function fetch_transaction_by_id($transaction_id) {

        $this->db->join('employee', 'department_employee_transactions.to_emp = employee.employee_id');
        $this->db->join('account_types', 'account_types.type_id = department_employee_transactions.account_type');
        $query = $this->db->get_where('department_employee_transactions',array('transaction_id'=>$transaction_id));
        return $query->row();
    }
}
