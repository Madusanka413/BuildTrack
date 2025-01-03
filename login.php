<?php
    require_once 'connection/connection.php';

    session_start();

    if(isset($_POST['login'])){
        $mail = mysqli_real_escape_string($connection,$_POST['mail']);
        $pswd = mysqli_real_escape_string($connection,$_POST['pswd']);

        $sql = "SELECT * FROM Users WHERE email='{$mail}'";
        $result_set = mysqli_query($connection, $sql);

        if($result_set && mysqli_num_rows($result_set) == 1){
            $row = mysqli_fetch_assoc($result_set);
            $hashedPassword = $row['password_hash'];

            if(password_verify($pswd,$hashedPassword)){
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['fname'] = $row['full_name'];
                echo "<script>alert('Login success!');window.location.href='index.php';</script>";
                // if this is incorrect there will be an error
            }else {
              echo "error";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Construction Login</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
    rel="stylesheet"
  >
  <style>
    body {
      background: url('img/background2.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: Arial, sans-serif;
    }
    .login-container {
      background-color: rgba(255, 255, 255, 0.9);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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
    <div class="login-container text-center">
        <img src="img/logo.png" alt="Top Left Image" style="width: 250px;" >
      <h3 class="mb-4" style="font-weight: 700;">Login to BuildTrack</h3>
      <form   action="login.php" method="POST">
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" name="mail" id="email" placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="pswd" placeholder="Password">
        </div>
        <button name="login" type="submit" class="btn btn-primary w-100">Login</button>

        <!--<button type="submit" class="btn btn-primary w-100">Login</button> -->
      </form>
      <div class="mt-3">
        <a href="#">Forgot password?</a>
      </div>
      <div class="mt-3">
        <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <footer>
        <p>&copy; 2024 BuildTrack. All Rights Reserved.</p>
    </footer>
</body>
</html>
