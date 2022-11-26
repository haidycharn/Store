<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_setup_db extends CI_Migration {  
    public function __construct()  {    
        parent::__construct();    
        $this->load->dbforge();  
    }   

    public function up()  {     
        $fields = array    
        (      
            'prod_id' => array(           
                'type' => 'INT',           
                'constraint' => 11,          
                'auto_increment' => TRUE      
            ),     
            'prod_name' => array(       
                'type' => 'VARCHAR',       
                'constraint' => 100     
            ),     
            'prod_catg' => array(       
                'type' => 'INT',       
                'constraint' => 10     
            ),
            'prod_tag' => array(       
                'type' => 'VARCHAR',       
                'constraint' => 255   
            ),
            'prod_pic' => array(       
                'type' => 'VARCHAR',       
                'constraint' => 255     
            ),    
        );   
        $this->dbforge->add_field($fields);   
        $this->dbforge->add_key('prod_id',TRUE);   
        $this->dbforge->create_table('store_product',TRUE);
        
        $fields = array    
        (      
            'catg_id' => array(           
                'type' => 'INT',           
                'constraint' => 11,          
                'auto_increment' => TRUE      
            ),     
            'catg_name' => array(       
                'type' => 'VARCHAR',       
                'constraint' => 100     
            ),     
            'catg_parent_id' => array(       
                'type' => 'INT',       
                'constraint' => 11    
            ),
            'catg_is_active' => array(       
                'type' => 'INT',       
                'constraint' => 2   
            )   
        );   
        $this->dbforge->add_field($fields);   
        $this->dbforge->add_key('catg_id',TRUE);   
        $this->dbforge->create_table('store_category',TRUE); 
        
        $fields = array    
        (      
            'user_id' => array(           
                'type' => 'INT',           
                'constraint' => 11,          
                'auto_increment' => TRUE      
            ),     
            'user_name' => array(       
                'type' => 'VARCHAR',       
                'constraint' => 100     
            ),     
            'user_password' => array(       
                'type' => 'VARCHAR',       
                'constraint' => 255   
            ),
            'create_at' => array(       
                'type' => 'DATE'  
            )   
        );   
        $this->dbforge->add_field($fields);   
        $this->dbforge->add_key('user_id',TRUE);   
        $this->dbforge->create_table('store_user',TRUE); 
    }   
    
    public function down()  {     
        $this->dbforge->drop_table('store_product', TRUE); 
        $this->dbforge->drop_table('store_category', TRUE);  
        $this->dbforge->drop_table('store_user', TRUE);  
    }
}
?>