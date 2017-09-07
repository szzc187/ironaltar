<?php
      $col = $_GET['col'];
      include 'php/connection.php';
      mysqli_set_charset($link, "utf8");
      $strSQL = "SELECT * FROM texts";
      $rs = mysqli_query($link, $strSQL);
         while($row = mysqli_fetch_array($rs)) {
              echo $row[$col];
         }
         if($col == "delivery"){
                echo '
                <br><br>
                <a class="example-image-link" href="img/Cennik_DPD_2017.jpg" data-lightbox="example-set" data-title="Click">Zobacz cennik DPD</a>
                     ';
          }
          mysqli_close($link);
?>