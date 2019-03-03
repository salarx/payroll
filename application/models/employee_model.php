<?php

class Employee_model extends CI_Model{

    function __construct(){

        parent::__construct();
    }

    function login($username, $password){

        $query = $this->db->get_where('employee',array('emp_id' => $username));
        $result = $query->row();
        $emp_password = $result->emp_password;
        $salt = $result->emp_salt;

        $password .= $salt;
        $emp_password .= $salt;

        if(!strcmp($password,$emp_password)){

            return $result;
        }
    }

    function record_count() {

        return $this->db->count_all("employee");
    }

    function fetch_employee($limit, $start) {

        $this->db->limit($limit, $start);

        $this->db->join('msme', 'employee.employee_msme = msme.msme_id');
        $query = $this->db->get("employee");

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row) {

                $data[] = $row;
            }

            return $data;
        }

        return false;
    }


    function fetch_employee_by_msme_id($limit, $start,$msme_id) {

        $this->db->limit($limit, $start);
        $this->db->join('msme', 'employee.employee_msme = msme.msme_id');
        $query = $this->db->get_where('employee',array('employee_msme'=>$msme_id));
        if ($query->num_rows() > 0) {

                foreach ($query->result() as $row) {

                    $data[] = $row;
                }

                return $data;
            }

            return false;
        }

    function fetch_employee_by_id($emp_id) {

        $this->db->join('msme', 'employee.employee_msme = msme.msme_id');
        $query = $this->db->get_where('employee',array('emp_id'=>$emp_id));

        return $query->row();
    }



    function employee_existence($employee_id) {

        $query = $this->db->get_where('salary',array('employee_id'=>$employee_id));

        if($query->row() > 0){

            return true;
        }

        return false;
    }

    function save_employee($data) {

        $this->db->insert('employee', $data);
    }

    function update_employee_by_id($employee_id,$data) {

        $this->db->where('emp_id', $employee_id);
        $this->db->update('employee', $data);
    }

    function erase_employee($employee_id) {

            $data['employee_msme'] = NULL;
            $this->employee_model->update_employee_by_id($employee_id,$data);
    }

}
