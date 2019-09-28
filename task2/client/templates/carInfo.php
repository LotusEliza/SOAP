<?php
include 'header.php';
?>

<div class="container">
    <div class="row">
        <div class='col-xs-8' style='margin: 10px 0px 10px 0px;'>
            <?=$car?>
        </div>
    </div>
    <form method='POST' action='form'>
        <input type='hidden' name='id' value='<?=$id?>'>
        <input type="submit" class="btn btn-success" value="Buy Car">
    </form>
</div>

<?php
include 'footer.php';
?>