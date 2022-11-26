<?php
class User_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function add_user(){
        // check if exists
        $iExist = $this->db->get_where('store_user', array('user_name' => $_POST['username']))->row_array();
        if(!empty($iExist))
            return false;
        
        $this->db->insert('store_user', array(
            'user_name' => $_POST['username'],
            'user_password' => md5($_POST['password'])
        ));
        $this->check_user();
    }

    public function check_user(){
        return $this->db->get_where('store_user', array(
            'user_name' => $_POST['username'],
            'user_password' => md5($_POST['password'])
            )
        )->row_array();
    }
}
