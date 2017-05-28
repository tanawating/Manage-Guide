<?php 
    class Home_topic_model extends CI_Model
        {
        public function __construct() 
        {
            parent::__construct();
        }
        public function getall()
        {
            $this->db->select('*');
            $this->db->order_by('top_id','DESC');
            $query = $this->db->get('tb_topic');
            return $query->result();
        }
        public function save($ar = array())
        {
            $this->db->insert('tb_topic',$ar);
        }
        public function save_user_answer($ar = array())
        {
            $this->db->insert('tb_topic_reply',$ar);
        }
        public function update_user_answer($top_id)
        {
            $this->db->set('top_reply', 'top_reply+1', FALSE);
            $this->db->where('top_id', $top_id);
            $this->db->update('tb_topic');
        }
        public function update_user_view($top_id)
        {
            $this->db->set('top_view', 'top_view+1', FALSE);
            $this->db->where('top_id', $top_id);
            $this->db->update('tb_topic');
        }
        public function getone()
        {
            $top_id = $this->uri->segment(3);
            $query = $this->db->get_where('tb_topic',array('top_id'=>$top_id));
            return $query->row();

        }
        public function getone2()
        {
            $top_id = $this->uri->segment(3);
            $query = $this->db->get_where('tb_topic_reply',array('top_id'=>$top_id));
            return $query->result();
        }
    }
?>