<div class="row greyLineMargin">
        <div class="col-xs-5 col-sm-5 col-md-5"></div>
        <div class="col-xs-7 col-sm-7 col-md-7 leftTextAlign productsTitle headersFont" id="scrollProductButton">PRODUKTY</div>
    </div>
<section class="car marginTopBottom10 marginSlick"> 
<?php
  include 'php/connection.php';
  $strSQL = "SELECT * FROM product ORDER BY id ASC";
	$rs = mysqli_query($link,$strSQL);
	  while($row = mysqli_fetch_array($rs)) {   
    echo '
    <div class="col-sm-6 col-md-4 ">
      <div class="thumbnail">
        <div class="caption thumbnailImg"><a href="product.php?product_name='.$row['product_name'].'"><img src="img/products/'.$row['product_name'].'/thumb/thumb.jpg" /></a></div>
      <div class="caption textProductThumbnail">
        <div class="textProductThumbnail1">'.$row['product_name'].'</div>
        <div class="textProductThumbnail2"><strong>cena: '.$row['product_price'].' zł</strong></div>
          </div>
        </div>
     </div>
          ';
    }
    	mysqli_close($link);
?>
</section>