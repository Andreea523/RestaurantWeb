<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AdminModel extends CI_Model{
    //put your code here
    public $id1;
    public $des;
    public $pret;
    public $den;
    public $image;
    public function __construct()
        {
            $this->load->database();
        }
    public function addProduct($data) {
        $this->db->insert('mancare', $data);
    }
    public function getAllProducts() {
        $query = $this->db->get('mancare');
        return $query->result();
    }
    public function deleteProduct($productId)
    {
        $this->db->delete('mancare', array('id1' => $productId));
    }
    public function editProduct($data)
    {
        $this->db->replace('mancare', $data); 
    }
    public function getProduct($productId)
    {
        $this->db->select('*')->from('mancare')->where('id1', $productId);
        $query = $this->db->get();
        return $query->result();
    }
}
