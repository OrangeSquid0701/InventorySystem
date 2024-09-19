<?php

include("dbh.inc.php");

if(isset($_POST['input'])) {

  $input = $_POST['input'];

  $query = "SELECT * FROM products WHERE product_name LIKE '{$input}%'";

  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) { ?>

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



    <?php

  } else {
      echo '<h6 class="text-danger text-center mt-3">No Data Found</h6>';
  }
}?>