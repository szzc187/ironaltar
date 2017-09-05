<div class="row" id="scrollCollection">
    <div class="lineBackgroundColor marginTop10">
        </div>
</div><br>

<section class="row">
        <div class="col-xs-12 col-md-4 col-md-4 centerTextAlign">
            <?php
                $id = $_GET['collection_name'];
                $dirname = "img/collections/$id/";
                $thumbDirectory = "thumb/";
                $images = glob($dirname."*.*");
                    foreach($images as $image) {
                        $imageNameSubstring = substr($image, strrpos($image, '/') + 1);
                        $imageNameSubstringWithNoJpg = strtok($imageNameSubstring, '.');
                        $end = "m.jpg";                           
                        echo '<a class="example-image-link" href="'.$image.'" data-lightbox="example-set" data-title="Click">
                        <img src="'.$dirname.$thumbDirectory.$imageNameSubstringWithNoJpg.$end.'" class="img-thumbnail" alt="'.$id.'" title="'.$id.'" /></a><br />';
                    }
            ?>
        </div>
        
        <?php  
                            $id = $_GET['collection_name'];
                            include 'php/connection.php';
                            mysqli_set_charset($link, "utf8");
                            $strSQL = "SELECT * FROM collection WHERE collection_name='$id'";
                            $rs = mysqli_query($link,$strSQL);
                            while($row = mysqli_fetch_array($rs)) {
                
                            echo '
                            <div class="col-xs-12 col-md-8 col-md-8">
                                    <h1>'.$row['collection_name'].'</h1><br>
                                    <h4>'.$row['collection_name2'].'</h4>
                                    <h5>'.$row['collection_desc'].'</h5><br>
                                    <h4>Wykonanie</h4>
                                    <h5>'.$row['collection_made'].'</h5><br><br>
                            
                                    <h3>Cena: '.$row['collection_price'].' zł</h3><br>
                                    <div class="lineBackgroundColor"></div><br>
                                    <h4>Wymiary</h4>
                                    <h5>'.$row['collection_dim1'].'</h5>
                                    <h5>'.$row['collection_dim2'].'</h5><h5 text-align="right">Grubość blatu: '.$row['collection_board_thickness'].'</h5><br>
                                    <div class="lineBackgroundColor"></div><br>
                                    <h4>Materiał</h4>
                                    <h5>'.$row['collection_material'].'</h5><br>
                                    <div class="lineBackgroundColor"></div><br>
                                    <h4>Termin realizacji:</h4>
                                    <h5>Około '.$row['collection_production_time'].' dni roboczych.</h5><br>
                                    <div class="lineBackgroundColor"></div><br>
                            </div>
                            ';
                }
                    mysqli_close($link);
        ?>
</section>
<br>
<br>
