<?php
  require_once 'connection/connection.php';

  if(isset($_POST['signup'])){
    $mail = mysqli_real_escape_string($connection,$_POST['mail']);
    $fname = $_POST['fname'];

    if($_POST['pwd']==$_POST['confpwd']){
      $pwd = password_hash($_POST['pwd'],PASSWORD_DEFAULT);
      $sql1 = "INSERT INTO Users (full_name, email, password_hash) VALUES('{$fname}','{$mail}', {'$pwd'})";
      $result = mysqli_query($connection,$sql1);

      if(isset($result)){
        header("Location:login.php");
      }

    }


  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Construction Sign-Up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: url('img/background2.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: Arial, sans-serif;
    }
    .signup-container {
      background-color: rgba(246, 245, 241, 0.95);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      width: 50%;
      height: 100%;
      max-width: 450px;
    }
    .logo {
      width: 100px;
      margin-bottom: 20px;
    }
    .btn-primary {
      background-color: #f39c12;
      border-color: #e67e22;
    }
    .btn-primary:hover {
      background-color: #e67e22;
      border-color: #d35400;
    }
    footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
  </style>
</head>
<body>
  <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="signup-container text-center">
        <img src="img/logo.png" alt="Top Left Image" style="width: 150px;" >
      <h3 class="mb-4" style="font-weight:700;">Create Your BuildTrack Account</h3>
      <form action="signup.php" method="post">
        <div class="mb-3 text-start">
          <label for="fullName" class="form-label">Full Name</label>
          <input name="fname" type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
        </div>
        <div class="mb-3 text-start">
          <label for="email" class="form-label">Email Address</label>
          <input name="mail" type="email" class="form-control" id="email" placeholder="Enter your email" required>
        </div>
        <div class="mb-3 text-start">
          <label for="password" class="form-label">Password</label>
          <input name="pwd" type="password" class="form-control" id="password" placeholder="Create a password" required>
        </div>
        <div class="mb-3 text-start">
          <label for="confirmPassword" class="form-label">Confirm Password</label>
          <input name="confpwd"type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password" required>
        </div>
        <button name="signup" type="submit" class="btn btn-primary w-100">Sign Up</button>
      </form>
      <div class="mt-3">
        <p>Already have an account? <a href="#">Login</a></p>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  
  <footer>
        <p>&copy; 2024 BuildTrack. All Rights Reserved.</p>
    </footer>
</body>
</html>
