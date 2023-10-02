<head>
  <title>FAQ's</title>
  <?php include'../components/nav.php' ?>
  <link rel="stylesheet" href="../css/faqs.css?v=<?php echo time(); ?>">
</head>
<body>
  <main>
    <div class="content-title">
      <h1>Frequently asked questions</h1>
    </div>

    <div class="container-faq-item">
      <div class="faq-item">
          <h4 class="question">Question 1 : Is there a Buffer/Excess food for extra guest?</h4>
          <div class="answer">
              <p>Yes, in every event the management prepare only 50 buffer/excess food for the extra guest.</p>
          </div>
      </div>
      
      <div class="faq-item">
          <h4 class="question">Question 2 : Is the Buffer/Excess food Paid?</h4>
          <div class="answer">
              <p>Yes, but the transaction is based on the food availability and upon the agreement of the client and the management.</p>
          </div>
      </div>

      <div class="faq-item">
          <h4 class="question">Question 3 : Can we come early to the scheduled event?</h4>
          <div class="answer">
              <p>Yes, much better to come early so that the management can assist you with parking and table arrangement.</p>
          </div>
      </div>

      <div class="faq-item">
          <h4 class="question">Question 4 : Can we bring out the leftover?</h4>
          <div class="answer">
              <p>It depends on the number of plates left from the transaction of the client and the management.</p>
          </div>
      </div>

      <div class="faq-item">
          <h4 class="question">Question 5 : How much will be the buffer/excess plate?</h4>
          <div class="answer">
              <p>Same as the ordered plate for a complete menu serving. But if food is not complete price may vary depending on the client and the management agreement.</p>
          </div>
      </div>
    </div>
    
  </main>
  <footer>
    <?php include'../components/footer.php' ?>
  </footer>
  <script>
    // JavaScript for toggling FAQ answers
    document.addEventListener('DOMContentLoaded', function () {
        const questions = document.querySelectorAll('.question');

        questions.forEach(question => {
            question.addEventListener('click', function () {
                const answer = this.nextElementSibling;
                if (answer.style.display === 'block') {
                    answer.style.display = 'none';
                } else {
                    answer.style.display = 'block';
                }
            });
        });
    });

  </script>
</body>
