<!DOCTYPE html>
<html lang="pl-PL">
<head>
<?php include 'fragments/head.html';?> 
</head>
<body>
<?php include 'fragments/preloader.html';?>
<?php include 'fragments/header.html';?>
<?php include 'fragments/c2.php';?>
<?php include 'fragments/productload.php';?>
<?php include 'fragments/facebook.html';?>
<?php include 'fragments/footer.html';?>
<?php include 'fragments/modal.html';?>
<?php include 'fragments/js.html';?>  
    <script>
        $(function() {
            if (window.screen.availHeight < 900){
            $(window).scrollTop($('#scrollCollection').offset().top);
            }else{
            $(window).scrollTop($('#scrollProductButton').offset().top);
            }
        });
    </script>
</body>
</html>

