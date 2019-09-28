<?php
include 'header.php';
?>
<div class="container">
    <div class="row">
        <?php
        foreach ($cars as $item){
            echo "
            <div class='col-xs-4' style='margin: 10px 0px 10px 0px;'>
                id: {$item['id']}<br>
                brand: {$item['brand']}<br>
                model: {$item['model']}<br>
                <form method='POST' action='form'>
                    <input type='hidden' name='id' value='{$item['id']}'>
                    <input type=\"submit\" class=\"btn btn-success\" value=\"Buy Car\">
                </form>
                <form method='POST' action='info'>
                    <input type='hidden' name='id' value='{$item['id']}'>
                    <input type=\"submit\" class=\"btn btn-success\" value=\"Show Info\">
                </form>
            </div>";
        }
        ?>
    </div>
</div>
<?php
include 'footer.php';
?>