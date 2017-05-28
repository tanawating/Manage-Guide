<?php 
class Manage_guide_model extends CI_Model
{

        public function __construct() 
        {
                parent::__construct();

        }
        public function selectAll()
        {
                $query = $this->db->query('SELECT yg_name FROM tb_year_guide');
                $row = $query->row();
                $rs = $row->yg_name;
                                                                         
                $this->db->select ('*'); 
                $this->db->from ('tb_guide');
                $this->db->join ('tb_teacher', 'tb_teacher.tc_id = tb_guide.tc_id' , 'left');
                $this->db->join ('tb_school', 'tb_school.sch_id = tb_guide.sch_id' , 'left');
                $this->db->where('g_year', $rs);
                $this->db->order_by('g_id', 'DESC');
                $query = $this->db->get ();
                return $query->result ();
        }
        public function selectOne($g_id)
        {
                $this->db->where('g_id',$g_id);
                $this->db->join ( 'tb_teacher', 'tb_teacher.tc_id = tb_guide.tc_id' , 'left' );
                $this->db->join ( 'tb_school', 'tb_school.sch_id = tb_guide.sch_id' , 'left' );
                $query = $this->db->get('tb_guide');
                if($query->num_rows() > 0){
                    $data = $query->row();
                    return $data;
                }
                return FALSE;
        }
        public function selectYear()
        {  
                $query = $this->db->get('tb_year_guide');
                return $query->row ();
        }
        public function insert($ar = array())
        {
                $this->db->insert('tb_guide',$ar);
        }
        public function drop($g_id)
        {
                $this->db->delete('tb_guide', array('g_id'=> $g_id));
        }
        public function update($g_id)
        {
                $this->tc_id = $this->input->post('txtTeacher');
                $this->sch_id = $this->input->post('txtSchool');
                $this->g_detail = $this->input->post('txtDetail');
                $this->g_date = $this->input->post('txtDate');
                $this->time = $this->input->post('txtTime');
                $this->db->update('tb_guide', $this, array('g_id'=> $g_id));
        }
        public function updateYear($ar = array())
        {
                $this->db->update('tb_year_guide', $ar);
        }

}
