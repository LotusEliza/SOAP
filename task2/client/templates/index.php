<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users information system!</title>
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <!------------------------------------LIST CARS-------------------------------------------->


    <!-------------------------------SEARCH CAR------------------------------------------------->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

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
                <form>
                    <div class="form-group">
<!--                        <label for="exampleInputEmail1">Get car info by id:</label>-->
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Get car info by id">
                    </div>
                    <button class="btn btn-lg btn-success" type="submit">Get Info</button>
                </form>
                <br/>

<!--                <form id="find-car" action="../client.php" method="POST">-->
<!--                    <h4>Get car info by id:</h4>-->
<!--                    <input type="text" name="username"><br>-->
<!--                    <button class="btn btn-lg btn-success" type="submit">Get Info</button>-->
<!--                </form>-->
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <form class="card card-sm">
                    <div class="card-body row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-search h4 text-body"></i>
                        </div>
                        <!--end of col-->
                        <div class="col">
                            <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search by params">
                        </div>
                        <!--end of col-->
                        <div class="col-auto">
                            <button class="btn btn-lg btn-success" type="submit">Search</button>
                        </div>
                        <!--end of col-->
                    </div>
                </form>

            </div>
            <!--end of col-->
        </div>
    </div>
    <!-------------------------------MAKE ORDER------------------------------------------------->



    <form id="add-user" action="client.php" method="POST">

    </form>
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
