
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
        
        <div class="column6"><p style="font-weight: bold;">Item</p>
        <h1 style="text-align: left;"><?php echo $item['category'];?></h1>
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
        <br>
        <label for="Quantity"><h4>Quantity:</h4></label><br>
        <div><input type="text" value="1" name="Quantity"></div>
        <div class="type2"><input type="submit" value="Add to cart"></div>
       </form>
        </div>
      
    </div>
    <br><br>
           <div>
               <h3>Product Details</h3>
               <h3><?php echo $item['Item_Details'] ?></h3>
            </div>
</div>
</body>
</html>

<?php
endif;
endforeach;
?>
