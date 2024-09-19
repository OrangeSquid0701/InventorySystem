<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_SESSION['cart'])) {
        $data = $_SESSION['cart'];

        $_SESSION['data_stored'] = true;

        require_once 'email.php';

        // Clear the cart
        unset($_SESSION['cart']);

        header("Location: ../CartRequest.php");
        exit();
    } else {
        $_SESSION['no_item_message'] = true;

        header("Location: ../CartRequest.php");
        exit();
    }
}
?>
