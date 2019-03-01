<?php

class Transaction_admin_model extends CI_Model{

    function __construct(){

        parent::__construct();
    }

    function fetch_transaction($limit, $start) {

        $this->db->limit($limit, $start);
        $this->db->join('admin', 'admin.admin_id = admin_department_transactions.from_admin');
        $this->db->join('departments', 'departments.dep_id = admin_department_transactions.to_dep');
        $query = $this->db->get("admin_department_transactions");

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

        $this->db->insert('admin_department_transactions', $data);
        $query = $this->db->get_where('admin',array('admin_id'=>$data['from_admin']));
        $result=$query->row()->bank_balance;
        $result=$result-$data['amount'];
        $this->db->set('bank_balance', $result);
        $this->db->where('admin_id', $data['from_admin']);
        $this->db->update('admin');

        $query = $this->db->get_where('departments',array('dep_id'=>$data['to_dep']));
        $result=$query->row()->bank_balance;
        $result=$result+$data['amount'];
        $this->db->set('bank_balance', $result);
        $this->db->where('dep_id', $data['to_dep']);
        $this->db->update('departments');

    }
}
