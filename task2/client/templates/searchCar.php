<?php
include 'header.php';
?>
<script>
    function validateForm() {
        var x = document.forms["myForm"]["year"].value;
        if (x == "") {
            alert("The field year must be filled out");
            return false;
        }
    }
</script>
<div class="container" style='margin: 20px; padding: 0px 150px'>
    <div class="row justify-content-center">
        <div class="col">
            <!-------------------------------SEARCH FOR A CAR-------------------------------------------->
            <form name="myForm" id="search_car" action="result" method="POST" onsubmit="return validateForm()">
                <div class="form-group">
                    <input type="text" name="year" class="form-control" placeholder="Year" required>
                </div>
                <div class="form-group">
                    <input type="text" name="color" class="form-control" placeholder="Color">
                </div>
                <div class="form-group">
                    <input type="text" name="price" class="form-control" placeholder="Price">
                </div>
                <div class="form-group">
                    <input type="text" name="speed" class="form-control" placeholder="Speed">
                </div>
                <div class="form-group">
                    <input type="text" name="capacity" class="form-control" placeholder="Capacity">
                </div>
                <button type="submit" class="btn btn-lg btn-success">Search</button>
            </form>
            <br/>
        </div>
        <div class="row">
            <div class='col-xs-8' style='margin: 10px 0px 10px 0px;'>
                <?=$cars?>
            </div>
        </div>
    </div>
<?php
include 'footer.php';
?>