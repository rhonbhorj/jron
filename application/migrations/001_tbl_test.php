<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Tbl_test extends CI_Migration {

        public function up()
        {
 
                
                $this->dbforge->add_field(array(
                    'details_id' => array(
                        'type' => 'INT',
                        'constraint' => 5,
                        'unsigned' => TRUE,
                        'auto_increment' => TRUE
                    ),
                    'users_id' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '50',
                    ),
                    'first_name' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '50',
                    ),
                    'middle_name' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '50',
                    ),
                    'last_name' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '50',
                    ),
                    'email' => array(
                        'type' => 'TEXT',
                        'null' => TRUE,
                    ),
                    'address' => array(
                        'type' => 'TEXT',
                        'null' => TRUE,
                    ),
                    'birthday' => array(
                        'type' => 'DATE',
                        
                    ),
                    
                    'created_at datetime default current_timestamp',
                    'updated_at datetime default current_timestamp on update current_timestamp',
                    
                ));
                $this->dbforge->add_key('details_id', TRUE);
                $this->dbforge->create_table('user_details');
        }

        public function down()
        {

                $this->dbforge->drop_table('user_details');
        }

 }