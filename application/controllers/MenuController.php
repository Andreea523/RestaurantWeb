<?php

class MenuController extends CI_Controller{
    public function index(){
        $this->load->model('AdminModel');
            $data['mancare'] = $this->AdminModel->getAllProducts();
            $this->load->view('menu', $data);
    }
}

?>
