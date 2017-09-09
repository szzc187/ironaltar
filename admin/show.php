<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
 <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
<?php
session_start();
if(isset($_SESSION['userName'])) {
  echo "Your session is running <br>";
  echo "<a href='logout.php'>Wyloguj</a><br>";
  echo "<a href='session.php'>Powrót do panelu</a><br>";
}
$type = $_GET['type'];  //product collection texts
$typeToQuery = $type.'_name';
$id = $_GET[$type.'_name'];

                include '../php/connection.php';
                mysqli_set_charset($link, "utf8");
                
                if($type == 'texts'){
                $name =  $_GET['texts_name'];
                $strSQL = "SELECT * FROM texts";
                $rs = mysqli_query($link, $strSQL);
                while($row = mysqli_fetch_array($rs)) {
                echo '<a href="edit.php?type='.$type.'&atr='.$type.'_name&'.$type.'_name='.$name.'">
                                <button type="button" class="btn btn-warning">Edycja</button></a><br>' ;       
                echo $row[$id];
                }

                }else{
                $strSQL = "SELECT * FROM $type WHERE $typeToQuery='$id'";
	            $rs = mysqli_query($link,$strSQL);
	            while($row = mysqli_fetch_array($rs)) {
                    

                    echo '
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                                <h2>'.$row[$type.'_name'].' <a href="edit.php?type='.$type.'&atr='.$type.'_name&'.$type.'_name='.$row[$type.'_name'].'">
                                <button type="button" class="btn btn-warning">Edycja</button></a></h2>

                                <h4>Komplet '.$row[$type.'_collection'].' <a href="edit.php?type='.$type.'&atr='.$type.'_collection&'.$type.'_name='.$row[$type.'_name'].'">
                                <button type="button" class="btn btn-warning">Edycja</button></a></h4>

                                <h5>'.$row[$type.'_desc'].' <a href="edit.php?type='.$type.'&atr='.$type.'_desc&'.$type.'_name='.$row[$type.'_name'].'">
                                <button type="button" class="btn btn-warning">Edycja</button></a></h5>

                                <h4>Wykonanie</h4>
                                <h5>'.$row[$type.'_made'].' <a href="edit.php?type='.$type.'&atr='.$type.'_made&'.$type.'_name='.$row[$type.'_name'].'">
                                <button type="button" class="btn btn-warning">Edycja</button></a></h5>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                                <h3>Cena: '.$row[$type.'_price'].' zł <a href="edit.php?type='.$type.'&atr='.$type.'_price&'.$type.'_name='.$row[$type.'_name'].'">
                                <button type="button" class="btn btn-warning">Edycja</button></a></h3>

                                <div class="lineBackgroundColor"></div>
                                <h4>Wymiary</h4>

                                <h5>'.$row[$type.'_dim'].' <a href="edit.php?type='.$type.'&atr='.$type.'_dim&'.$type.'_name='.$row[$type.'_name'].'">
                                <button type="button" class="btn btn-warning">Edycja</button></a></h5>

                                <h5 text-align="right">Grubość blatu: '.$row[$type.'_board_thickness'].' <a href="edit.php?type='.$type.'&atr='.$type.'_board_thickness&'.$type.'_name='.$row[$type.'_name'].'">
                                <button type="button" class="btn btn-warning">Edycja</button></a></h5>
                                <div class="lineBackgroundColor"></div>

                                <h4>Materiał</h4>

                                <h5>'.$row[$type.'_material'].' <a href="edit.php?type='.$type.'&atr='.$type.'_material&'.$type.'_name='.$row[$type.'_name'].'">
                                <button type="button" class="btn btn-warning">Edycja</button></a></h5>
                                <div class="lineBackgroundColor"></div>

                                <h4>Termin realizacji:</h4>
                                
                                <h5>Około '.$row[$type.'_production_time'].' dni roboczych. <a href="edit.php?type='.$type.'&atr='.$type.'_production_time&'.$type.'_name='.$row[$type.'_name'].'">
                                <button type="button" class="btn btn-warning">Edycja</button></a></h5>
                                <div class="lineBackgroundColor"></div>
                        </div><br>
                        </div>
                        ';
                
                echo '<div class="row">';
                $types = $type."s";
                $id = $row[$type.'_name'];
                $dirname = "../img/$types/$id/";
                $thumbDirectory = "thumb/";
                $images = glob($dirname."*.*");
                echo '<a href=""><button type="button" class="btn btn-success">Dodaj zdjęcie</button></a>';
                    foreach($images as $image) { 
                        $nameFromIdExtracted = strtolower(substr($id, strrpos($id, ' ') + 1));
                        if (strpos($image, $id) !== false) {
                                                          
                        echo '<div class="col-xs-2 col-sm-2 col-md-2">
                        '.$image.'<br>
                        <img src="'.$image.'" height="50%" width="50%"/>
                        <a href="filesFun/deleteFileAndThumb.php?type='.$type.'&'.$typeToQuery.'='.$id.'"><button type="button" class="btn btn-danger">Usuń</button></a>
                        </div>';
                        }
                    }
                

                echo '</div>';
                                }
                        }
                



?>

</div>
<?php include '../fragments/js.html';?>
</body>
</html>