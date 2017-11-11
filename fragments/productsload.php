<section>
    
<div class="row greyLineMargin">
    <div class="col-xs-7 col-sm-7 col-md-7 rightTextAlign productsTitle headersFont leftTextAlign">PRODUKTY</div>
    <div class="col-xs-5 col-sm-5 col-md-5"></div>    
</div>

<div class="row"><div class="lineBackgroundColor"></div></div>
<div class="productsTitles marginTopBottom10">KOLEKCJE</div>
<div class="row">
<?php               
                include 'php/products_loader.php';
                loadItems("collection","SELECT * FROM collection");            
?>
</div>
<div class="row marginTopBottom"><div class="lineBackgroundColor"></div></div>
<div class="productsTitles marginTopBottom10">STOLIKI KAWOWE</div>
<div class="row">
<?php
                
                loadItems("product","SELECT * FROM product WHERE product_type='stolikkawowy'");
?>
</div>
<div class="row marginTopBottom"><div class="lineBackgroundColor"></div></div>
<div class="productsTitles marginTopBottom10">STOLIKI POMOCNICZE</div>
<div class="row">
<?php
                
                loadItems("product","SELECT * FROM product WHERE product_type='stolikpomocniczy'");         
?>
</div>
<div class="row marginTopBottom"><div class="lineBackgroundColor"></div></div>
</section>
