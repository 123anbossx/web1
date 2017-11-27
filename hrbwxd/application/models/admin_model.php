<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {


    public function get_by_user($username, $password)
    {
        $data = array(
            'username' => $username,
            'password' => $password
        );
        $query = $this -> db -> get_where('t_admin',$data);
        return $query -> row();
    }



}