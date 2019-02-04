<?php

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        log_message('DEBUG', 'Auth ������ ����');
    }

    // �ش���� ���� ���� �����ֱ�
    public function index()
    {}

    public function login()
    {
        $this->load->view('templates/header');
        $this->load->view('auth/login_view');
        $this->load->view('templates/footer');
    }

    public function logout()
    {
        
        $this->session->sess_destory();
        $this->load->view('auth/login_view');
        $this->load->view('templates/footer');
    }

    public function authentication()
    {
        
        $this->load->view('templates/header');
        
        $authentication = $this->config->item('authentication');
        //echo $this->input->post('pwd').":".$authentication['pwd']."<br> ";        
        
        if ($this->input->post('id') == $authentication['id'] && $this->input->post('pwd') == $authentication['pwd']) {
            //echo "��ġ";    
            $this->session->set_userdata('is_login',TRUE);
            redirect('/race_info/add'); // ������������ �̵�    
            
        } else {
            echo "����ġ";
            $this->session->set_flashdata('message','�α��ο� �����߽��ϴ�.');
            $this->session->set_userdata('is_login',FALSE);
            redirect('auth/login'); // �α��� �������� �̵�  
        }
        
        $this->load->view('templates/footer');
        
    }
}
  
