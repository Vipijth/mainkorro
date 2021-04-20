<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Episode extends CI_Controller {

	public function episode_list()
	{
		if($this->session->userdata('adminname')!=''){	
			$this->load->model('k_team_journal/Episode_Model','Episode_Model');
			$episodedata['h'] = $this->Episode_Model->get_info();
			$this->load->model('Topic_Model');
			$topicsdata['m'] = $this->Topic_Model->get_data();
		$this->load->view('k_team_journal/header');

		$this->load->view('k_team_journal/episode_list',$episodedata+$topicsdata);
		$this->load->view('k_team_journal/footer');
	}else{
		redirect('admindashboard');

	}
	}
	
	public function create_episode (){
		$this->load->helper('url');
		if($this->input->post('title') != NULL ){ 

			$filename='';
			$config['upload_path'] = 'uploads/'; 
			$config['allowed_types'] = '*';

			$config['max_size'] = '14000'; // max_size in kb 
			$config['file_name'] = $_FILES['file']['name']; 
			
			// Load upload library 
			$this->load->library('upload',$config); 
	  
			// File upload
			if($this->upload->do_upload('file')){ 
			   // Get data about the file
			   $uploadData = $this->upload->data(); 
			   $filename = $uploadData['file_name']; 
			  // print_r($filename);die;
			   $data['response'] = 'successfully uploaded '.$filename; 
			  

			  	$data = array(
		
		  'title	' => $this->input->post('title'),
		   'episode_number	' => $this->input->post('number'),
		  'month	' => $this->input->post('month'),
		  '	story_board'=>$filename,
	);

			  			  	$datas = array(
		
		 
		   'episode	' => $this->input->post('number'),
	
	);
	
 $tp =$this->input->post('topic');

$this->load->model('k_team_journal/Episode_Model','Episode_Model');
	$this->Episode_Model->create_topic($data );
	$this->load->model('k_team_journal/Episode_Model','Episode_Model');
	$this->Episode_Model->Update_topic($tp,$datas);
			$episodedata['h'] = $this->Episode_Model->get_info();
			$this->load->model('Topic_Model');
			$topicsdata['m'] = $this->Topic_Model->get_data();
		$this->load->view('k_team_journal/header');

		$this->load->view('k_team_journal/episode_list',$episodedata+$topicsdata);
		$this->load->view('k_team_journal/footer');
			}else{ 
			   $data['response'] = 'failed'; 
		
			} 
		 }else{ 
			$data['response'] = 'failed'; 
			
		 }
		
		

	}
	


	public function episode_delete (){


		$id= $this->input->get('id');
	

		$this->load->model('k_team_journal/Episode_Model','Episode_Model');
	$this->Episode_Model->delete_episode($id );

	$episodedata['h'] = $this->Episode_Model->get_info();
			$this->load->model('Topic_Model');
			$topicsdata['m'] = $this->Topic_Model->get_data();
		$this->load->view('k_team_journal/header');

		$this->load->view('k_team_journal/episode_list',$episodedata+$topicsdata);
		$this->load->view('k_team_journal/footer');
}



	public function create()
	{
		if($this->session->userdata('adminname')!=''){	

		$this->load->model('k_team_journal/Episode_Model','Episode_Model');
		$num['epnum']= $this->Episode_Model->get_data();
			
		$this->load->model('k_team_journal/Topic_Model','Topic_Model');
		$topics2['h']= $this->Topic_Model->get_info();
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/episode_create',$num+$topics2);
		$this->load->view('k_team_journal/footer');
	}else{
		redirect('admindashboard');

	}
	}
	
	public function view()
	{
		if($this->session->userdata('adminname')!=''){	
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/episode_view');
		$this->load->view('k_team_journal/footer');
	}else{
		redirect('admindashboard');

	}
	}
	
	public function edit()
	{
		if($this->session->userdata('adminname')!=''){	
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/episode_edit');
		$this->load->view('k_team_journal/footer');
	}else{
		redirect('admindashboard');

	}
	}
	
	public function tracker()
	{
		if($this->session->userdata('adminname')!=''){	
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/episode_tracker');
		$this->load->view('k_team_journal/footer');
	}else{
		redirect('admindashboard');

	}
	}
	
}
