<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->model('category_model');
    }

    public function index() {
        $page_data['page_name'] = 'Product';
        $page_data['user_name'] = $this->session->userdata('user_name');
        $page_data['user_id'] = $this->session->userdata('user_id');
        $page_data['all_products'] = $this->product_model->getProduct();
        $page_data['category'] = $this->category_model->getCategory();

        $this->load->view('header', $page_data);
        $this->load->view('product', $page_data);
        $this->load->view('footer');
    }
}