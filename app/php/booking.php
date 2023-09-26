<?php 
session_start();
if (!isset($_SESSION["user"])) {
  header("Location: login.php");
}
?>

<head>
  <title>Booking Page</title>
  <?php include'../components/nav.php' ?>
</head>
<body>
  <main>
    hello
  </main>
  <footer>
    <?php include'../components/footer.php' ?>
  </footer>
</body>
