<?php 
    class Home_news_model extends CI_Model
    {
        public function __construct() 
        {
            parent::__construct();
        }
        public function getall()
        {
            $this->db->select('*');
            $this->db->order_by('n_id', 'DESC');
            $query = $this->db->get('tb_news');
            return $query->result ();  
        }
        public function getone()
        {
            $n_id = $this->uri->segment(3);
            $query = $this->db->get_where('tb_news',array('n_id'=>$n_id));
            return $query->row();
        }
        public function update_user_view($n_id)
        {
            $this->db->set('n_view', 'n_view+1', FALSE);
            $this->db->where('n_id', $n_id);
            $this->db->update('tb_news');
        }
    }
?>