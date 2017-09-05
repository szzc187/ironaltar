<section class="row marginTop10" id="scrollCollectionHd">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        <div class="col-xs-7 col-sm-7 col-md-7 overlay rightTextAlign headersFont">KOLEKCJE</div><div class="col-xs-5 col-sm-5 col-md-5"></div>
                <div class="item active">
                    <a href="collection.php?collection_name=Komplet PERSEUS"><img src="img/collections/perseus.jpg" /></a>
                </div>
    <?php
                include 'php/connection.php';
                $strSQL = "SELECT * FROM collection WHERE NOT collection_name='Komplet PERSEUS'";
                $rs = mysqli_query($link,$strSQL);

                while($row = mysqli_fetch_array($rs)) {
                $collectionName = strtolower(substr($row['collection_name'], strrpos($row['collection_name'], ' ') + 1));
                echo '<div class="item">
                            <a href="collection.php?collection_name='.$row['collection_name'].'"><img src="img/collections/'.$collectionName.'.jpg"/></a>
                      </div>';
                }
                mysqli_close($link);
    ?>
        </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
</div>                       
</section>