<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_check extends CI_Controller
{
    
        public function __construct() 
        {
                parent::__construct(); 
                $this->load->model('login_model','login'); 
        }
        
        public function admin()
        {
                if($this->input->server('REQUEST_METHOD') == TRUE )
                {
                    if($this->login->check_login_admin($this->input->post('txtusername'),$this->input->post('txtpassword')) == 1)
                    {
                        $rs = $this->login->check_login_admin($this->input->post('txtusername'),$this->input->post('txtpassword'));
                        $this->session->set_userdata(array('username' => $rs -> am_username,'name' => $rs -> am_name,'type' => $rs -> am_type));
                        redirect('admin_home/index');
                    }
                    else
                    {
                        $this->session->set_flashdata('error','Username หรือ Password ผิดพลาด!');
                        redirect('home/index');
                    } 
                }
        }
        public function student()
        {
                if($this->input->server('REQUEST_METHOD') == TRUE )
                {
                    if($this->login->check_login_student($this->input->post('txtIden'),$this->input->post('txtTel')) == 1)
                    {
                        $rs = $this->login->check_login_student($this->input->post('txtIden'),$this->input->post('txtTel'));
                        $this->session->set_userdata(array('identity' => $rs -> en_identity,'phone_number' => $rs -> en_phone_number));
                        redirect('Home_evidence/index');
                    }
                    else
                    {
                        $this->session->set_flashdata('errorStudent','เลขบัตรประชาชน หรือ เบอร์โทรศัพท์ ผิดพลาด!');
                        redirect('home_enroll/evidence');
                    } 
                }
        }

        
}
