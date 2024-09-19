<?php

require_once 'dbh.inc.php';

// Retrieve item ID from URL parameter
if(isset($_GET['id'])) {
  $item_id = $_GET['id'];

  // Fetch item details from the database based on the item ID
  $sql = "SELECT * FROM products WHERE id = $item_id";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // Output item description
      $row = $result->fetch_assoc();
  }
} else {
  header("Location: ../List-of-Items_Page.php");
}