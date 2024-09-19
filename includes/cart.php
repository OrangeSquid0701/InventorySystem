<?php
session_start();

require_once 'dbh.inc.php';

// Handle actions before outputting any content
if (isset($_POST['remove']) && isset($_POST['id'])) {
    // Handle remove action
    $id = $_POST['id'];
    if (isset($_SESSION['cart'][$id])) {
        unset($_SESSION['cart'][$id]);
    }
    // Redirect after processing
    header("Location: {$_SERVER['PHP_SELF']}");
    exit();
}

if (isset($_POST['decrement']) && isset($_POST['id'])) {
    // Handle decrement action
    $id = $_POST['id'];
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id] -= 1;
        if ($_SESSION['cart'][$id] <= 0) {
            unset($_SESSION['cart'][$id]);
        }
    }
    // Redirect after processing
    header("Location: {$_SERVER['PHP_SELF']}");
    exit();
}

if (isset($_POST['increment']) && isset($_POST['id'])) {
    // Handle increment action
    $id = $_POST['id'];
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id] += 1;
    }
    // Redirect after processing
    header("Location: {$_SERVER['PHP_SELF']}");
    exit();
}

// Output HTML content after processing actions
// Check if item IDs array exists in session
if (isset($_SESSION['cart'])) {
    // Loop through each itemID and display HTML content
    $cartList = $_SESSION['cart'];
    foreach ($cartList as $id => $value) {
        // Generate HTML content
        $data = get_item_details($conn, $id);
        $htmlcontent = <<<HTML
        <div class="list-bar-content">
            <p class="no-list">1</p>
            <div class="text-img-container">
                <div class="img-container">
                    <img src="{$data['product_img']}">
                </div>
                <p>{$data['product_name']}</p>
            </div>
            <p class="amount-list">{$value}</p>
            <div class="quantity-control">
                <form method="post">
                    <input type="hidden" name="id" value="$id">
                    <button type="submit" name="increment" class="increment-btn"><img class="increment-btn-img" src="images/Icons/increase.png"></button>
                </form>
                <form method="post">
                    <input type="hidden" name="id" value="$id">
                    <button type="submit" name="decrement" class="decrement-btn"><img class="decrement-btn-img" src="images/Icons/decrease.png"></button>
                </form>
            </div>
            <div class="remove-btn-list">
                <form method="post">
                    <input type="hidden" name="id" value="$id">
                    <button type="submit" name="remove" class="remove-btn">Remove</button>
                </form>
            </div>
        </div>
        HTML;
        echo $htmlcontent;
    }
}

function get_item_details(object $conn, int $id) {
    $query  = "SELECT * FROM products WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id); // "i" indicates that $id is an integer parameter
    $stmt->execute();
    $result = $stmt->get_result(); // Get the result set
    $data = $result->fetch_assoc(); // Fetch the result as an associative array
    return $data;
}
?>
