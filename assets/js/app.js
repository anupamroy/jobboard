$(document).ready(function(){
   var base_url="http://localhost:81/jobs/index.php";

	$("#btn_submit_create_account").click(function(e){
		var full_name=$("#full_name").val();
		var email=$("#email").val();
		var mobile_number=$("#mobile_number").val();
		var mail_valid = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		var phone_valid = /^\d{10}$/;
		var valid=1;
		if(full_name=='' && valid==1){
			$("#error").show();
			$("#error").text('Please enter Full Name');
			valid=0;
		}
		if(email=='' && valid==1){
			$("#error").show();
			$("#error").text('Please enter Email');
			valid=0;
		}
		if(email!='' && valid==1){
			if(!mail_valid.test(email)){
				$("#error").show();
				$("#error").text('Please enter Valid Email');
				valid=0;
			}
				
			
		}
		if(mobile_number=='' && valid==1){
			$("#error").show();
			$("#error").text('Please enter Mobile');
			valid=0;
		}
		
		if(mobile_number!='' && valid==1)
		{
			if(!phone_valid.test(mobile_number)){
				$("#error").show();
				$("#error").text('Please enter Valid Mobile');
				valid=0;
			}
		}



		if(valid==1){

			$.ajax({
					type:"POST",
					url:base_url+"/job_seeker/check_email",
					data:{'email':email},
					dataType:"json",
					success:function(data){
						if(data.result==1){
							$("#error").show();
							$("#error").text('You already have an account with us. Forgot password <a href="">click here</a>');
							valid=0;
						}else{

							$.ajax({
								type:"POST",
								url:base_url+"/job_seeker/save_job_seeker",
								data:{'full_name':full_name,'email':email,'mobile':mobile_number},
								dataType:"json",
								success:function(data){
									if(data.result==1){
										$("#error").hide();
										$("#success").show();
										$("#success").text('Thank you for registering with us. Please check your email to verify your email id');
										
									}
								}
										
							});
						}
					}
				})
			
		}
		e.preventDefault();
	})

});