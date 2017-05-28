<?php 
class Login_model extends CI_Model
{
        
        public function __construct()
		{
                parent::__construct();
		}

        public function check_login_admin($txtusername,$txtpassword)
        {
                $this->db->where('am_username',$txtusername);
                $this->db->where('am_password',$txtpassword);
                $query = $this->db->get('tb_admin');
                return $query->row();
        }
        public function check_login_teacher($txtusername,$txtpassword)
        {
                $this->db->where('tc_username',$txtusername);
                $this->db->where('tc_password',$txtpassword);
                $query = $this->db->get('tb_teacher');
                return $query->row();
        }
        public function check_login_student($txtiden,$txttel)
        {
                $this->db->where('en_identity',$txtiden);
                $this->db->where('en_phone_number',$txttel);
                $query = $this->db->get('tb_enroll');
                return $query->row();
        }
}