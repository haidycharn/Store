<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index() {
        $page_data['page_name'] = 'Login';
        $iSubmit = $this->input->post('submitBtn');
        $iCheck = false;
        $pageName = 'index';
        $iMsg = '';
        switch($iSubmit){
            case 'signup':
                if($_POST['password'] == $_POST['passrepeat']) {
                    $iCheck = $this->user_model->add_user();
                    $iMsg = 'Username already exists!';
                } else {
                    $iMsg = 'Password don\'t match';
                }
                break;
            case 'login':
                $iCheck = $this->user_model->check_user();
                $iMsg = 'Username or Password is incorrect, Please try again';
                break;
        }
        
        if(!empty($iCheck)){
            $this->session->set_userdata(array(
                'user_id' => $iCheck['user_id'],
                'user_name' => $iCheck['user_name']
            ));
            redirect(site_url('Product'),'refresh');
        }
        $page_data['message'] = $iMsg;
        $this->load->view('header', $page_data);
        $this->load->view('index', $page_data);
        $this->load->view('footer');
    }
}