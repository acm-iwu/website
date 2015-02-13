 <?php
    
		if(isset($_POST['user']) && isset($_POST['email'])&& 
		isset($_POST['subject'])&& isset($_POST['Message'])){
			if(!empty($_POST['user']) && !empty($_POST['email'])&& 
		!empty($_POST['subject'])&& !empty($_POST['Message'])){
			
	
			$user = $_POST['user'];
			$email = $_POST['email'];
			$subject = $_POST['subject'];
			$mess = $_POST['Message'];
			$to = "acm@iwu.edu";
			//$to = "ttattini@iwu.edu";
			$subject_text = $subject;
			$header = "From: '$user' <'$email'> ";
			$body = $mess;
			
			if(mail($to, $subject_text,$body, $header)){
			
				echo "your email has been sent successfully";
			
			}else{
			
				echo "error sending email";
			
			}
				
				
				}
				
				
				
/*				 
include('Mail.php');

$recipients = 'acm@iwu.edu';

$headers['From']    = $_POST['email']; // email id from where you want to send your mail.
//$headers['To']      = 'ttattini@iwu.edu';
$headers['Subject'] = $_POST['subject'];

$body = $_POST['Message'];

$params['sendmail_path'] = '/usr/lib/sendmail';

$host="localhost"; //servername
$username="root"; // userbame
$password=""; // password

$mail->SMTPAuth   = true;
$mail->SMTPSecure = "tls";
$params = array('debug'=>true,'host'=>$host,'port'=>$port,'auth'=>true,'username'=>$username,'password'=>$password);
$mail = Mail::factory('smtp', $params);
$mail->send($recipients,$headers,$body);

	*/			
			 	
		    	}
			
			}
		?>
	