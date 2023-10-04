<title>G&G Gallery</title>
<link rel="stylesheet" href="../css/gallery-food.css?v=<?php echo time(); ?>">
<?php include'../components/nav.php'?>

<body>
  <div class="gallery-title">
  <h1><a href="gallery.php">Gallery</a></h1>
  </div>
  <div class="container">
    <p>Cuisine Gallery</p>
    <hr>
    <main>
      <section>
        <div class="album-food album-filipino"><a href="gallery-filipino.php"><span>Filipino Cuisine</span></a></div>
        <br>
        <div class="album-food album-pizza"><a href="gallery-pizza.php"><span>Pizza & Pasta Buffet</span></a></div>
      </section>
      <section>
        <div class="album-food album-batangas"><a href="gallery-batangas.php""><span>Batangueño's Best</span></a></div>
        <br>
        <div class="album-food album-f2g"><a href="gallery-f2g.php"><span>Food to Go</span></a></div>
      </section>
      <section>
        <div class="album-food album-italian"><a href="gallery-italian.php"><span>Italian Cuisine</span></a></div>
        <br>
        <div class="album-food album-finger"><a href="gallery-finger.php"><span>Finger Foods</span></a></div>
      </section>
    </main>
  </div>
  <footer>
    <?php include'../components/footer.php' ?>
  </footer>
</body>