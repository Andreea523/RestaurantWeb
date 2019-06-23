<?php

class AdminController extends CI_Controller{
    
    public function index(){
        if($this->session->userdata('username')){
            $this->load->view('adminCheck');
        }else
        {
            redirect('LoginController/index');
        }
    }
    
        public function addProduct()
        {
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);



            $data = array(
                'den' => $this->input->post('den'),
                'pret' => $this->input->post('pret'),
                'image' => file_get_contents($_FILES['userfile']['tmp_name']),
                'des' => $this->input->post('des'),
                
            );                
            $this->load->model('AdminModel');
            $this->AdminModel->addProduct($data);
            redirect(site_url('MenuController/index'));
        }
        public function editProduct($productId) 
        {
            $this->load->model('AdminModel');
            $data['product'] = $this->AdminModel->getProduct($productId);
            $this->load->view('MenuEdit', $data);
        }
        public function updateProduct($productId)
        {
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);



            $data = array(
                'id1' => $productId,
                'den' => $this->input->post('den'),
                'pret' => $this->input->post('pret'),
                'image' => file_get_contents($_FILES['userfile']['tmp_name']),
                'des' => $this->input->post('des')
            );                
            $this->load->model('AdminModel');
            $this->AdminModel->editProduct($data);
            redirect(site_url('MenuController/index'));
        }
        public function deleteProduct($productId)
        {
            $this->load->model('AdminModel');
            $this->AdminModel->deleteProduct($productId);
            redirect(site_url('MenuController/index'));
        }
    
    
    
    
}

?>

