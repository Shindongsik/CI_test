<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic extends CI_Controller {
    function __construct(){
        parent::__construct();

        $this->load->model('topic_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $data = $this->topic_model->gets();

        $this->load->view('header');
		$this->load->view('topic', array('topics'=>$data));
        $this->load->view('footer');
	}

  // public function get(){
  //   echo "토픽 get 아이디 없음";
  // }

    public function get($id)
    {
        $data = $this->topic_model->get($id);

        $this->load->view('header');
        $this->load->view('get', array('topic'=>$data));
        $this->load->view('footer');
    }

    public function add(){
        $title = $this->input->post('title');
        $this->topic_model->add($title);

        $this->load->library('user_agent');
        if ($this->agent->is_referral())
        {
            redirect($this->agent->referrer());
        }
    }

    public function remove(){
        $id = $this->input->post('id');
        $this->topic_model->remove($id);

        $this->load->library('user_agent');
        if ($this->agent->is_referral())
        {
            redirect($this->agent->referrer());
        }
    }

    public function modify(){
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $this->topic_model->modify($id,$title,$description);

        $this->load->library('user_agent');
        if ($this->agent->is_referral())
        {
            //echo $this->agent->referrer();
            redirect(substr($this->agent->referrer(), 0, 36));
        }
    }
}
