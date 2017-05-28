<?php
    class Home_model extends CI_Model
    {
        public function __construct() {
            parent::__construct();
        }
        public function getall()
        {
            $this->db->select ( '*' ); 
            $this->db->from ( 'tb_guide' );
            $this->db->join ( 'tb_teacher', 'tb_teacher.tc_id = tb_guide.tc_id' , 'left' );
            $this->db->join ( 'tb_school', 'tb_school.sch_id = tb_guide.sch_id' , 'left' );
            $query = $this->db->get ();
            return $query->result ();
        }
        public function getschool()
        {
            $sch_id = $this->uri->segment(3);
            $query = $this->db->get_where('tb_school',array('sch_id'=>$sch_id));
            return $query->row();
        }
        public function getteacher()
        {
            $tc_id = $this->uri->segment(3);
            $query = $this->db->get_where('tb_teacher',array('tc_id'=>$tc_id));
            return $query->row();
        }
    }


?>
