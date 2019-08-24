<?php

if(isset($_POST['submit'])) {
        // Check if name has been entered
        if (!$_POST['name']) {
        $errName = 'Please enter your name';
        }

        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email address';
        }

        //Check if message has been entered
        if (!$_POST['message']) {
        $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 5) {
        $errHuman = 'Your anti-spam is incorrect';
        }
} else {
  $errName="";
  $errEmail="";
  $errMessage="";
  $errHuman="";
}
 ?>

<div class="container">
  <div class="col-sm-10" >
  <form class="form-horizontal" role="form" method="post" action="contact_us.php">
      <div class="form-group">
          <label for="name" class="col-sm-3 control-label">Name</label>
          <div class="col-sm-6 ">
              <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" >
              <?php echo "<p class='text-danger'>$errName</p>";?>
          </div>
      </div>
      <div class="form-group">
          <label for="email" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-6">
              <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com">
              <?php echo "<p class='text-danger'>$errEmail</p>";?>
          </div>
      </div>
      <div class="form-group">
          <label for="message" class="col-sm-3 control-label">Message</label>
          <div class="col-sm-6">
              <textarea class="form-control" rows="4" name="message"></textarea>
              <?php echo "<p class='text-danger'>$errMessage</p>";?>
          </div>
      </div>
      <div class="form-group">
          <label for="human" class="col-sm-3 control-label">2 + 3 = ?</label>
          <div class="col-sm-6">
              <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
              <?php echo "<p class='text-danger'>$errHuman</p>";?>
          </div>
      </div>
      <div class="form-group">
          <div class="col-sm-10 col-sm-offset-2">
              <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
          </div>
      </div>
      <div class="form-group">
          <div class="col-sm-10 col-sm-offset-2">
              <?php
                if(isset($result))
                  echo $result;
              ?>
          </div>
      </div>
  </form>
</div>
</div>
