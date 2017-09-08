<?php
function loadItems($type,$query)
{
                include 'php/connection.php';
                mysqli_set_charset($link, "utf8");
	            $col = mysqli_query($link,$query);
	            while($row = mysqli_fetch_array($col)) {
                $name = $row[$type.'_name'];
                $filename = strtolower(substr($name, strrpos($name, ' ') + 1));
                $filenameFirst = $type[0];
                if ($filenameFirst == "c"){
                    $filenameFirst = "k";
                }else{
                    if($row['product_type'] == "stolikkawowy"){
                    $filenameFirst = "stolik_kawowy";
                    }else{
                    $filenameFirst = "stolik_pomocniczy";
                    }
                }
                echo '
                <div class="col-xs-12 col-sm-6 col-md-4 centerTextAlign">
                 <a href="'.$type.'.php?'.$type.'_name='.$name.'">
                 <img src="img/'.$type.'s/'.$name.'/thumb/'.$filenameFirst.'_'.$filename.'_1m.jpg" class="img-thumbnail" alt="'.$filename.'" title="'.$filename.'">
                 </a>
                </div>
                ';}
                mysqli_close($link);
}
?>