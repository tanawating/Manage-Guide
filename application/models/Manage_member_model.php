<?php 
class Manage_member_model extends CI_Model
{

        public function __construct() 
        {
            parent::__construct();
        }

        public function selectAll()
        {
                $this->db->select ('*'); 
                $this->db->from ('tb_admin');
                $this->db->order_by('am_id', 'ASC');
                $query = $this->db->get ();
                return $query->result ();
        }
        public function selectOne($am_id)
        {
                $this->db->where('am_id',$am_id);
                $query = $this->db->get('tb_admin');
                if($query->num_rows() > 0){
                    $data = $query->row();
                    return $data;
                }
                return FALSE;
        }
        public function checkInsert($username)
        {   
                $this->db->select ('*'); 
                $this->db->from ('tb_admin');
                $this->db->where('am_username', $username);
                $query = $this->db->get ();
                if($query->num_rows() !=0)
                {
                    return TRUE;
                }
        }
        public function insert($ar = array())
        {
                $this->db->insert('tb_admin',$ar);
        }

        public function update($am_id)
        {
                $this->am_password = $this->input->post('txtPassword');
                $this->am_name = $this->input->post('txtName');
                $this->db->update('tb_admin', $this, array('am_id'=> $am_id));
        }

        public function drop($am_id)
        {
                $this->db->delete('tb_admin', array('am_id'=> $am_id));
        }

}
