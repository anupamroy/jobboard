<?php class Job_seeker extends CI_Controller{
		

		function __construct(){

			parent::__construct();
			$this->load->model('frontend/Job_seeker_model','job_seeker');
		}

		public function create_account(){

			$this->load->view('frontend/header');
			$this->load->view('frontend/job_seeker/registration');
			$this->load->view('frontend/footer');
		}

		public function check_email(){
			$email=$this->input->post('email');
			$result=$this->job_seeker->job_check_email($email);
			$ret_arr=array('result'=>$result);
			echo json_encode($ret_arr);
		}

		public function save_job_seeker(){
			$full_name=$this->input->post('full_name');
			$email=$this->input->post('email');
			$mobile_number=$this->input->post('mobile');

			$input_arr=array();
			$input_arr['job_seeker_name']=$full_name;
			$input_arr['job_seeker_email']=$email;
			$input_arr['job_seeker_phone']=$mobile_number;

			$result=$this->job_seeker->job_save_seeker($input_arr);

			$ret_arr=array('result'=>$result);

			echo json_encode($ret_arr);
		}

}