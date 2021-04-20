<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->model("Home_model");
        
        
    }
	public function index()
	{
	
		$this->load->view('front/video/index');
	}
	
	public function v_2(){
	
	$this->load->view('front/video/2');
	}
	
	public function question_1 (){
	print_r($_REQUEST);die;
	 	$data = array(
			'segment_id' => 1,
			'question_name	' => $this->input->post('question_name1'),
			'question_name_2' => $this->input->post('question_name_2'),
			'anser_name1' => $this->input->post('first'),  
			'anser_name' => $this->input->post('radio4'),  
		   );
		   
		  
	   $this->Home_model->video_journal_2($data);
	  // redirect("video/v_2");
	}
	public function video_2(){
	
	$this->load->view('front/video/video2');
	}	
	public function segment_2(){
		
	$data = array(
			'segment_id' => 2,
			'question_name	' => $this->input->post('message'),
			'anser_name1' => $this->input->post('name'),  
			'question_name_2' => $this->input->post('message1'),
			'anser_name' => $this->input->post('email'),  
		   );
		  
	   $this->Home_model->video_journal_2($data);
	
	 //redirect("video/video_2");
	}
	
	
	
	public function video_3(){
	
	$this->load->view('front/video/video3');
	}
	public function segment_3 (){
	
		$data = array(
		   'segment_id' => 3,
		   'question_name	' => $this->input->post('question_name1'),
		   'question_name_2' => $this->input->post('question_name_2'),
		   'anser_name1' => $this->input->post('first'),  
		   'anser_name' => $this->input->post('radio4'),  
		  );
		  
		 
	  $this->Home_model->video_journal_2($data);
	 
   }
	
	
	
	public function video_4(){
	
	$this->load->view('front/video/video4');
	}
	
	public function segment_4 (){
	
		$data = array(
		   'segment_id' => 4,
		   'question_name	' => $this->input->post('question_name1'),
		   'question_name_2' => $this->input->post('question_name_2'),
		   'anser_name1' => $this->input->post('first'),  
		   'anser_name' => $this->input->post('radio4'),  
		  );
		  
		 
	  $this->Home_model->video_journal_2($data);
	 
   }
		public function video_5(){
	
	$this->load->view('front/video/video5');
	}
	public function segment_5(){
	
		$data = array(
		   'segment_id' => 5,
		   'question_name	' => $this->input->post('question_name1'),
		   'question_name_2' => $this->input->post('question_name_2'),
		   'anser_name1' => $this->input->post('first'),  
		   'anser_name' => $this->input->post('radio4'),  
		  );
		 
		 
	  $this->Home_model->video_journal_2($data);
	 
   }
	
	
		public function video_6(){
	
	$this->load->view('front/video/video6');
	}
	public function segment_6(){
	
		$data = array(
		   'segment_id' => 6,
		   'question_name	' => $this->input->post('question_name1'),
		   'question_name_2' => $this->input->post('question_name_2'),
		   'anser_name1' => $this->input->post('first'),  
		   'anser_name' => $this->input->post('radio4'),  
		  );
		  
		  
	  $this->Home_model->video_journal_2($data);
	 
   }
	
	
	
	
		public function video_7(){
	
	$this->load->view('front/video/video7');
	}
	
	public function segment_7(){
	
		$data = array(
		   'segment_id' => 7,
		   'question_name	' => $this->input->post('question_name1'),
		   'question_name_2' => $this->input->post('question_name_2'),
		   'anser_name1' => $this->input->post('first'),  
		   'anser_name' => $this->input->post('radio4'),  
		  );
		  
		 
	  $this->Home_model->video_journal_2($data);
	 
   }
		public function video_8(){
	
	$this->load->view('front/video/video8');

	}
	public function segment_8(){
	
		$data = array(
		   'segment_id' => 8,
		   'question_name	' => $this->input->post('question_name1'),
		   'question_name_2' => $this->input->post('question_name_2'),
		   'anser_name1' => $this->input->post('first'),  
		   'anser_name' => $this->input->post('radio4'),  
		  );
		  
		 
	  $this->Home_model->video_journal_2($data);
	 
   }
	
	
	
	
	public function video_9(){
	
	$this->load->view('front/video/video9');

	}
	public function segment_9(){
	
		$data = array(
		   'segment_id' => 9,
		   'question_name	' => $this->input->post('question_name1'),
		   'question_name_2' => $this->input->post('question_name_2'),
		   'anser_name1' => $this->input->post('first'),  
		   'anser_name' => $this->input->post('radio4'),  
		  );
		  
		 
	  $this->Home_model->video_journal_2($data);
	 
   }
	public function video_10(){
	
	$this->load->view('front/video/video10');

	}
	public function segment_10(){
	
		$data = array(
		   'segment_id' => 10,
		   'question_name	' => $this->input->post('question_name1'),
		   'question_name_2' => $this->input->post('question_name_2'),
		   'anser_name1' => $this->input->post('first'),  
		   'anser_name' => $this->input->post('radio4'),  
		  );
		  
		 
	  $this->Home_model->video_journal_2($data);
	 
   }
	
	
	
	public function video_11(){
	
	$this->load->view('front/video/video11');

	}
	public function segment_11(){
	
		$data = array(
		   'segment_id' => 11,
		   'question_name	' => $this->input->post('question_name1'),
		   'question_name_2' => $this->input->post('question_name_2'),
		   'anser_name1' => $this->input->post('first'),  
		   'anser_name' => $this->input->post('radio4'),  
		  );
		  
		 
	  $this->Home_model->video_journal_2($data);
	 
   }
	
	
	
	
	public function video_12(){
	
	$this->load->view('front/video/video12');

	}
	public function segment_12(){
	
		$data = array(
		   'segment_id' => 12,
		   'question_name	' => $this->input->post('question_name1'),
		   'question_name_2' => $this->input->post('question_name_2'),
		   'anser_name1' => $this->input->post('first'),  
		   'anser_name' => $this->input->post('radio4'),  
		  );
		  
		 
	  $this->Home_model->video_journal_2($data);
	 
   }
	
	
	
	public function video_13(){
	
	$this->load->view('front/video/video13');

	}
	
	public function segment_13(){
	
		$data = array(
		   'segment_id' => 13,
		   'question_name	' => $this->input->post('question_name1'),
		   'question_name_2' => $this->input->post('question_name_2'),
		   'anser_name1' => $this->input->post('first'),  
		   'anser_name' => $this->input->post('radio4'),  
		  );
		  
		 
	  $this->Home_model->video_journal_2($data);
	 
   }
	
	
	
	public function video_14(){
	
	$this->load->view('front/video/video14');

	}
	public function segment_14(){
	
		$data = array(
		   'segment_id' => 14,
		   'question_name	' => $this->input->post('question_name1'),
		   'question_name_2' => $this->input->post('question_name_2'),
		   'anser_name1' => $this->input->post('first'),  
		   'anser_name' => $this->input->post('radio4'),  
		  );
		  
		 
	  $this->Home_model->video_journal_2($data);
	 
   }
	
	
	
	
		public function k_4(){
	
	$this->load->view('front/video/k_4');

	}
	public function k4(){
	
		$data = array(
		   'segment_id' => 3,
		   'question_name	' => $this->input->post('question_name1'),
		   'question_name_2' => $this->input->post('question_name_2'),
		   'anser_name1' => $this->input->post('first'),  
		   'anser_name' => $this->input->post('radio4'),  
		  );
		  
		 
	  $this->Home_model->video_journal_2($data);
	 
   }
	
	
	
}
