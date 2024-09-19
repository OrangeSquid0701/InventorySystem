<!DOCTYPE html>
<html>
  <head>
    <title>Cart List</title>

    <link rel="stylesheet" href="styles/sidebar.css">
    <link rel="stylesheet" href="styles/body.css">
    <link rel="stylesheet" href="styles/popup-model.css">
    <link rel="stylesheet" href="styles/CartRequest.css">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!--Anton-->
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
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

    <section class="right-section-CartRequest">
      <p class="CartRequest-title">Summarised Items List</p>
      <div class="outside-box">
        <div class="items-list-bar-title">
          <p class="no-list-title" >No.</p>
          <p class="name-list-title">Name of Items</p>
          <p class="amount-title" >Amount</p>
          <p class="action-title" >Actions</p>
        </div>
        <?php 
          require_once 'includes/cart.php'; 
          if (empty($_SESSION['cart'])) {
            echo "<p class='no-item-text'>No Item Added To Cart</p>";

            if(isset($_SESSION['no_item_message'])) {
              echo "<script>
                setTimeout(function() {
                    document.querySelector('.no-item-text').style.color = 'red';
                    setTimeout(function() {
                        document.querySelector('.no-item-text').style.color = ''; // Reset the color
                    }, 1500);
                }, 0); // Execute after other scripts have finished running
              </script>";
              unset($_SESSION['no_item_message']);
            }
          }
        ?>
      </div>
      <div class="request-btn-container">
        <a href="List-of-Items_Page.php"><button class="back-btn">&lt; Back</button></a>
        <form style="display: inline;" method="post" action="includes/itemList-control.php">
          <input type="submit" value="Send Request To Master" class="request-btn">
        </form>
        <?php if(isset($_SESSION['data_stored'])): ?>
            <div id="popupMessage" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                  <div class="email_check_img_container">
                    <img class="email_check_img" src="images/Icons/email_check.png">
                  </div>
                  <p class="modal-content-text">Your request have been sent to Inventory Master. Please check your email for confirmation. Thank you.</p>
                </div>
            </div>
        <?php
          unset($_SESSION['data_stored']);
          endif;
        ?>
      </div>

      <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            // Check if the popupMessage div exists
            if(document.getElementById("popupMessage")) {
                // Show the modal
                document.getElementById("popupMessage").style.display = "flex";
                
                // Hide the modal after 4 seconds (4000 milliseconds)
                setTimeout(function() {
                    document.getElementById("popupMessage").style.display = "none";
                }, 4000);
            }
        });
      </script>
    </section>
  </body>
</html>