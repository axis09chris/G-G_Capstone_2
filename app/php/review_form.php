<?php
include_once("database.php"); // Include the database connection script

$sql = "SELECT * FROM reviews ORDER BY created_at DESC";
$result = $conn->query($sql);

// Check if there are reviews
if ($result->num_rows > 0) {
    $reviews = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $reviews = array(); // No reviews found
}
?>

<title>Feedback Page</title>
<?php include'../components/nav.php' ?>
<link rel="stylesheet" href="../css/review.css?v=<?php echo time(); ?>">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->

<body>

  <header class="review-title">
    <h1>Ratings and reviews</h1>
  </header>

  <section class="reviews">
    <?php
    // Display reviews
    foreach ($reviews as $review) {
      echo "<div>";
      echo "<h3>{$review['full_name']} - {$review['rating']} Stars</h3>";
      echo "<p>{$review['review']}</p>";
      echo "<p>Posted on: {$review['created_at']}</p>"; // Display the timestamp
      // Like button
      echo "<button onclick='likeReview({$review['id']})'>Like (<span id='likesCount{$review['id']}'>{$review['likes']}</span>)</button>";
      // Unlike button
      echo "&nbsp;";
      echo "<button onclick='unlikeReview({$review['id']})'>Unlike (<span id='dislikesCount{$review['id']}'>{$review['dislikes']}</span>)</button>";
      echo "<br><br>";
      echo "</div>";
      echo "<hr>";
    }
    ?>
  </section>

  <section class="review-modal">
      <button id="openReviewModal">Write a review</button>

      <div id="reviewModal">
        <div class="modal-contents">
          <form action="submit_review.php" method="POST">
            <div class="review-container">
            <h2>Give feedback</h2>
              <label for="full_name">Name:</label>
              <input type="text" id="full_name" name="full_name" required><br><br>

              <label for="rating">Rating:</label>
              <select id="rating" name="rating" required>
                <option value="5">5 Stars</option>
                <option value="4">4 Stars</option>
                <option value="3">3 Stars</option>
                <option value="2">2 Stars</option>
                <option value="1">1 Star</option>
              </select><br><br>

              <label for="review">Review:</label><br>
              <textarea id="review" name="review" rows="5" cols="54" required></textarea><br><br>

              <div class="review-btn">
                <input class="btn btn-primary btn-review" type="submit" value="Submit">
                <input id="closeReviewModal" class="btn btn-primary btn-review" type="button" value="Cancel">
              </div>
            </div>
          </form>
        </div>

      </div>
    
  </section>

  <footer>
    <?php include'../components/footer.php' ?>
  </footer>

  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> -->

  <script>
    // Open the review modal
    document.getElementById("openReviewModal").onclick = function() {
        document.getElementById("reviewModal").style.display = "block";
    }

    // Close the review modal
    document.getElementById("closeReviewModal").onclick = function() {
        document.getElementById("reviewModal").style.display = "none";
    }

  
  </script>
</body>