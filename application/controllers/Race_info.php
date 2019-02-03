<?php

class Race_info extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('race_info_model');
    }

    // �ش���� ���� ���� �����ֱ�
    public function index()
    {
        $data['year'] = date("Y");
        $data['race_info'] = $this->race_info_model->get_race_info($data['year']);

        $this->load->view('templates/header');
        $this->load->view('race_info/race_info_view', $data);
        $this->load->view('templates/footer');
    }

    public function view($year = NULL)
    {
        $data['year'] = $year;
        $data['race_info'] = $this->race_info_model->get_race_info($data['year']);

        if (empty($data['race_info'])) { show_404();}        

        $this->load->view('templates/header');
        $this->load->view('race_info/race_info_view', $data);
        $this->load->view('templates/footer');
    }
    
    public function add()
    {
        
        $this->load->view('templates/header');
        
        /* 1. �⺻ Ŭ���� �ε� */
        //$this->load->helper('form');
        //$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        
        /* 2. validation ���� */
        $this->form_validation->set_rules('race_place', '����', 'trim|required|min_length[1]|max_length[1]');
        $this->form_validation->set_rules('race_ymd', '�Ͻ�', 'trim|required|min_length[1]|max_length[10]');
        $this->form_validation->set_rules('race_round', 'ȸ��', 'trim|required|min_length[1]|max_length[1]');
        $this->form_validation->set_rules('entry_grade', '��������', 'trim|required|min_length[1]|max_length[50]');
        
        /* 3. ��ȣ��  */
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('race_extr/add_view');
        }
        else
        {
            echo "race_seq:".$race_seq = $this->race_info_model->set_race_info();
            //$this->load->helper('url');
            // redirect('/race_info/view/');
        }
        
        $this->load->view('templates/footer');
    }
    
    

}
