<?php
 
class Race_extr extends CI_Controller
{ 

    public function __construct()
    {
        parent::__construct(); 
        $this->load->database();
        $this->load->model('race_info_model');
        
    }

    public function _head($year = FALSE)
    {
        
        $this->load->view('templates/header');
        
        $obj_result = $this->race_info_model->gets($year); // ��ü ����
        $row = $this->race_info_model->get($year); // row ����        
        $this->load->view('race_extr/race_menu_view', array('arr_result'=>$obj_result));
        $this->load->view('race_extr/get_view', array('row'=>$row));
        $this->load->view('race_extr/race_extr_view', array('arr_result'=>$obj_result));        
    }
    
    public function index()
    { 
        $year = '2018';
        $this->_head($year);
        $this->load->view('templates/footer');
    }
    
    public function gets($year)
    {
        $year = '2018';
        $this->_head($year);
        
        //$this->load->view('race_extr/race_extr_view',$arr_result); //�۵��ȵ�.
        $this->load->view('templates/footer');        
        
        /* �ʵ� ��ȿ�� üũ ���� ... �ʹ� ������*/
    }

    public function get($year)
    {
        $year = '2018';
        $this->_head($year);
        
        $this->load->view('templates/footer');
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