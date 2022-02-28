
<?php
//include navbar
include("navbar.php");
?>
<?php
$ID=$_GET['ID']??1;
foreach($product->getData() as $item):
if($item['ID']==$ID):
  
?>

<!-------------------single product details----------------->
<div class="small-container1  single-product">
    <div class="row2">
        <div class="column5"><img src="<?php echo $item['pictures'];?>" width="90%" id="man1"></div>
        
        <div class="column6"><p style="font-weight: bold;"> shirt</p>
        <h1 style="text-align: left;">shirt</h1>
        <h4 style="font-weight: bold;"> <?php echo $item['Title']; ?></h4>
        <form>
        <select>
            <option>Select Size</option>
            <option>XXL</option>
            <option>XL</option>
            <option>Large</option>
            <option>Medium</option>
            <option>Small</option>
           
        </select>
        <br><br>
        <label for="Quantity">Quantity:</label><br><br>
        <input type="text" value="1" name="Quantity"><br>
        <br>
         <div class="btn"><input type="submit" value="Add to cart"></div>
       </form>
        </div>
    </div>
           <div><h3>Product Details</h3>
            <p> <?php echo $item['Title'] ?></p>
            <img src="Products/Clothing/manFashion/man1/size_table.png" width="600px" height="500px">
         </div>
</div>
</body>
</html>

<?php
endif;
endforeach;
?>
