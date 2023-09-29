<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../css/nav.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="../css/gen.css?v=<?php echo time(); ?>">
</head>

<body>
  <main class="sidebar">
    <section>
      <nav>
        <div>
          <img src="../../img/gg-logo.png" alt="#" class="logo">
        </div>
        <div>
          <p class="logo-name">The Place Gian & Gaela's</p>
        </div>
      </nav>
    </section>

    <section class="sidebar-content-top">
      <a href="../php/home.php">
        <div class="sidebar-content">
          <div><img class="sidebar-icon" src="../../icons/home.png" alt="home"></div>
          <div>Home</div>
        </div>
      </a>

      <a href="../php/meals.php">
        <div class="sidebar-content">
          <div><img class="sidebar-icon" src="../../icons/breakfast.png" alt="meals"></div>
          <div>Cuisine</div>
        </div>
      </a>

      <a href="#">
        <div class="sidebar-content">
          <div><img class="sidebar-icon" src="../../icons/menu.png" alt="menu"></div>
          <div>All categories</div>
        </div>
      </a>

      <a href="../php/booking.php">
        <div class="sidebar-content">
          <div><img class="sidebar-icon" src="../../icons/appointment.png" alt="booking"></div>
          <div>Booking</div>
        </div>
      </a>

      <a href="../php/review_form.php">
        <div class="sidebar-content">
          <div><img class="sidebar-icon" src="../../icons/feedback.png" alt="reviews"></div>
          <div>Reviews</div>
        </div>
      </a>

      <a href="#">
        <div class="sidebar-content">
          <div><img class="sidebar-icon" src="../../icons/calendar.png" alt="calendar"></div>
          <div>Calendar</div>
        </div>
      </a>
      
      <a href="../php/career.php">
        <div class="sidebar-content">
          <div><img class="sidebar-icon" src="../../icons/career.png" alt="career"></div>
          <div>Careers</div>
        </div>
      </a>

      <a href="../php/gallery.php">
        <div class="sidebar-content">
          <div><img class="sidebar-icon" src="../../icons/image.png" alt="gallery"></div>
          <div>Gallery</div>
        </div>
      </a>

      <a href="../php/about.php">
        <div class="sidebar-content">
          <div><img class="sidebar-icon" src="../../icons/users-avatar.png" alt="about"></div>
          <div>About us</div>
        </div>
      </a>
    </section>

    <section class="sidebar-content-bottom">
      <div class="sidebar-content" id="myBtn">
        <div><img class="sidebar-icon" src="../../icons/burger-menu-svgrepo-com.svg" alt="about"></div>
        <div>More</div>
      </div>

      <!-- The Modal -->
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
</html>