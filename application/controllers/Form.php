<?php

class Form extends CI_Controller {
    
    public function index()
    {
        /* 1. �⺻ Ŭ���� �ε� */
        //$this->load->helper('form');
        //$this->load->helper(array('form'));        
        //$this->load->library('form_validation');
        
       /* 2. validation ���� */
        
       /*  $this->form_validation->set_rules(��ü��, ��Ģ, �ɼ�);
        Username �ʵ�� 5 ���ڿ��� 12 ���� ���̶�� �Ѵ�
        Password �ʵ�� �н����� Ȯ�� �ʵ�� ��ġ�ؾ��Ѵ�.
        Email �ʵ�� ��ȿ�� email �ּҶ�� �Ѵ�.  */
        
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
        
       /* 3. ��ȣ��  */
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