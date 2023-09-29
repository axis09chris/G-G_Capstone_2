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
    <button type="button"><a href="logout.php">Logout</a></button>
  </main>
  <footer>
    <?php include'../components/footer.php' ?>
  </footer>
</body>