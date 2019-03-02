<?php
class Msme_model extends CI_Model{

    function __construct(){

        parent::__construct();

    }

    function login($username, $password){

        $query = $this->db->get_where('msme',array('msme_id' => $username));
        $result = $query->row();
        $msme_password = $result->password;
        $salt = $result->msme_salt;

        $password .= $salt;
        $msme_password .= $salt;

        if(!strcmp($password,$msme_password)){

            return $result;
        }
    }

    function fetch_msme($limit, $start) {

        $this->db->limit($limit, $start);
        $query = $this->db->get("msme");
        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row) {

                $data[] = $row;
            }

            return $data;
        }

        return false;
    }

    function fetch_msme_by_id($msme_id) {

        $query = $this->db->get_where('msme',array('msme_id'=>$msme_id));
        return $query->row();
    }


    function save_msme($data) {

        $this->db->insert('msme', $data);
    }

    function update_msme_by_id($msme_id,$data) {

        $this->db->where('msme_id', $msme_id);
        $this->db->update('msme', $data);
    }

}
