<title>About Us Page</title>
<link rel="stylesheet" href="../css/about.css?v=<?php echo time(); ?>">
<?php include '../components/nav.php' ?>

<body>
  <main>
    <header class="about-title">
      <h1>About us</h1>
    </header>

    <section>
      <div class="about-img">
        <img src="../../img/gg-logo.png" alt="">
        <p class="gg-title">The Place Gian & Gaela's</p>
        <hr>
      </div>
      <div class="about-img-2">
        <img class="abt-img" src="../../img/abt-us.png" alt="">
        <div>
          <p>Welcome to THE PLACE G&G Food Catering Services! At THE PLACE G&G Food Catering Services, we take pride in arranging, organizing, and coordinating events according to our clients' specific requirements. We understand the importance of creating memorable experiences and strive to exceed expectations through our attention to detail and personalized service.</p>
          <p>We are equipped with a dedicated team, service vehicles, catering materials, and other essential supplies to ensure a seamless and enjoyable event. Our venue is designed to be conducive and accessible to everyone, offering a comfortable and welcoming atmosphere.</p>
          <p>In addition to our catering services, we are proud to have established Gian & Gaela's Pasta Corner, the very first Pasta Corner in Lyceum of the Philippine Batangas Campus. We also operate G&G Canteen, conveniently located in front of Golden Gate General Hospital, serving hospital employees and patient relatives. Moreover, we accept orders for outside clients through our food-to-go services.</p>
        </div>
      </div>
      <img class="mam-cecil" src="../../img/mam-cecil.jpg" alt="">
      <p class="checkpoint">
        To further meet the diverse needs of our customers, we have introduced additional offerings. THE PLACE G&G Function Hall, a two-storey air-conditioned hall located in Libjo Tacad, is available for various events. On the second floor, we have G&G MOM's Kitchen, an Italian-Filipino restaurant that caters to pasta and pizza lovers.
        At G&G THE PLACE, we believe in giving back to the community. The success of our business enables us to contribute to the livelihood of our staff from Simlong, Pinamucan, Mabacong, and nearby Barangays, providing opportunities for growth and development. 
        At THE PLACE G&G Food Catering Services, we are committed to delivering exceptional food and service that exceed expectations. Join us in creating unforgettable experiences for your next event.
      </p>
    </section>

    <section>
      <p class="checkpoint">With over two decades of experience in the food industry, we have been proudly serving the Batangas area and nearby provinces since the year 2000. Our mission is to provide exceptional catering services for a wide range of events, including weddings, anniversaries, birthdays, christenings, corporate activities, trainings, seminars, meetings, and parties.</p>
      <p class="checkpoint">Our owner, a graduate of BS Industrial Education major in Food Technology, possesses extensive knowledge and expertise in the field. With 36 units in Masters in Business Management and Masters in Public Administration, as well as two years of study in the College of Law, our owner's educational background and teaching experience in Business Entrepreneurship at the University of Batangas have greatly contributed to the success of our business.</p>
    </section>
  </main>

  <section class="partnership-section">
    <h2>Partnership</h2>
    <hr>
    <div class="container-partnership">
      <br>
      <div class="container-partner">
        <img class="icon-partner" src="../../icons/jg-summit.png" alt="">
        <img class="icon-partner" src="../../icons/urc.png" alt="">
        <img class="icon-partner" src="../../icons/cemex-logo.png" alt="">
      </div>
      <div class="container-partner">
        <img class="icon-partner" src="../../icons/goldengate.png" alt="">
        <img class="icon-partner" src="../../icons/lpu1.png" alt="">
        <img class="icon-partner" src="../../icons/ub.png" alt="">
      </div>
      <div class="container-partner">
        <img class="icon-partner" src="../../icons/cipec.png" alt="">
      </div>
    </div>
  </section>

  <section class="contact-us" id="contact-us">
    <h2>Contact Us</h2>
    <hr>
    <div class="container-contact">
      <div class="container-form">
        <form id="contactForm">
          <div class="form-group">
            <input type="text" class="form-control" name="fullname" placeholder="Full Name : ">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email : ">
          </div>
          <div class="form-group">
            <textarea id="message" class="form-control" name="message" placeholder="Message :" rows="5" cols="35" required></textarea>
          </div>
          <div class="form-btn">
            <input type="submit" class="btn btn-primary" value="Submit" name="submit">
          </div>
        </form>
      </div>
      <div class="container-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1937.8262683144526!2d121.070872261763!3d13.739474189256327!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd05024eed2a23%3A0x19d0a31ceec74e9!2sThe%20Place!5e0!3m2!1sen!2sph!4v1695610272180!5m2!1sen!2sph" width="450" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>
  <footer>
    <?php include'../components/footer.php' ?>
  </footer>
  <script>
        document.getElementById("contactForm").addEventListener("submit", function (e) {
            e.preventDefault();
            // You can add code here to handle form submission, such as sending an email or saving to a database.
            alert("Your message has been sent!");
            // Clear the form fields after submission
            document.getElementById("name").value = "";
            document.getElementById("email").value = "";
            document.getElementById("message").value = "";
        });
    </script>
</body>

