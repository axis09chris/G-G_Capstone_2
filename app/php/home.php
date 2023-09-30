<title>Home Page</title>
<link rel="stylesheet" href="../css/home.css?v=<?php echo time(); ?>">
<?php include '../components/nav.php' ?>

<body>
  <main>
    <div class="container1">
    </div>
    <section>
      <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <!-- Modal content -->
        <div class="modal-content">
          <a href="../php/profile.php">
            <div class="sidebar-modal-content">Profile</div>
          </a>
          <a href="../php/login.php">
            <div class="sidebar-modal-content">Login</div>
          </a>
          <a href="../php/registration.php">
            <div class="sidebar-modal-content">Sign up</div>
          </a>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <?php include'../components/footer.php' ?>
  </footer>
  <script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];
    
    btn.onclick = function() {
      modal.style.display = "block";
    }
    
    span.onclick = function() {
      modal.style.display = "none";
    }
    
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
</body>