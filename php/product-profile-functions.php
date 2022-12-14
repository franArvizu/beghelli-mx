<?php
	#####################################################
	####  BACKUP FOR THE ORIGINAL FUNCTIONS ####
	#####################################################
	
	// PROCESS CONTACT FORM
	function ProcessContactForm() {
		// echo "start";
		// PROCESS FORM DATA
		// echo "<pre>"; print_r($_POST) ; echo "</pre>";
		if(isset($_POST['form-type']) && !empty($_POST['form-type'])):
			// echo "step 1 go";
			if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
				// echo "step 2 go";
				//your site secret key
				//$secret = '6LfPTnYUAAAAAKw63yy1Ju8Mn1q14HpmMyAw2rnU';
				//get verify response data
				//$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
				//$responseData = json_decode($verifyResponse);
				// if($responseData->success):
					//contact form submission code
					$name = !empty($_POST['name'])?$_POST['name']:'';
					$surname = !empty($_POST['surname'])?$_POST['surname']:'';
					$email = !empty($_POST['email'])?$_POST['email']:'';
					$telephone = !empty($_POST['telephone'])?$_POST['telephone']:'';
					$message = !empty($_POST['message'])?nl2br($_POST['message']):'';
					$ip = !empty($_POST['ip'])?$_POST['ip']:'';
					$to = 'itzel.gomez@beghelli.com.mx, marketing@beghelli.com.mx';
					
					$subject = 'New Info request have been submitted';
					$htmlContent = "
							<h2>Request details</h2>
							<p><b>Name: </b>".$name."</p>
							<p><b>Surname: </b>".$surname."</p>
							<p><b>Email: </b>".$email."</p>
							<p><b>Phone: </b>".$telephone."</p>
							<p><b>Message: </b>".$message."</p>
							<p><b>IP Address: </b>".$ip."</p>
					";
					// Always set content-type when sending HTML email
					$headers = "MIME-Version: 1.0" . "\r\n";
					$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
					// More headers
					$headers .= 'From:'.$name.' <'.$email.'>' . "\r\n";
					//send email
					@mail($to,$subject,$htmlContent,$headers);
					
					$succMsg = 'Your contact request have submitted successfully.';
				// else:
				// 	$errMsg = 'Robot verification failed, please try again.';
				// endif;
			else:
				$errMsg = 'Please click on the reCAPTCHA box.';
			endif;
		else:
			$errMsg = '';
			$succMsg = '';
		endif;
		//echo $errMsg;
	}

?>