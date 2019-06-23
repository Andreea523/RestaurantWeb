<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class RezervModel extends CI_Model{
    //put your code here
    public $id;
    public $nume;
    public $pers;
    public $data;
    public $ora;
    public function __construct()
        {
            $this->load->database();
        }
    public function addPeople($data) {
        $this->db->insert('persoana', $data);
    }
    public function getAllPeople() {
        $query = $this->db->get('persoana');
        return $query->result();
    }
    public function deletePeople($productId)
    {
        $this->db->delete('persoana', array('id' => $productId));
    }
    public function editPeople($data)
    {
        $this->db->replace('persoana', $data); 
    }
    public function getPeople($productId)
    {
        $this->db->select('*')->from('persoana')->where('id', $productId);
        $query = $this->db->get();
        return $query->result();
    }
}
