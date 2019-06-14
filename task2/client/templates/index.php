<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users information system!</title>
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <!------------------------------------LIST CARS--------------------------------------->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <div class="container">
        <br/>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <h4 class="text-muted">Cars List:</h4>
                <?=$cars?>
                <br/>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <!-------------------------------CARS INFO BY ID-------------------------------------------->
                <form id="car_info" action="client.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="car_id" class="form-control" placeholder="Get car info by id">
                    </div>
                    <button class="btn btn-lg btn-success" type="submit">Get Info</button>
                </form>
                <br/>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
            <!-------------------------------SEARCH FOR A CAR-------------------------------------------->
                <form id="search_car" action="client.php" method="POST">  
                        <div class="form-group">
                            <input type="text" name="year" class="form-control" placeholder="Year">
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
        </div>
    </div>
    <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
            <!-------------------------------MAKE ORDER------------------------------------------------->
                <form id="add-user" action="client.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name">  
                        </div>
                        <div class="form-group">
                            <input type="text" name="surname" class="form-control" placeholder="Surname">  
                        </div>
                        <div class="form-group">
                            <input type="text" name="id" class="form-control" placeholder="Car ID"> 
                        </div>
                        <div class="form-group">
                            <input type="text" name="payment" class="form-control" placeholder="Payment">
                        </div>
                        <button type="submit" class="btn btn-lg btn-success">Make order</button>
                 </form>
            </div>
        </div>
    </div>


<style>
    table {
        color: #333; /* Lighten up font color */
        font-family: Helvetica, Arial, sans-serif; /* Nicer font */
        width: 640px;
        border-collapse: collapse;
        border-spacing: 0;
    }

    td, th { border: 1px solid #CCC; height: 30px; } /* Make cells a bit taller */

    th {
        background: #F3F3F3; /* Light grey background */
        font-weight: bold; /* Make sure they're bold */
    }

    td {
        background: #FAFAFA; /* Lighter grey background */
        text-align: center; /* Center our text */
    }

    .form-control-borderless {
        border: none;
    }

    .form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
        border: none;
        outline: none;
        box-shadow: none;
    }

</style>
</body>
</html>
