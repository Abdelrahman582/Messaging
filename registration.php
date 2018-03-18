<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	  require('db.php');
      // If form submitted, insert values into the database.
    if (isset($_POST['username'])) {
      $username = trim($_POST['username']);
      $query = "SELECT * FROM users WHERE username = '$username'";
      $result = mysqli_query($con, $query);
      if($result) {
        $row = mysqli_fetch_row($result);
        if($row != NULL) {
          echo "<div class='form'><h3>This username is already taken.</h3><br/>
          Click here to <a href='registration.php'>Register</a></div>";
        }
        else {
          $email = trim($_POST['email']);
          $query = "SELECT * FROM users WHERE email = '$email'";
          $result = mysqli_query($con, $query);
          if($result) {
            $row = mysqli_fetch_row($result);
            if($row != NULL) {
              echo "<div class='form'><h3>This email is already taken.</h3><br/>
              Click here to <a href='registration.php'>Register</a></div>";
            }
            else {
              $email = stripslashes($_REQUEST['email']);
              $username = stripslashes($_REQUEST['username']); // removes backslashes
              $username = mysqli_real_escape_string($con, $username); //escapes special characters in a string
              $email = mysqli_real_escape_string($con,$email);
              $password = stripslashes($_REQUEST['password']);
              $password = mysqli_real_escape_string($con,$password);
              $trn_date = date("Y-m-d H:i:s");
              $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
              $result = mysqli_query($con,$query);
              if($result) {
                echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
              }
            }
          }
        }
      }
    }
  else 
  { ?>
    <div class="form">
      <h1>Registration</h1>
      <form name="registration" method="post">
        <input type="text" name="username" placeholder="Username" required />
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
        <input type="submit" name="submit" value="Register" />
      </form>
      <br/>
      <br/>
    </div>
  <?php } ?>
  </body>
  </html>
