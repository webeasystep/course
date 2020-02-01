<?php
session_start(); ?>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">  
  <form id="contact" action="send_mail.php" method="post">
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>

      <fieldset>

      <select>
          <option value="0">--Choose Priority --</option>
          <option value="1">High</option>
          <option value="2">Medium</option>
          <option value="3">Low</option>
      </select>
      </fieldset>

      <fieldset>
      <input placeholder="Full Name" type="text" name="name" tabindex="1" required autofocus>
        <p><?php if (isset($_SESSION['name_error'])) echo $_SESSION['name_error']; ?></p>
    </fieldset>
    <fieldset>
      <input placeholder="Email Address" type="email" name="email" tabindex="2" required>
        <p><?php if (isset($email_error)) echo $email_error; ?></p>
    </fieldset>
    <fieldset>
      <input placeholder="Subject" type="text" name="subject" tabindex="3" required>
        <p><?php if (isset($subject_error)) echo $subject_error; ?></p>
    </fieldset>
   
    <fieldset>
      <textarea placeholder="Type your Message Here...." name="message" tabindex="5" required></textarea>
        <p><?php if (isset($message_error)) echo $message_error; ?></p>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form> 
</div>
</body>