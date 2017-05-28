<?php 
class Home_evidence_model extends CI_Model
{
        
        public function __construct()
		{
                    parent::__construct();
		}

        public function select($en_identity)
        {
                $this->db->where('en_identity',$en_identity);
                $query = $this->db->get('tb_enroll');
                if($query->num_rows() > 0){
                    $data = $query->row();
                    return $data;
                }
                return FALSE;
        }
        public function update($en_id)
        {
            
                $txtSlip= $_FILES['txtSlip'];
                $txtEdu1= $_FILES['txtEdu1'];
                $txtEdu2= $_FILES['txtEdu2'];
                $txtHouse= $_FILES['txtHouse'];
                $txtPic_iden= $_FILES['txtPic_iden'];
                $txtMe= $_FILES['txtMe'];
                
                if(!empty($txtSlip['name']))
                {
                    $this->en_slip = ($txtSlip['name']);
                    $this->db->update('tb_enroll', $this, array('en_id'=> $en_id));
                }
                if(!empty($txtEdu1['name']))
                {
                    $this->en_edu1 = ($txtEdu1['name']);
                    $this->db->update('tb_enroll', $this, array('en_id'=> $en_id));
                }
                if(!empty($txtEdu2['name']))
                {
                    $this->en_edu2 = ($txtEdu2['name']);
                    $this->db->update('tb_enroll', $this, array('en_id'=> $en_id));
                }
                if(!empty($txtHouse['name']))
                {
                    $this->en_house = ($txtHouse['name']);
                    $this->db->update('tb_enroll', $this, array('en_id'=> $en_id));
                }
                if(!empty($txtPic_iden['name']))
                {
                    $this->en_pic_iden = ($txtPic_iden['name']);
                    $this->db->update('tb_enroll', $this, array('en_id'=> $en_id));
                }
                if(!empty($txtMe['name']))
                {
                    $this->en_me = ($txtMe['name']);
                    $this->db->update('tb_enroll', $this, array('en_id'=> $en_id));
                }  
        }
        
        
}