<!DOCTYPE html>
<html lang="pl-PL">
<head>
<?php include 'fragments/head.html';?> 
</head>
<body>
<div class="container-fluid">
<?php
session_start();
require('php/connection.php');
if (isset($_POST['username']) and isset($_POST['password'])){
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM `user` WHERE username='$username' and password='$password'"; 
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$count = mysqli_num_rows($result);
if ($count == 1){
$_SESSION['username'] = $username;
}else{
$fmsg = "Nieprawidlowe dane logowania";
echo "Powrot do strony logowania <a href='login.php'>Login</a> ";
}
}
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
echo "Witaj " . $username . "
";
echo "To jest panel administracyjny ";
echo "<a href='logout.php'>Wyloguj</a>";



echo '
<div class="row">
  <h2>Produkty</h2>         
  <table class="table">
    <thead>
      <tr>
        <th>Nazwa Produktu</th>
        <th>Cena</th>
        <th>Typ</th>
        <th>Opcje</th>
        <th>Zdjęcie</th>
              </tr>
    </thead>
     <tbody>
';
                mysqli_set_charset($link, "utf8");
                $strSQL = "SELECT * FROM product";
	            $rs = mysqli_query($link,$strSQL);
	            while($row = mysqli_fetch_array($rs)) {
                        $name = $row['product_name'];
                        $filename = strtolower(substr($name, strrpos($name, ' ') + 1));
                        echo "
                            <tr>
                                <td>$row[product_name]</td>
                                <td>$row[product_price]</td>
                                <td>$row[product_type]</td>
                                <td>
                                    <button type='button' class='btn btn-warning'>Edycja</button>
                                    <button type='button' class='btn btn-danger'>Usuń</button>
                                    </td>
                                <td><img src='img/products/".$filename.".jpg' height='20%' width='20%'></img></td>
                            </tr>
                            "
                ;}
echo'                
    </tbody>
  </table>
</div>';




echo '
<div class="row">
  <h2>Kolekcje</h2>            
  <table class="table">
    <thead>
      <tr>
        <th>Nazwa Produktu</th>
        <th>Cena</th>
        <th>Cena</th>
        <th>Opcje</th>
        <th>Zdjęcie</th>
      </tr>
    </thead>
     <tbody>
';
                mysqli_set_charset($link, "utf8");
                $strSQL = "SELECT * FROM collection";
	            $rs = mysqli_query($link,$strSQL);
	            while($row = mysqli_fetch_array($rs)) {
                $name = $row['collection_name'];
                        $filename = strtolower(substr($name, strrpos($name, ' ') + 1));
                        echo "
                            <tr>
                                <td>$row[collection_name]</td>
                                <td>$row[collection_price]</td>
                                <td>$row[collection_price]</td>
                                <td><button type='button' class='btn btn-warning'>Edycja</button></td>
                                <td><button type='button' class='btn btn-danger'>Usuń</button></td>
                                   <td><img src='img/collections/".$filename.".jpg' height='20%' width='20%'></img></td>
                            </tr>
                            "
                ;}
echo'                
    </tbody>
  </table>
</div>';




}else{
echo $fmsg;}
?>

</div>
<?php include 'fragments/js.html';?>
</body>
</html>