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

    <h1></h1>
    <div class="row1">
      <?php foreach ($product_shuffle as $item) { ?>


          <h1 class="title">OUR PRODUCTS</h1>
   
              <h1></h1>
            <div class="row1">
            <?php foreach ($product_shuffle as $item) {?>
            <div class="column3"><a href="<?php printf('%s?ID=%s','ProductDetails.php',$item['ID'])?>"><img src="<?php echo $item['pictures'];?>" ><h4> <?php echo $item['Title'];?></h4><p>MUR <?php echo $item['price']; ?> </p><p class="star"> <?php echo $item['star']; ?> </p></a> </div>
            <?php }?>
           </div>        
     </div>
</div> 
<!--------------------------------------------footer------------------------------------------------------>
<?php
include("Footer.php");
?>