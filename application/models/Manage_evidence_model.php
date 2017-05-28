<?php 
class Manage_evidence_model extends CI_Model
{

        public function __construct() 
        {
            parent::__construct();
        }

        public function selectAll()
        {
                $this->db->order_by('en_id', 'DESC');
                $query = $this->db->get('tb_enroll'); 
                return $query->result();
        }
        public function selectOne($en_id)
        {
                $this->db->where('en_id',$en_id);
                $query = $this->db->get('tb_enroll');
                if($query->num_rows() > 0){
                    $data = $query->row();
                    return $data;
                }
                return FALSE;
        }
        public function updateStatus($en_id)
        {
                $this->en_status= $this->input->post('status');
                $this->db->update('tb_enroll', $this, array('en_id'=> $en_id));
        }


}
