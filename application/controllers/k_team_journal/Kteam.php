<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kteam extends CI_Controller {







	public function dashboard()
	{
		if($this->session->userdata('adminname')!=''){
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/dashboard');
		$this->load->view('k_team_journal/footer');
		}
		else{
			redirect('admindashboard');

		}

	}
	
	public function project_list()
	{
		if($this->session->userdata('adminname')!=''){
			$this->load->model('k_team_journal/Episode_Model','Episode_Model');
		
		
			$episodedata['h'] = $this->Episode_Model->get_info();
					$this->load->model('Topic_Model');
					$topicsdata['m'] = $this->Topic_Model->get_data();
				$this->load->view('k_team_journal/header');
		
				$this->load->view('k_team_journal/project_list',$episodedata+$topicsdata);
				$this->load->view('k_team_journal/footer');
	}else{
		redirect('admindashboard');

		}
	}
	
	public function kteam_file_manager()
	{
		if($this->session->userdata('adminname')!=''){
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/kteam_file');
		$this->load->view('k_team_journal/footer');
	}else{
		redirect('admindashboard');

	}
	}
	
	public function kteam_library()
	{

		if($this->session->userdata('adminname')!=''){
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/kteam_library');
		$this->load->view('k_team_journal/footer');
	}else{
		redirect('admindashboard');

	}

	}
	
	public function kteam_userdata()
	{

	
		if($this->session->userdata('adminname')!=''){	
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/kteam_userdata');
		$this->load->view('k_team_journal/footer');
	}else{
		redirect('admindashboard');

	}
	}
	
	public function userdata_view()
	{

		if($this->session->userdata('adminname')!=''){	
			$id = $this->input->post('id');
			$this->load->model('k_team_journal/Episode_Model','Episode_Model');
			$data['topics']= $this->Episode_Model->topics_list();
	
			$this->load->view('k_team_journal/header');
			$this->load->view('k_team_journal/userdata_view',$data);
			$this->load->view('k_team_journal/footer');
	}else{
		redirect('admindashboard');

	}
	}
	
	public function userdata_topic_view()
	{
         $data[] = "";
		if($this->session->userdata('adminname')!=''){	
			$id= $this->input->post('id');
			$this->load->model('k_team_journal/Episode_Model','Episode_Model');
			if($id == 1 ){	
				$data['topic']= $this->Episode_Model->topics_list_id1($id);
	
			}elseif($id == 2){
				$data['topic']= $this->Episode_Model->topics_list_id2($id);
				//echo $this->db->last_query();die;
			}elseif($id == 3){
				$data['topic']= $this->Episode_Model->topics_list_id3($id);
			}elseif($id == 4){
				$data['topic']= $this->Episode_Model->topics_list_id4($id);
			}elseif($id == 5){
				$data['topic']= $this->Episode_Model->topics_list_id5($id);
			}elseif($id == 6){
				
				$data['topic']= $this->Episode_Model->topics_list_id6($id);
			}
			//echo "<pre/>";	print_r($data);die;
			
	//
			$this->load->view('k_team_journal/header');
			$this->load->view('k_team_journal/userdata_topic_view',$data);
			 $this->load->view('k_team_journal/footer');
	}else{
		redirect('admindashboard');

	}
	}
	
}
