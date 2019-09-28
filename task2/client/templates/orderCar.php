<?php
include 'header.php';
?>
<script>
    function validateForm() {
        var x = document.forms["myForm"]["name"].value;
        if (x == "") {
            alert("Name must be filled out");
            return false;
        }
    }
</script>
<section id="cover">
    <div id="cover-caption">
        <div id="container" class="container">
            <div class="row text-white">
                <div class="col-sm-6 offset-sm-3 text-center">
                    <h1 class="display-4">Make your order</h1>
                    <div class="info-form">
                        <form name="myForm" action="order" method='POST' class="form-inlin justify-content-center" onsubmit="return validateForm()">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Surname</label>
                                <input type="text" name="surname" class="form-control" placeholder="Surname">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Car ID</label>
                                <input type="text" name="id" class="form-control"  value='<?=$id?>'>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Payment</label><br>
                                <label class="radio-inline"><input type="radio" name="payment" value="1" checked>Cash</label>
                                <label class="radio-inline"><input type="radio" name="payment" value="2">Credit cart</label>
                            </div>
                            <button type="submit" class="btn btn-success">Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'footer.php';
?>