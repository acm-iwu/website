 <?php
    
		if(isset($_POST['user']) && isset($_POST['email'])&& 
		isset($_POST['subject'])&& isset($_POST['Message'])){
			if(!empty($_POST['user']) && !empty($_POST['email'])&& 
		!empty($_POST['subject'])&& !empty($_POST['Message'])){
			$user = $_POST['user'];
			$email = $_POST['email'];
			$subject = $_POST['subject'];
			$mess = $_POST['Message'];
			$to = "ihteshamhussain1994@gmail.com";
			$subject_text = $subject;
			$header = "From: '$user' <'$email'> ";
			$body = $mess;
			
			if(mail($to, $subject_text,$body, $header)){
			
				echo "your email has been sent successfully";
			
			}else{
			
				echo "error sending email";
			
			}
				
				
				}
			}
		
	?>