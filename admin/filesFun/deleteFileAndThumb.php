<?php



$type = $_GET['type'];
$id = $_GET[$type.'_name'];
$typeToQuery = $type.'_name'; 
header('Location: ../show.php?type='.$type.'&'.$typeToQuery.'='.$id.'');
?>