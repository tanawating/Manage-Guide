<?php 
class Manage_teacher_model extends CI_Model
{

        public function __construct() 
        {
            parent::__construct();
        }

        public function selectAll()
        {
                $this->db->select ('*'); 
                $this->db->from ('tb_teacher');
                $this->db->order_by('tc_id', 'DESC');
                $query = $this->db->get ();
                return $query->result ();
        }
        public function selectOne($tc_id)
        {
                $this->db->where('tc_id',$tc_id);
                $query = $this->db->get('tb_teacher');
                if($query->num_rows() > 0){
                    $data = $query->row();
                    return $data;
                }
                return FALSE;
        }
        public function checkInsert($username)
        {   
                $this->db->select ('*'); 
                $this->db->from ('tb_teacher');
                $this->db->where('tc_username', $username);
                $query = $this->db->get ();
                if($query->num_rows() !=0)
                {
                    return TRUE;
                }
        }
        public function insert($ar = array())
        {
                $this->db->insert('tb_teacher',$ar);
        }

        public function update($tc_id)
        {
                $image_file= $_FILES['txtPic'];
                if(empty($image_file['name']))
                {
                    $this->tc_password = $this->input->post('txtPassword');
                    $this->tc_name = $this->input->post('txtName');
                    $this->tc_lastname = $this->input->post('txtLastname');
                    $this->tc_tel = $this->input->post('txtTel');
                    $this->tc_email = $this->input->post('txtEmail');
                    $this->tc_facebook = $this->input->post('txtFacebook');
                    $this->db->update('tb_teacher', $this, array('tc_id'=> $tc_id));
                }
                else
                {
                    $this->tc_password = $this->input->post('txtPassword');
                    $this->tc_name = $this->input->post('txtName');
                    $this->tc_lastname = $this->input->post('txtLastname');
                    $this->tc_tel = $this->input->post('txtTel');
                    $this->tc_email = $this->input->post('txtEmail');
                    $this->tc_facebook = $this->input->post('txtFacebook');
                    $this->tc_pic = $this->upload->data('file_name');
                    $this->db->update('tb_teacher', $this, array('tc_id'=> $tc_id));
                }
            

        }

        public function drop($tc_id)
        {
                $this->db->delete('tb_teacher', array('tc_id'=> $tc_id));
        }

}
