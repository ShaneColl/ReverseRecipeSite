<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reverse Cook Book</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  </head>
  <body>
    
    <div class="pre-login">
      <form>
        <div class="imgcontainer">
          <img src="header.jpg" alt="Avatar" class="avatar">
        </div>
        <div class="container">
          <label><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>
          <label><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
          <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Login</button>
          <input type="checkbox" checked="checked"> Remember me
        </div>
        <div class="container">
          <button type="button" class="cancelbtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Cancel</button>
          <button class="psw mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Forgot Password?</button>
        	<button onclick="location.href = 'index.html';" id="create" class="create mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" >Create an Account</button>
        </div>
      </form>
    </div>

    <div class="create-account">
      <form>
        <div class="container">
        <div class="imgcontainer">
          <img src="header.jpg" alt="Avatar" class="avatar">
        </div>
          <label><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>

          <label><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <label><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
          <input type="checkbox" checked="checked"> Remember me
          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

          <div class="clearfix">
            <button type="button"  class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
          </div>
        </div>
      </form>
    </div>

    <div class="home-page">
      <h1>Reverse Cook Book</h1>
      <br><br><br>
      <text>You are logged in!</text>
    </div>

    <script src="controller.js"></script>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <?php
      include 'oracle.php';
    ?>
  </body>
<html>