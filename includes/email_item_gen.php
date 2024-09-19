<?php

require_once 'dbh.inc.php';

function get_itemName(object $conn, string $id) {
    $itemName = null; // Initialize itemName variable

    $query  = "SELECT product_name FROM products WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $id); // 's' denotes the parameter type (string)
    $stmt->execute();
  
    $stmt->bind_result($itemName);
    $stmt->fetch();
    
    return $itemName;
}

if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $id => $quantity) {
        $name = get_itemName($conn, $id);

        $html = <<<HTML
<tr>
    <td>$name</td>
    <td>$quantity</td>
</tr>
HTML;

        echo $html;
    }
} else {
    echo "Cart is empty or not properly initialized.";
}
?>
