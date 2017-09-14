<!DOCTYPE html>
<html lang="pl-PL">
<head>
<?php include 'fragments/head.html';?> 
</head>
<body>
<?php include 'fragments/preloader.html';?>
<?php include 'fragments/header.html';?>
<div class="row jumbotron marginTopBottomPr2 textsBackgroud"> 
        <div class="col-xs-12 col-sm-12 col-md-4 textSide marginBottom40">
            <?php
            include 'php/textsHeaderAndIcon.php';
            ?>
        </div> 
        <article class="col-xs-12 col-sm-12 col-md-8 texts" id="content">
            <?php
            include 'php/textsLoader.php';
            ?>
        </article>
</div>

<?php include 'fragments/c2.php';?>
<?php include 'fragments/facebook.html';?>
<?php include 'fragments/footer.html';?>
<?php include 'fragments/modal.html';?>
<?php include 'fragments/js.html';?>
<script>
    $(document).ready(function(){
        $('#content').removeOrphans();
    });
</script>
</body>
</html>