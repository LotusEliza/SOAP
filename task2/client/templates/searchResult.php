<?php
include 'header.php';
?>

<?php
if(!$result){
    echo "No cars found!";
}
?>

<div class="container">
    <div class="row">
        <div class='col-xs-8' style='margin: 10px 0px 10px 0px;'>
            <?=$result?>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>