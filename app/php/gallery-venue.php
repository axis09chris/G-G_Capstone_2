<title>G&G Gallery</title>
<link rel="stylesheet" href="../css/gallery-venue.css?v=<?php echo time(); ?>">
<?php include'../components/nav.php'?>

<body>
  <div class="gallery-title">
  <h1><a href="gallery.php">Gallery</a></h1>
  </div>
  <div class="container">
    <p>Venue Gallery</p>
    <hr>
    <main>
      <section class="ca">
        <div class="album-venue album-christening"><a href="gallery-christening.php"><span>Christening</span></a></div>
        <br>
        <div class="album-venue album-adult"><a href="gallery-adult.php"><span>Adult Party</span></a></div>
      </section>
      <section class="w">
        <div class="album-venue album-wedding"><a href="gallery-wedding.php"><span>Wedding</span></a></div>
      </section>      
      <section class="kd">
        <div class="album-venue album-kid"><a href="gallery-kids.php"><span>Kids Party</span></a></div>
        <br>
        <div class="album-venue album-debut"><a href="gallery-debut.php"><span>Debut</span></a></div>
      </section>
      <br>
    </main>
  </div>
  <footer>
    <?php include'../components/footer.php' ?>
  </footer>
</body>