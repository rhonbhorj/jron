<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Tbl_paynamicschannels extends CI_Migration
{

    public function up()
    {


        $this->dbforge->add_field(array(
            'id_chnls' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'pmethod_value' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'pchannel_value' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'description' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'status' => array(
                'type' => 'VARCHAR',
                'constraint' => '11',
            )



        ));
        $this->dbforge->add_key('id_chnls', TRUE);
        $this->dbforge->create_table('paynamics_channels');
    }

    public function down()
    {

        $this->dbforge->drop_table('paynamics_channels');
    

    }
}
