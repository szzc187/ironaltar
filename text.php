<html>
<head>
<?php include 'fragments/head.html';?> 
</head>
<body>
<?php include 'fragments/preloader.html';?>
<?php include 'fragments/header.html';?>
<div class="row jumbotron marginTopBottom textsBackgroud"> 
        <div class="col-xs-12 col-sm-4 col-md-4 textSide centerTextAlign">
            <?php
            $col = $_GET['col'];
    
            if($col == "returns"){
                $col = " Reklamacje i Zwroty";
                $icon = "repeat";
            }
            if($col == "about"){
                $col = " Co robimy";
                $icon = "hand-o-right";
            }
            if($col == "individualOrders"){
                $col = " Indywidualne projekty";
                $icon = "user-circle";
            }
            if($col == "coop"){
                $col = " Współpraca";
                $icon = "handshake-o";
            }
            if($col == "order"){
                $col = " Realizacja zamówienia";
                $icon = "upload";
            }
            if($col == "delivery"){
                $col = " Dostawa i transport";
                $icon = "road";
            }
            if($col == "regulations"){
                $col = " Regulamin";
                $icon = "book";
            }
            echo '<i class="fa fa-'.$icon.' fa-3x" aria-hidden="true" style="vertical-align:middle"></i>';
            echo $col;
             ?>
            </div> 
        <article class="col-xs-12 col-sm-8 col-md-8 texts">
<?php
                $col = $_GET['col'];
                include 'php/connection.php';
                mysqli_set_charset($link, "utf8");
                $strSQL = "SELECT * FROM texts";
	            $rs = mysqli_query($link, $strSQL);
	            while($row = mysqli_fetch_array($rs)) {
                    echo $row[$col];
                }
                mysqli_close($link);
?>

        </article>
</div>
<?php include 'fragments/c2.php';?>
<?php include 'fragments/facebook.html';?>
<?php include 'fragments/footer.html';?>
<?php include 'fragments/modal.html';?>
<?php include 'fragments/js.html';?>  
</body>
</html>