<?php

require_once("dbh.inc.php");

$img = $_POST['item-img'];
$name = $_POST['item-name'];
$info1 = $_POST['product-info1'];
$info2 = $_POST['product-info2'];
$link = $_POST['product-link'];
$available = $_POST['availability'];

// Insert data into database
$sql = "INSERT INTO products (product_name, product_info, product_info_2, product_link, product_img, availability) VALUES ('$name', '$info1', '$info2', '$link', '$img', '$available')";

if ($conn->query($sql) === TRUE) {
    $message = "Recorded Successfully in Database!";
} else {
    $message = "Error Occured: " . $sql . "<br>" . $conn->error;
}
