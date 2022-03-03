<?php
session_start();
//include navbar
include("navbar.php");
?>
<?php
$ID = $_GET['ID'] ?? 1;
foreach ($product->getData() as $item) :
    if ($item['ID'] == $ID) :

?>

        <!-------------------single product details----------------->
        <div class="small-container1  single-product">
            <div class="row2">
                <div class="column5"><img src="<?php echo $item['pictures']; ?>" width="90%" id="ImageDisplayed" >
            <div class="small-img-row">
                <div class=small-img-col>
                        <img src="<?php echo $item['image1'];?>" width="60%" class="small-img" >
                    </div>
                    <div class=small-img-col>
                        <img src="<?php echo $item['image2']; ?>" width="60%" class="small-img" >
                    </div>
                    <div class=small-img-col>
                        <img src="<?php echo $item['image3']; ?>" width="60%" class="small-img" >
                    </div>
                    <div class=small-img-col>
                        <img src="<?php echo $item['image4']; ?>" width="60%" class="small-img" >
                    </div>
              </div>
          </div>

                <div class="column6">
                    <p style="font-weight: bold;">Item</p>
                    <h1 style="text-align: left;"><?php echo $item['category']; ?></h1>
                    <h4 style="font-weight: bold;"> <?php echo $item['Title']; ?></h4>
                    <form method="post" action="Process.php">
                        <select name="size">
                            <option>Select Size</option>
                            <option>XXL</option>
                            <option>XL</option>
                            <option>Large</option>
                            <option>Medium</option>
                            <option>Small</option>
                        </select>
                        <br>
                        <label for="Quantity">Quantity:</label><br>
                        <input type="text" value="1" name="Quantity"><br>
                        <br>
                        <?php
                        $_SESSION['productID'] = $ID;
                        ?>
                        <div class="type2"><input type="submit" value="Add to cart" name="AddToCart"></div>
                    </form>
                </div>
            </div>
            <div>
                <h3>Product Details</h3>
                <?php $pdResult= explode(',',$item['Item_Details']); ?>

                <h3><?php echo $item['Item_Details'];?></h3>
            </div>
        </div>
        
        <script type="text/javascript">
         var ImageDisplayed = document.getElementById("ImageDisplayed");
        var smallImg = document.getElementsByClassName("small-img");
        smallImg[0].onclick = function () {
            ImageDisplayed.src = smallImg[0].src;
        }
        smallImg[1].onclick = function () {
            ImageDisplayed.src = smallImg[1].src;
        }
        smallImg[2].onclick = function () {
            ImageDisplayed.src = smallImg[2].src;
        }

        smallImg[3].onclick = function () {
            ImageDisplayed.src = smallImg[3].src;
        }
      
        </script>
        </body>

        </html>

<?php
    endif;
endforeach;

?>