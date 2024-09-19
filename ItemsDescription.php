<?php
  require_once 'includes/items.inc.php';
  require_once 'includes/add_to_cart.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Items Description</title>

    <link rel="stylesheet" href="styles/ItemsDescription.css">
    <link rel="stylesheet" href="styles/body.css">
    <link rel="stylesheet" href="styles/sidebar.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!--Rubik-->
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&display=swap" rel="stylesheet">
  </head>
  <body>
    <section class="left-section">
      <div class="utm-logo">
        <img class="utm-logo-image" src="images/UTM_LOGO.png">
      </div>
      <div class="sidebar">
        <div class="sidebar-division">
          <div class="sidebar-link">
            <img class="sidebar-icon" src="images/Icons/Home_icon.png">
            <a class="sidebar-link-text" href="HomePage.html" target="_blank">HOME</a>
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
            <a class="sidebar-link-text" href="https://www.youtube.com/watch?v=37uw4W2MwgU&list=RDLLW5a-vVZXg&index=4">LOGOUT</a>
          </div>
        </div>
      </div>
    </section>

    <section class="right-section-items-description">
      <div class="dashboard-title">
        <p class="title-text"><?php echo $row["product_name"]; ?></p>
        <div class="cart-icon-container">
          <img class="cart-icon" src="images/Icons/online-cart_icon.png">
        </div>
        <a class="cart-text" href="CartRequest.php">CART</a>
      </div>
      <div class="items-img-container">
        <img class="items-img" src="<?php echo $row["product_img"] ?>">
      </div>
      <div class="description">
        <div class="info-box">
          <p class="title-description">Product Description</p>
          <p class="intro-info">
            <?php echo $row["product_info"]; ?> 
          </p>
          <p class="intro-info">
            <?php echo $row["product_info_2"]; ?>
          </p>
          <p class="link-text">For more information about the product: <a class="item-link" href="<?php echo $row["product_link"]; ?>" target="_blank">Relevant Product Link.</a>
          </p>
        </div>
        <div class="selection-container">
          <a href="List-of-Items_Page.php"><button class="description-button-1">&lt; Back</button></a>
          <form style="display: inline" method="post" id="myForm">
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            <input onclick="addToCart()" class="description-button-2" type="submit" name="submit" value="Add To Cart +1">
          </form>
          <p class="text-available"><?php echo $row["availability"] ?> pieces available</p>
        </div>
        <div id="popup" class="popup">
          <p id="popup-message"></p>
        </div>
      </div>

      <script>
        function showPopup(message) {
          var popup = document.getElementById("popup");
          var popupMessage = document.getElementById("popup-message");
          popupMessage.textContent = message;

          // Add the 'show' class to trigger the transition
          popup.classList.add("show");

          // Automatically hide the popup after 2 seconds
          setTimeout(function() { 
            closePopup(); 
          }, 1000); 
        }

        function closePopup() {
          var popup = document.getElementById("popup");

          // Remove the 'show' class to trigger the transition
          popup.classList.remove("show");
        }

        function addToCart() {
            // Perform your add to cart logic here
            showPopup("<?php echo $row["product_name"]?> Added To Cart +1");
        }
      </script>

    </section>
  </body>
</html>