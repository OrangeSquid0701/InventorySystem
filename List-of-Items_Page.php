<?php
    require_once 'includes/dbh.inc.php';

    $sql = "SELECT * FROM products";
    $all_product = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Inventory System - List of Items</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!--Roboto-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!--Rubik-->
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!--Anton-->
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles/sidebar.css">
    <link rel="stylesheet" href="styles/body.css">
    <link rel="stylesheet" href="styles/list-of-items.css">
  </head>
  <body style="background-color: #fafafa;">
    <div class="body-container">
      <section class="left-section">
        <div class="utm-logo">
          <img class="utm-logo-image" src="images/UTM_LOGO.png">
        </div>
        <div class="sidebar">
          <div class="sidebar-division">
            <div class="sidebar-link">
              <img class="sidebar-icon" src="images/Icons/Home_icon.png">
              <a class="sidebar-link-text" href="main_page(home).html" target="_blank">HOME</a>
            </div>
            <div class="sidebar-link">
              <img class="sidebar-icon" src="images/Icons/List_icon.png">
              <a class="sidebar-link-text" href="List-of-Items_Page.html" target="_blank">LIST OF ITEMS</a>
            </div>
            <div class="sidebar-link">
              <img class="sidebar-icon" src="images/Icons/Profile_icon.png">
              <a class="sidebar-link-text" href="ProfilePage.html" target="_blank">PROFILE</a>
            </div>
            <div class="sidebar-link">
              <img class="sidebar-icon" src="images/Icons/Settings_icon.png">
              <a class="sidebar-link-text" href="MasterPage.html" target="_blank">APPROVAL LIST</a>
            </div>
            <div class="sidebar-link" style="margin-top: 110px;">
              <img class="sidebar-icon" src="images/Icons/Logout_icon.png">
              <a class="sidebar-link-text" href="loginpage.html">LOGOUT</a>
            </div>
          </div>
        </div>
      </section>


      <section class="right-section-list-of-items">
        <div class="dashboard-title">
          <div class="header">
            <div class="title-container">
              <p class="title-text">List of Items</p>
            </div>
            <div class="cart-container">
              <img class="cart-icon" src="images/Icons/online-cart_icon.png">
            </div>
            <div class="cart-text-container">
              <a class="cart-text" href="CartRequest.php">CART</a>
            </div>
          </div>
        </div>
        <div class="search-engine">
          <input class="search-bar" type="text" id="live_search" placeholder="Name of Item">
          <button class="search-button">
            <img class="search-icon" src="images/Icons/Search_icon.png">
          </button>
        </div>
        <div class="items-list">
          <div class="items-grid">
            <?php 
              while ($row = mysqli_fetch_assoc($all_product)) {
            ?>
            <div class="items-preview">
              <img class="preview-images" src="<?php echo $row["product_img"]; ?>">
              <div class="info-preview">
                <p class="preview-texts"><?php echo $row["product_name"]; ?></p>
                <a href="ItemsDescription.php?id=<?php echo $row["id"]?>"><button class="preview-button">SELECT</button></a>
              </div>
            </div>
            <?php
              }
            ?>
          </div>
        </div>
      </section>
    </div>
  </body>
</html>