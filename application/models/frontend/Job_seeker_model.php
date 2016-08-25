<?php class Job_seeker_model extends CI_Model{
	
			public function job_check_email($email){
				$this->db->select('job_seeker_id');
				$this->db->from('dt_job_seeker');
				$this->db->where('job_seeker_email',$email);
				$query=$this->db->get();

				if($query->num_rows()>0){
					$result=1;
				}else{
					$result=0;
				}
				return $result;
			} 

			public function job_save_seeker($job_seeker_array){
				$this->db->insert('dt_job_seeker',$job_seeker_array);
				if($this->db->affected_rows() > 0)
				{
				 	$job_seeker_id =$this->db->insert_id();
				 	$new_code=md5($job_seeker_array['job_seeker_email']);
				 	$verification_code=hash('ripemd160',$new_code);
				 	$data['verification_code']=$verification_code;
				 	$this->db->where('job_seeker_id', $job_seeker_id);
					$this->db->update('dt_job_seeker', $data); 
					return 1;

				}else{
					return 0;
				}

			}
}