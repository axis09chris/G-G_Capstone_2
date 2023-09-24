<?php
include_once("database.php"); // Include the database connection script

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $rating = $_POST["rating"];
    $review = $_POST["review"];

    $sql = "INSERT INTO reviews (full_name, rating, review, created_at) VALUES (?, ?, ?, CURRENT_TIMESTAMP)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sis", $full_name, $rating, $review);

    if ($stmt->execute()) {
        header("Location: review_form.php"); // Redirect to the review page after successful submission
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}