<?php 
session_start();
if (!isset($_SESSION["user"])) {
  header("Location: login.php");
}
?>

<title>Profile Page</title>
<?php include'../components/nav.php' ?>
<body>
  <main>
    <a href="logout.php">Logout</a>
  </main>
  <footer>
    <?php include'../components/footer.php' ?>
  </footer>
</body>