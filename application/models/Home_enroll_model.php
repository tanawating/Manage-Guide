<?php 
    class Home_enroll_model extends CI_Model{
        public function __construct() {
            parent::__construct();
        }
        public function checkInsert($identity)
        {   
                $this->db->select ('*'); 
                $this->db->from ('tb_enroll');
                $this->db->where('en_identity', $identity);
                $query = $this->db->get ();
                if($query->num_rows() !=0)
                {
                    return TRUE;
                }
        }
        public function insert($ar = array())
        {
            $this->db->insert('tb_enroll',$ar);
        }
    }
?>