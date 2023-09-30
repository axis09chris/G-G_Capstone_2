<?php 
session_start();
if (isset($_SESSION["user"])) {
  header("Location: home.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Login Page</title>
  <!-- <link rel="stylesheet" href="../css/logins.css"> -->
  <link rel="stylesheet" href="../css/logins.css?v=<?php echo time(); ?>">
</head>
<body>
  <div class="main">
    <div class="right">
      <?php
      if (isset($_POST["login"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        require_once "database.php";
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if ($user) {
          if (password_verify($password, $user["password"])) {
            session_start();
            $_SESSION["user"] = "yes";
            header("Location: home.php");
            die();
          } else {
            echo "<div class='alert alert-danger'>Password does not match!</div>";
          }
        }else {
          echo "<div class='alert alert-danger'>Email does not match!</div>";
        }
      }
      ?>
      <form action="login.php" method="post">
        <div class="form-group">
          <input type="email" class="form-control" name="email" placeholder="Enter email : ">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Enter password : ">
        </div>
        <div class="form-btn">
          <input type="submit" class="btn btn-primary" value="Login" name="login">
        </div>
        <div class="form-group">
          <h5>Don't have an account? <a href="registration.php">Sign up</a></h5>
        </div>
      </form>
    </div>
    <div class="left">
      <img src="../../img/gg-logo.png" alt="logo">
      <p>The Place Gian&Gaela's <small>Funtion Hall & Food Services</small></p>
    </div>
  </div>
</body>
</html>