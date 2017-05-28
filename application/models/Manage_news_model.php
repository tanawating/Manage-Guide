<?php 
class Manage_news_model extends CI_Model
{

        public function __construct() 
        {
            parent::__construct();
        }

        public function selectAll()
        {
                $this->db->select ('*'); 
                $this->db->from ('tb_news');
                $this->db->order_by('n_id', 'DESC');
                $query = $this->db->get ();
                return $query->result ();
        }
        public function selectOne($n_id)
        {
                $this->db->where('n_id',$n_id);
                $query = $this->db->get('tb_news');
                if($query->num_rows() > 0){
                    $data = $query->row();
                    return $data;
                }
                return FALSE;
        }
        public function insert($ar = array())
        {
                $this->db->insert('tb_news',$ar);
        }
        public function update($n_id)
        {   
                $image_file= $_FILES['txtFile'];
                if(empty($image_file['name']))
                {
                    $this->n_titel = $this->input->post('txtTitel');
                    $this->n_detail =  $this->input->post('txtDetail');
                    $this->db->update('tb_news', $this, array('n_id'=> $n_id));
                }
                else 
                {
                    $this->n_titel = $this->input->post('txtTitel');
                    $this->n_detail =  $this->input->post('txtDetail');
                    $this->n_name_file = $this->upload->data('file_name');
                    $this->db->update('tb_news', $this, array('n_id'=> $n_id));
                }
        }
        public function drop($n_id)
        {
                $this->db->delete('tb_news', array('n_id'=> $n_id));
        }

}
