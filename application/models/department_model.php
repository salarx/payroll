<?php
class Department_model extends CI_Model{

    function __construct(){

        parent::__construct();
        
    }

    function login($username, $password){

        $query = $this->db->get_where('departments',array('dep_id' => $username));
        $result = $query->row();

        $dep_password = $result->password;

        if(!strcmp($password,$dep_password)){

            return $result;
        }
    }

    function record_count() {

        return $this->db->count_all("departments");
    }


    function fetch_dep($limit, $start) {

        $this->db->limit($limit, $start);
        $query = $this->db->get("departments");

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row) {

                $data[] = $row;
            }

            return $data;
        }

        return false;
    }

    function fetch_dep_by_id($dep_id) {

        $this->db->join('employee', 'employee.employee_id = departments.payment_id');
        $query = $this->db->get_where('departments',array('dep_id'=>$dep_id));
        return $query->row();
    }


    function save_dep($data) {

        $this->db->insert('departments', $data);
    }

    function update_dep_by_id($dep_id,$data) {

        $this->db->where('dep_id', $dep_id);
        $this->db->update('departments', $data);
    }

}
