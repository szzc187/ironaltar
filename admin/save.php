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
$textarea = $_GET['textarea'];
$typeToQuery = $type.'_name'; 

include '../php/connection.php';
mysqli_set_charset($link, "utf8");

if($type == 'texts'){
                  $name =  $_GET['texts_name'];
                  $strSQL = "SELECT * FROM texts";
                  $rs = mysqli_query($link, $strSQL);

$strSQL = "UPDATE $type SET $name='$textarea'";

if($link -> query ($strSQL) === TRUE){
                echo "record updated successfully";
                header('Location: show.php?type='.$type.'&texts_name='.$name.'');
            }else{
                echo "Error updating record" . $conn -> error;
}


}else{



$strSQL = "UPDATE $type SET $atr='$textarea' WHERE $typeToQuery='$id'";

if($link -> query ($strSQL) === TRUE){
                echo "record updated successfully";
                header('Location: show.php?type='.$type.'&'.$typeToQuery.'='.$id.'');
            }else{
                echo "Error updating record" . $conn -> error;
}
}
?>

</div>
<?php include '../fragments/js.html';?>
</body>
</html>