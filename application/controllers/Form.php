<?php

class Form extends CI_Controller {
    
    public function index()
    {
        /* 1. 기본 클래스 로드 */
        //$this->load->helper('form');
        //$this->load->helper(array('form'));        
        //$this->load->library('form_validation');
        
       /* 2. validation 셋팅 */
        
       /*  $this->form_validation->set_rules(객체명, 규칙, 옵션);
        Username 필드는 5 글자에서 12 글자 사이라야 한다
        Password 필드는 패스워드 확인 필드와 일치해야한다.
        Email 필드는 유효한 email 주소라야 한다.  */
        
        $this->form_validation->set_rules(
            'username', 'Username','required|min_length[5]|max_length[12]|is_unique[users.username]',
            array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
            )
        );
        // $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'You must provide a %s.') );
        //$this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]'); 
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
        
       /* 3. 뷰호출  */
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('myform');
        }
        else
        {
            $this->load->view('formsuccess');
        }
    }   
    
}