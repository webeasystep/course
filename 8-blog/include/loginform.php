<form class="navbar-form navbar-left" action=<?php echo $login_url; ?> method="POST">
        <div class="form-group">
          	<input type="text" class="form-control" placeholder="Username" name="username">
        </div>
        <div class="form-group">
          	<input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <button type="submit" class="btn btn-default" name="submit">Sign In</button>

        <a href=<?php echo $register_url; ?> class="btn btn-default">Sign Up</a>
 </form>

 <!-- Split button -->
 <!--
<div class="btn-group">
  <button type="button" class="btn btn-danger">Action</button>
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
-->
