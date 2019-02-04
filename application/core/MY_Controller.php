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
       $data['year'] = 2018; // 올해 정보
       $obj_result = $this->race_info_model->gets($data['year']); // 객체 리턴       
       $this->load->view('templates/sidebar', array('arr_result'=>$obj_result));           
    }

   public function _footer()
    {
       $this->load->view('templates/footer');    
    }    
}