<?php 
class Manage_school_model extends CI_Model
{

        public function __construct() 
        {
            parent::__construct();
        }

        public function selectAll()
        {
                $this->db->select ('*'); 
                $this->db->from ('tb_school');
                $this->db->order_by('sch_id', 'DESC');
                $query = $this->db->get ();
                return $query->result ();
        }
        public function selectOne($sch_id)
        {
                $this->db->where('sch_id',$sch_id);
                $query = $this->db->get('tb_school');
                if($query->num_rows() > 0){
                    $data = $query->row();
                    return $data;
                }
                return FALSE;
        }
        public function insert($ar = array())
        {
                $this->db->insert('tb_school',$ar);
        }

        public function update($sch_id)
        {
                $this->sch_name = $this->input->post('txtName');
                $this->sch_address = $this->input->post('txtAddress');
                $this->sch_tel = $this->input->post('txtTel');
                $this->sch_web = $this->input->post('txtWeb');
                $this->sch_detail = $this->input->post('txtDetail');
                $this->sch_pic = $this->input->post('txtPic');
                $this->sch_name_teacher = $this->input->post('txtTeacher');
                $this->sch_tel_teacher = $this->input->post('txtTelTeacher');
                $this->sch_email = $this->input->post('txtEmail');
                $this->db->update('tb_school', $this, array('sch_id'=> $sch_id));
        }

        public function drop($sch_id)
        {
                $this->db->delete('tb_school', array('sch_id'=> $sch_id));
        }

}
