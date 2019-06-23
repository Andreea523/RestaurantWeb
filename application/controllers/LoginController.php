<?php

class LoginController extends CI_Controller{
    public function index(){
        $this->load->view('login');
    }
    
        public function check(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        if($username=='admin' && $password =='admin'){
            $this->session->set_userdata(array('username'=>$username));
            $this->load->view('adminCheck');
            //set_cookie('login', $username . '|' . $password, 31556926);
        }else{
            $data['error']='Error message!!!';
            $this->load->view('login', $data);
        }
    }
    public function logout(){
        $this->session->unset_userdata('username');
        redirect('LoginController/index');
    }
    
    

     public function adminCheck(){
        if($this->session->userdata('username')){
            $this->load->view('adminCheck');
        }else
        {
            redirect('LoginController/index');
        }
    }
}
?>
