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

$atr = $_GET['atr'];
$type = $_GET['type'];
$id = $_GET[$type.'_name'];
$typeToQuery = $type.'_name'; 

                include '../php/connection.php';
                mysqli_set_charset($link, "utf8");
                
                if($type == 'texts'){
                  $name =  $_GET['texts_name'];
                  $strSQL = "SELECT * FROM texts";
                  $rs = mysqli_query($link, $strSQL);
                  while($row = mysqli_fetch_array($rs)) {

                   echo '
                    <form action="save.php">
                    <textarea rows="20" cols="150" name="textarea">'.$row[$name].'</textarea>
                    <input type="hidden" name="atr" value="'.$atr.'">
                    <input type="hidden" name="type" value="'.$type.'">
                    <input type="hidden" name="'.$typeToQuery.'" value="'.$id.'"><br>
                    <input type="submit" value="save">
                    </form>
                    <a href="show.php?type=texts&texts_name='.$name.'"><button type="button" class="btn btn-success">Anuluj i wróć do produktu bez zapisu</button></a>
                    '; }

                  }else{

                $strSQL = "SELECT * FROM $type WHERE $typeToQuery='$id'";
	            $rs = mysqli_query($link,$strSQL);
	            while($row = mysqli_fetch_array($rs)) {
                    echo '
                    <form action="save.php">
                    <textarea rows="20" cols="150" name="textarea">'.$row[$atr].'</textarea>
                    <input type="hidden" name="atr" value="'.$atr.'">
                    <input type="hidden" name="type" value="'.$type.'">
                    <input type="hidden" name="'.$typeToQuery.'" value="'.$id.'"><br>
                    <input type="submit" value="save">
                    </form>
                    <a href="show.php?type='.$type.'&'.$typeToQuery.'='.$id.'"><button type="button" class="btn btn-success">Anuluj i wróć do produktu bez zapisu</button></a>
                    ';
                }}

?>

</div>
<?php include '../fragments/js.html';?>
</body>
</html>