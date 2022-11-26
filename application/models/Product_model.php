<?php
class Product_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getProduct()
    {
        $this->db->join('store_category g', 'g.catg_id = p.prod_catg');
        return $this->db->get('store_product p')->result_array();
    }
}