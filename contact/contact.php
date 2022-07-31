<?php
    if(isset($_POST['submit'])){
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $subject = trim($_POST['subject']);
        $message = trim($_POST['message']);
        
        $myMail = "magarayusha54@gmail.com";
        $header = "From: " . $email;
        $message2 = "You have received a message from ". $name .".\n\n".$message;
        //1. E-mail you are sending it to
        //2. Subject
        //3. Is the message
        mail($myMail, $subject, $message2, $header);
        echo '<script>alert("Email sent successfully !")</script>';

        echo '<script>window.location.href="index.php";</script>';
        //header("Location: index.php?mailSend");
    }

   /* if(isset($_POST['submit'])){
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $subject = trim($_POST['subject']);
        $message = trim($_POST['message']);

    $to = "magarayusha54@gmail.com";
    $subject = $subjectName;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.$email.'<'.$email.'>' . "\r\n".'Reply-To: '.$email."\r\n" . 'X-Mailer: PHP/' . phpversion();
    $message = '<!doctype html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport"
					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>Document</title>
			</head>
			<body>
			<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">'.$message.'</span>
				<div class="container">
                 '.$message.'<br/>
                    Regards<br/>
                  '.$email.'
				</div>
			</body>
			</html>';
    $result = @mail($to, $subject, $message, $headers);

    echo '<script>alert("Email sent successfully !")</script>';
    
}*/
        
?>

