<?php

class Admin_model extends CI_Model{

    function login($username, $password){

        $query = $this->db->get_where('admin',array('admin_username' => $username));
        $result = $query->row();

        $admin_password = $result->admin_password;
        $salt = $result->admin_salt;

        $password .= $salt;
        $admin_password .= $salt;

        if(!strcmp($password,$admin_password)){

            return $result;
        }
    }
}
