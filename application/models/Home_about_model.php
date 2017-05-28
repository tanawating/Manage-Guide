<?php 
    class Home_about_model extends CI_Model{
        public function __construct() {
            parent::__construct();
        }
        public function getall()
        {
            $this->db->select ( '*' ); 
            $this->db->from ( 'tb_teacher' );
            $query = $this->db->get ();
            return $query->result ();
        }
    }

