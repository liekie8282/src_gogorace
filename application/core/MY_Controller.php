<?php
 
class MY_Controller extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
    }

    public function _header()
    {
        $this->load->view('templates/header');
    }
    
   public function _sidebar()
    {       
       $data['year'] = 2018; // ���� ����
       $obj_result = $this->race_info_model->gets($data['year']); // ��ü ����       
       $this->load->view('templates/sidebar', array('arr_result'=>$obj_result));           
    }

   public function _footer()
    {
       $this->load->view('templates/footer');    
    }    
}