<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function gets(){
        //$this->load->database();
        //$result = $this->db->query('SELECT * FROM todolist')->result();
        $result = $this->db->get('todolist')->result();

        //$this->db->close();

        return $result;
    }

    public function get($topic_id){
        //$result = $this->db->query('SELECT * FROM todolist WHERE id=?', $topic_id)->row();
        $result = $this->db->get_where('todolist', array('id'=>$topic_id))->row();

        return $result;
    }

    public function add($title){
        $data = array('title'=>$title, 'description'=>'test_data');
        $this->db->insert('todolist', $data);
    }

    public function remove($id){
        $data = array('id'=>$id);
        $this->db->delete('todolist', $data);
    }

    public function modify($id, $title, $description){
        $data = array('title'=>$title, 'description'=>$description);
        $where = array('id'=>$id);
        $this->db->update('todolist', $data, $where);
    }
}
