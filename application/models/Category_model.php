<?php
class Category_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getCategory()
    {
        return $this->db->get('store_category')->result_array();
    }
}