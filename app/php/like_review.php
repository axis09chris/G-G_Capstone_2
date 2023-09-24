<?php
include_once("database.php"); // Include the database connection script

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reviewId = $_POST["review_id"];

    // Increment the like count in the database
    $sql = "UPDATE reviews SET likes = likes + 1 WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $reviewId);
    
    if ($stmt->execute()) {
        // Get the updated like count
        $sql = "SELECT likes FROM reviews WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $reviewId);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        
        $response = ["likes" => $row["likes"]];
        echo json_encode($response);
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}