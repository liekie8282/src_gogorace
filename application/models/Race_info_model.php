<?php
class Race_info_model extends CI_Model {
     
    public function __construct()
    { 
        $this->load->database();
    }
    
    public function gets($year){  
        $sql = "SELECT * FROM race_info WHERE 1=1";
        if ($year)
            $sql = $sql." and race_year = '".$year."' limit 0,5";
        else if ($year == '')
            echo '<hr> -year : false '.$year.'</hr><br>';
                
        // echo '<hr>'.$sql.'<br>'; 
                
        return $this->db->query($sql)->result(); //��ü����
        //return $this->db->query($sql)->result_array();//�迭����
        //return $this->db->query($sql)->row_array(); //1 row ����
                
    }
    
    public function get($year){   
        $offset=0;
        $limit=5;
        $query = $this->db->get_where('race_info', array('race_year' => $year), $limit, $offset);
        
        //echo $this->db->limit(5,0)->g et_compiled_select($query,FALSE);
        
        return $query->row(); //��ü����
    }
    
    
    public function get_race_info($year = FALSE)
    {
        if ($year == FALSE)
        {
            $query = $this->db->get('race_info');
            return $query->result_array();
        }
        
        $query = $this->db->get_where('race_info', array('race_year' => $year));
        //return $query->row_array(); ����Ʈ ���� �ΰ�츸 ���
        return $query->result_array(); // ������ ����
    }
    
    public function set_race_info()
    {
        
         $this->load->helper('url');
         $data = array(
         'race_place' => $this->input->post('race_place'),
         'race_ymd' => $this->input->post('race_ymd'),
         'race_round' => $this->input->post('race_round'),
         'entry_grade' => $this->input->post('entry_grade')
         );
        
        // $this->db->set('edit_dt','NOW()',false);
        echo $this->db->insert('race_info', $data);
        echo $this->db->last_query();        
        
        return $this->db->insert_id(); // Ű�� ����
        
    }    
    
}
