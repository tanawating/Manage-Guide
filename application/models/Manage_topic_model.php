<?php 
class Manage_topic_model extends CI_Model
{

        public function __construct() 
        {
            parent::__construct();
        }

        public function selectAll()
        {
                $this->db->select ('*'); 
                $this->db->from ('tb_topic');
                $this->db->order_by('top_id', 'DESC');
                $query = $this->db->get ();
                return $query->result ();
        }
        public function selectOne($top_id)
        {
                $this->db->where('top_id',$top_id);
                $query = $this->db->get('tb_topic');
                if($query->num_rows() > 0){
                    $data = $query->row();
                    return $data;
                }
                return FALSE;
        }
        public function selectComment($top_id)
        {
            $query = $this->db->get_where('tb_topic_reply',array('top_id'=>$top_id));
            return $query->result();
        }
        public function drop($top_id)
        {
                $this->db->delete('tb_topic', array('top_id'=> $top_id));
        }

}
