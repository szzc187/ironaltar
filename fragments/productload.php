<div class="row" id="scrollProduct">
    <div class="lineBackgroundColor">
        </div>
</div>

<br>
<br>

<div class="row">
        <div class="col-xs-12 col-md-12 col-md-12 centerTextAlign">
            <?php
                $id = $_GET['product_name'];
                $image = "img/products/$id/main/main.jpg";    
                        echo '<a class="example-image-link" href="'.$image.'" data-lightbox="example-set" data-title="Click">
                        <img src="'.$image.'" class="img-thumbnail mainImageSize" /></a><br />';
            ?>
            <br>
            <br>
        </div>
        <div class="col-xs-12 col-md-4 col-md-4">
            <?php
                $id = $_GET['product_name'];
                $dirname = "img/products/$id/";
                $images = glob($dirname."*.*");
                    foreach($images as $image) {         
                        echo '<a class="example-image-link" href="'.$image.'" data-lightbox="example-set" data-title="Click">
                        <img src="'.$image.'" class="img-thumbnail" /></a><br><br>';
                    }
            ?>
        </div>
        
          <?php  
                $id = $_GET['product_name'];
                include 'php/connection.php';
                mysqli_set_charset($link, "utf8");
                $strSQL = "SELECT * FROM product WHERE product_name='$id'";
	            $rs = mysqli_query($link,$strSQL);
	            while($row = mysqli_fetch_array($rs)) {
    
         echo '
         <div class="col-xs-12 col-md-8 col-md-8">
                <h2>'.$row['product_name'].'</h2><br>
                <h5>'.$row['product_desc'].'</h5><br>
                <h4>Wykonanie</h4>
                <h5>'.$row['product_made'].'</h5><br><br>
         </div>
         <div class="col-xs-12 col-md-6 col-md-6">
                <h3>Cena: '.$row['product_price'].' zł</h3><br>
                <div class="lineBackgroundColor"></div><br>
                <h4>Wymiary</h4>
                <h5>'.$row['product_dim'].'</h5><h5 text-align="right">Grubość blatu: '.$row['product_board_thickness'].'</h5><br>
                <div class="lineBackgroundColor"></div><br>
                <h4>Materiał</h4>
                <h5>'.$row['product_material'].'</h5><br>
                <div class="lineBackgroundColor"></div><br>
                <h4>Termin realizacji:</h4>
                <h5>Około '.$row['product_production_time'].' dni roboczych.</h5><br>
                <div class="lineBackgroundColor"></div><br>
         </div>
          ';

    }
    	mysqli_close($link);
?>
       
</div>

<br>
<br>
