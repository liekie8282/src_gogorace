<?php
 
class Race_extr extends MY_Controller
{ 

    public function __construct()
    {
        parent::__construct();
        
    }
    
    public function index()
    { 
        $this->_header();
        $this->_footer();
    }
    
    public function gets($year)
    {
        $this->_header();        
        //$this->load->view('race_extr/race_extr_view',$arr_result); //�۵��ȵ�.
        $this->_footer();
        
        /* �ʵ� ��ȿ�� üũ ���� ... �ʹ� ������*/
    }

    public function get($year)
    {
        $this->_header();
        $this->_footer();
    }   

    public function insert()
      {   
          //$this->_head();
          
          echo $this->input->post('h_nm');
          echo ',';
          echo $this->input->post('h_grade');
          
          //$this->load->view('templates/header');
          
          
          /* �ʵ� ��ȿ�� üũ ���� ... �ʹ� ������ 
              $this->load->view('templates/header');
              $this->load->view('race_extr/race_extr_view');
              $this->load->view('templates/footer'); 
         */
              
          $this->load->view('news/success'); //������������
      }
      
}