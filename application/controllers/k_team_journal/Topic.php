<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic extends CI_Controller {


public function topic_creates (){

	$data = array(
		'episode	' => $this->input->post('episode'),
		  'title	' => $this->input->post('title'),
		   'topic_number	' => $this->input->post('number'),
		  'month	' => $this->input->post('month'),
	);
	

		$this->load->model('Topic_Model');
	$this->Topic_Model->create_topic($data );

	$topicsdata['h'] = $this->Topic_Model->get_data();

	$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/topic_list',$topicsdata);
		$this->load->view('k_team_journal/footer');
}

 public function topicNmbr($id) { 
       $result = $this->db->where("episode",$id)->get("topic")->result();
       //         $result = $this->db->query("SELECT COUNT(*) FROM topic WHERE episode = '$id' ")->result();

       // echo  $this->db->last_query();die;
       echo json_encode($result);
   }



public function topic_delete (){


		$id= $this->input->get('id');
	

		$this->load->model('Topic_Model');
	$this->Topic_Model->delete_topic($id );

	$topicsdata['h'] = $this->Topic_Model->get_data();

	$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/topic_list',$topicsdata);
		$this->load->view('k_team_journal/footer');
}




	public function topic_list()
	{
		if($this->session->userdata('adminname')!=''){	

			$this->load->model('Topic_Model');
			$topicsdata['h'] = $this->Topic_Model->get_data();
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/topic_list',$topicsdata);
		$this->load->view('k_team_journal/footer');
	}else{
		redirect(base_url());

	}
	}
	
	public function topic_create()
	{
		if($this->session->userdata('adminname')!=''){	
			$this->load->model('k_team_journal/Episode_Model','Episode_Model');
			$episode['h']= $this->Episode_Model->get_info();
			$this->load->model('Topic_Model');
			$topicsdata['h'] = $this->Topic_Model->get_data();
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/topic_create',$episode+$topicsdata);
		$this->load->view('k_team_journal/footer');
	}else{
		redirect(base_url());

	}
	}
	
	public function topic_view()
	{
		if($this->session->userdata('adminname')!=''){	
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/topic_view');
		$this->load->view('k_team_journal/footer');
	}else{
		redirect(base_url());

	}
	}
	
	public function topic_edit()
	{
		if($this->session->userdata('adminname')!=''){	
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/topic_edit');
		$this->load->view('k_team_journal/footer');
	}else{
		redirect(base_url());

	}
		
	}
	
	public function topic_tracker()
	{
		if($this->session->userdata('adminname')!=''){	
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/topic_tracker');
		$this->load->view('k_team_journal/footer');

	}else{
		redirect(base_url());

	}
	}
	
}
