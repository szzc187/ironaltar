<section>
    
<div class="row greyLineMargin">
    <div class="col-xs-7 col-sm-7 col-md-7 rightTextAlign productsTitle headersFont leftTextAlign">PRODUKTY</div>
    <div class="col-xs-5 col-sm-5 col-md-5"></div>    
</div>

<div class="row"><div class="lineBackgroundColor"></div></div>
<div class="productsTitles marginTopBottom10">KOLEKCJE</div>
<div class="row">
<?php
                include 'php/connection.php';
                mysqli_set_charset($link, "utf8");
                $strSQL = "SELECT * FROM collection";
	            $collections = mysqli_query($link,$strSQL);
	            while($row = mysqli_fetch_array($collections)) {
                $filename = strtolower(substr($row['collection_name'], strrpos($row['collection_name'], ' ') + 1));
                echo '
                <div class="col-xs-12 col-sm-6 col-md-4">
                 <a href="collection.php?collection_name='.$row['collection_name'].'"><img src="img/collections/'.$row['collection_name'].'/thumb/k_'.$filename.'_1m.jpg" alt="..." class="img-thumbnail"></a>
                </div>
                ';}
                
?>
</div>
<div class="row marginTopBottom"><div class="lineBackgroundColor"></div></div>
<div class="productsTitles marginTopBottom10">STOLIKI KAWOWE</div>
<div class="row">
<?php
                $strSQL = "SELECT * FROM product WHERE product_type='stolikkawowy'";
	            $products = mysqli_query($link,$strSQL);
	            while($row = mysqli_fetch_array($products)) {
                $filename = strtolower(substr($row['product_name'], strrpos($row['product_name'], ' ') + 1));
                echo '
                <div class="col-xs-12 col-sm-6 col-md-4">
                 <a href="product.php?product_name='.$row['product_name'].'"><img src="img/products/'.$row['product_name'].'/thumb/stolik_kawowy_'.$filename.'_1m.jpg" alt="..." class="img-thumbnail"></a>
                </div>
                ';}
?>
</div>
<div class="row marginTopBottom"><div class="lineBackgroundColor"></div></div>
<div class="productsTitles marginTopBottom10">STOLIKI POMOCNICZE</div>
<div class="row">
<?php
                $strSQL = "SELECT * FROM product WHERE product_type='stolikpomocniczy'";
	            $products = mysqli_query($link,$strSQL);
	            while($row = mysqli_fetch_array($products)) {
                $filename = strtolower(substr($row['product_name'], strrpos($row['product_name'], ' ') + 1));
                echo '
                <div class="col-xs-12 col-sm-6 col-md-4">
                 <a href="product.php?product_name='.$row['product_name'].'"><img src="img/products/'.$row['product_name'].'/thumb/stolik_pomocniczy_'.$filename.'_1m.jpg" alt="..." class="img-thumbnail"></a>
                </div>
                ';}
                mysqli_close($link);
?>
</div>
<div class="row marginTopBottom"><div class="lineBackgroundColor"></div></div>
</section>
