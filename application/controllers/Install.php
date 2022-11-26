<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Install extends CI_Controller {

    public function index() {
      if ($this->router->default_controller == 'install') {
        $page_data['page_name'] = 'Installation';
        $this->load->view('header', $page_data);
        $this->load->view('install/index', $page_data);
        $this->load->view('footer');
        // exit();
      }else {
        redirect(site_url('login'), 'refresh');
      }
      
    }

    function setup($param1 = '') { 
        if ($param1 == 'error_con_fail') {
          $page_data['error_con_fail'] = 'Error establishing a database conenction using your provided information. Please
          recheck hostname, username, password and try again with correct information';
        }
        if ($param1 == 'error_nodb') {
          $page_data['error_con_fail'] = 'The database you are trying to use for the application does not exist. Please create
          the database first';
        }
        if ($param1 == 'configure_database') {
            $hostname = $this->input->post('hostname');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $dbname   = $this->input->post('dbname');
            // check db connection using the above credentials
            $db_connection = $this->check_database_connection($hostname, $username, $password, $dbname);
            if ($db_connection == 'failed') {
                $this->setup('error_con_fail');
            } else if ($db_connection == 'db_not_exist') {
                $this->setup('error_nodb');;
            } else {
                session_start();
                $_SESSION['hostname'] = $hostname;
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['dbname']   = $dbname;
                redirect(site_url('install/setup_db'), 'refresh');
            }
        }
        $page_data['page_name'] = 'Database Setup';
        $this->load->view('header', $page_data);
        $this->load->view('install/setup', $page_data);
        $this->load->view('footer');
    }

    function check_database_connection($hostname, $username, $password, $dbname) {
        $link = mysqli_connect($hostname, $username, $password, $dbname);
        if (!$link) {
            mysqli_close($link);
            return 'failed';
        }
        $db_selected = mysqli_select_db($link, $dbname);
        if (!$db_selected) {
            mysqli_close($link);
            return "db_not_exist";
        }
        mysqli_close($link);
        return 'success';
    }

    function setup_db() {
            // write database.php
            if($this->configure_database()) {
                redirect(site_url('migrate/CreateMigration'),'refresh');
            }
        return;
    }
    
    function configure_database() {
        // write database.php
        $data_db = file_get_contents('./application/config/database.php');
        session_start();
        $data_db = str_replace('db_name',	$_SESSION['dbname'],	$data_db);
        $data_db = str_replace('db_user',	$_SESSION['username'],	$data_db);
        $data_db = str_replace('db_pass',	$_SESSION['password'],	$data_db);
        $data_db = str_replace('db_host',	$_SESSION['hostname'],	$data_db);
        
        return file_put_contents('./application/config/database.php', $data_db);
    }
}