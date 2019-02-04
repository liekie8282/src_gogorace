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
        //$this->load->view('race_extr/race_extr_view',$arr_result); //작동안됨.
        $this->_footer();
        
        /* 필드 유효성 체크 생략 ... 너무 복잡해*/
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
          
          
          /* 필드 유효성 체크 생략 ... 너무 복잡해 
              $this->load->view('templates/header');
              $this->load->view('race_extr/race_extr_view');
              $this->load->view('templates/footer'); 
         */
              
          $this->load->view('news/success'); //성공페이지로
      }
      
}