<div class="row">
        <div class="col-xs-12 col-md-12 centerTextAlign productsTitle" id="scrollProductButton"><br>PRODUKTY<br></div>
    </div>

<div class="car marginTopBottom10 marginSlick"> 

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

</div>