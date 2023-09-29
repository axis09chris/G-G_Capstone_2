<title>Meals Page</title>
<link rel="stylesheet" href="../css/meals.css?v=<?php echo time(); ?>">
<?php include '../components/nav.php' ?>

<body>
  <main>
    <div class="content-title">
      <h1>Cuisine</h1>
    </div>
    <div class="meal-title">
      <div><h2>The Place Gian & Gaela's Signature Cuisine Menu</h2></div>
      <div>
        <p>
          Our dedication to culinary creativity and innovation enables us to update our plated buffet service on a regular basis, ensuring that you always have a wide selection of delicious catering menu packages to choose from, whether you're craving Filipino or foreign cuisine or something curated to your exact specifications.
        </p>
      </div>
    </div>

    <div class="meal-content">
      <div class="meal1">
        <div><img class="meal-image" src="../../img/filipino-plated.jpg" alt="filipino-plated"></div>
        <div>
          <p class = "meal-name">Filipino Cuisine</p>
          <p>Filipino cuisine is sometimes recognized as the world's first genuinely multinational cuisine. The distinct flavor, originality, and diversity of Filipino food never cease to astonish visitors and natives alike. 
            <br>Filipino food is special because it incorporates numerous culinary traditions; for example, practically every dish reflects the influence of Spanish, Chinese, Indian, and Western cuisine.</p>
        </div>
      </div>

      <div class="meal1">
        <div><img class="meal-image" src="../../img/american-plated.jpg" alt="filipino-plated"></div>
        <div>
          <p class = "meal-name">Batangueno's Best</p>
          <p>American plated dishes offer a culinary journey that celebrates the diverse flavors of American cuisine. These dishes blend traditional recipes with contemporary twists, showcasing regional ingredients and culinary heritage.</p>
        </div>
      </div>

      <div class="meal1">
        <div>
          <p class = "meal-name">Italian Cuisine</p>
          <p>We invite you to savor the authentic flavors of Italy in every delectable dish. Our menu is a celebration of Italian culinary traditions, prepared with passion and using only the finest ingredients. Prepare to be transported to the sun-kissed landscapes of Italy with our carefully curated selection.</p>
        </div>
        <div><img class="meal-image" src="../../img/italian-plated.jpg" alt="filipino-plated"></div>
      </div>

      <div class="meal1">
        <div>
          <p class = "meal-name">Pizza $ Pasta Buffet</p>
          <p>Culinary artistry meets the timeless charm of pizza. Our menu features a delectable selection of handcrafted pizzas, thoughtfully curated to tantalize your taste buds. Indulge in our exquisite creations, each crafted with the finest ingredients and a touch of passion.</p>
        </div>
        <div><img class="meal-image" src="../../img/pizza-plated.jpg" alt="filipino-plated"></div>
      </div>
    </div>
  </main>
  <footer>
    <?php include'../components/footer.php' ?>
  </footer>
</body>