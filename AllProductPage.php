<?php
//include navbar
include("navbar.php");
?>
<?php
$product_shuffle = $product->getData();
?>
<!--------------------------------------------------Products---------------------------------------------->
<div class="products">
  <div class="row-container">

    <h1 class="title">OUR PRODUCTS</h1>
    
    <?php
    $clothing = true;
    $shoes = true;
    $watch = true;
    $phoneAccesories = true;
    ?>
    <?php foreach ($product_shuffle as $item) { ?>


      <?php if ($item['sections'] == "clothing") { ?>
        <?php if ($clothing) {
          echo "<h1 id = 'clothing' class='title'>Clothing</h1>";
        ?>



          <div class="row1">
          <?php
          echo "<br>";
          $clothing = false;
        }
          ?>
          <div class="column8">
            <a href="<?php printf('%s?ID=%s', 'ProductDetails.php', $item['ID']) ?>">
              <img src="<?php echo $item['pictures']; ?>">
              <h4> <?php echo $item['Title']; ?> </h4>
              <p>MUR <?php echo $item['price']; ?> </p>
              <p class="star"> <?php echo $item['star']; ?> </p>
            </a>
          </div>

        <?php } ?>
        <?php if ($item['sections'] == "shoes") { ?>
          <?php if ($shoes) {
            echo "<h1 id = 'shoes' class='title'>Shoes</h1>";
          ?>

            <div class="row1">
            <?php
            echo "<br>";
            $shoes = false;
          }
            ?>
            <div class="column8">
              <a href="<?php printf('%s?ID=%s', 'ProductDetails.php', $item['ID']) ?>">
                <img src="<?php echo $item['pictures']; ?>">
                <h4> <?php echo $item['Title']; ?> </h4>
                <p>MUR <?php echo $item['price']; ?> </p>
                <p class="star"> <?php echo $item['star']; ?> </p>
              </a>
            </div>
          <?php } ?>
          <?php if ($item['sections'] == "watch") { ?>
            <?php if ($watch) {
              echo "<h1 id = 'watch' class='title'>Watch</h1>";
            ?>
              <div class="row1">
              <?php
              echo "<br>";
              $watch = false;
            }
              ?>
              <div class="column8">
                <a href="<?php printf('%s?ID=%s', 'ProductDetails.php', $item['ID']) ?>">
                  <img src="<?php echo $item['pictures']; ?>">
                  <h4> <?php echo $item['Title']; ?> </h4>
                  <p>MUR <?php echo $item['price']; ?> </p>
                  <p class="star"> <?php echo $item['star']; ?> </p>
                </a>
              </div>
            <?php } ?>
            <?php if ($item['sections'] == "Phone Accesories") { ?>
              <?php if ($phoneAccesories) {
                echo "<h1 id = 'PhoneAccessories' class='title'>Phone Accesories</h1>";
              ?>
                <div class="row1">
                <?php
                echo "<br>";
                $phoneAccesories = false;
              }
                ?>
                <div class="column8">
                  <a href="<?php printf('%s?ID=%s', 'ProductDetails.php', $item['ID']) ?>">
                    <img src="<?php echo $item['pictures']; ?>">
                    <h4> <?php echo $item['Title']; ?> </h4>
                    <p>MUR <?php echo $item['price']; ?> </p>
                    <p class="star"> <?php echo $item['star']; ?> </p>
                  </a>
                </div>
              <?php } ?>
              <?php } ?>
                </div>
              </div>
            </div>
            <!--------------------------------------------footer------------------------------------------------------>
            <?php
            include("Footer.php");
            ?>