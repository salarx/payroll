<?php

class Transaction_admin_model extends CI_Model{

    function __construct(){

        parent::__construct();
    }

    function record_count() {

        return $this->db->count_all("salary");
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
    }
}
