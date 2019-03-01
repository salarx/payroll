<?php

class Transaction_dep_model extends CI_Model{

    function __construct(){

        parent::__construct();
    }

    function fetch_transaction($limit, $start) {

        $this->db->limit($limit, $start);
        $this->db->join('departments', 'departments.dep_id = department_employee_transactions.from_dep');
        $this->db->join('employee', 'employee.employee_id = department_employee_transactions.to_emp');
        $query = $this->db->get("department_employee_transactions");

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row) {

                $data[] = $row;
            }

            return $data;
        }

        return false;
    }

    function fetch_transaction_by_id($transaction_id) {

        $this->db->join('employee', 'salary.employee_id = employee.employee_id');
        $query = $this->db->get_where('salary',array('salary_id'=>$salary_id));

        return $query->row();
    }

    function save_transaction($data) {

        $this->db->insert('department_employee_transactions', $data);
        $query = $this->db->get_where('departments',array('dep_id'=>$data['from_dep']));
        $result=$query->row()->bank_balance;
        $result=$result-$data['amount'];
        $this->db->set('bank_balance', $result);
        $this->db->where('dep_id', $data['from_dep']);
        $this->db->update('departments');

        $query = $this->db->get_where('employee',array('employee_id'=>$data['to_emp']));
        $result=$query->row()->balance_1;
        $result=$result+$data['amount'];
        $this->db->set('balance_1', $result);
        $this->db->where('employee_id', $data['to_emp']);
        $this->db->update('employee');

    }
}
