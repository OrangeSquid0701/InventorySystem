<?php

session_start();

if(!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = array();
}

// Check if the form is submitted and the 'id' parameter is set
if(isset($_POST['submit']) && isset($_POST['id'])) {
  $id = $_POST['id'];

  // Check already in cart or not
  if(!array_key_exists($id, $_SESSION['cart'])) {
    // Store quantity
    $_SESSION['cart'][$id] = 1;
  } else {
    // Increase quantity
    $_SESSION['cart'][$id] += 1;
  }
}
// Remove the initial key with 0
unset($_SESSION['cart']['']);



