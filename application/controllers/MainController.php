<?php


class MainController extends CI_Controller{
    public function index(){
      $this->load->model('RezervModel');
            $data['persoane'] = $this->RezervModel->getAllPeople();
            $this->load->view('index', $data);
    } 
   public function addPeople()
        {
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);



            $data = array(
                'nume' => $this->input->post('nume'),
                'pers' => $this->input->post('pers'),
                'data' => $this->input->post('data'),
                'ora' => $this->input->post('ora')
                
            );                
            $this->load->model('RezervModel');
            $this->RezervModel->addPeople($data);
            redirect(site_url('MainController/index'));
        }
}
?>

