<?php

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        log_message('DEBUG', 'Auth 생성자 실행');
    }

    // 해당월의 경주 정보 보여주기
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
            //echo "일치";    
            $this->session->set_userdata('is_login',TRUE);
            redirect('/race_info/add'); // 메인페이지로 이동    
            
        } else {
            echo "불일치";
            $this->session->set_flashdata('message','로그인에 실패했습니다.');
            $this->session->set_userdata('is_login',FALSE);
            redirect('auth/login'); // 로그인 페이지로 이동  
        }
        
        $this->load->view('templates/footer');
        
    }
}
  
