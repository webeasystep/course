<?php session_start();
if (isset($_POST['submit'])) {
    $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
    $subject = htmlspecialchars(stripslashes(trim($_POST['subject'])));
    $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
    $message = htmlspecialchars(stripslashes(trim($_POST['message'])));
    if (!preg_match("/^[A-Za-z .'-]+$/", $name)) {
        $name_error = 'Invalid name';
    }
    if (!preg_match("/^[A-Za-z .'-]+$/", $subject)) {
        $subject_error = 'Invalid subject';
    }
    if (!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)) {
        $email_error = 'Invalid email';

    }
    if (strlen($message) === 0) {
        $message_error = 'Your message should not be empty';
    }
    $to = "email@yahoo.com";
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type:text/html; charset=UTF-8' . "\r\n";
    $headers .= "From: " . $_POST['name'] . "<" . $_POST['email'] . ">\r\n";
    $headers .= "Reply-To: " . $_POST["email"] . "\r\n";
    $mail_subject = 'Messsage received for' . $subject . ' Contact Page';
    $body = $subject . '
	The person that contacted you is  ' . $name . '
	 E-mail: ' . $email . '
	 Subject: ' . $subject . '
	 Message: 
	 ' . $message . '	
	|---------END MESSAGE----------|';
    echo "Thank you fo your feedback. I will contact you shortly if needed.<br/>
    Go to <a href='/index.php'>Home Page</a>";
    mail($to, $subject, $body, $headers);
} else {
    echo "You must write a message. </br> 
    Please go to <a href='/index.php'>Home Page</a>";
}

