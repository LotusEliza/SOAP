<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Task10</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<main>
    <div class="container">
        <div class="row">
            <div class="col">
            <h1 class="text-center">The list of Continents</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action list-group-item-success"><h4>SOAP:</h4></a>
                    <p><?php foreach($continents1 as $key=>$value){
                        echo '<a href="#" class="list-group-item list-group-item-action list-group-item-light">' . $value->sName . '</a>';
                    }?></p>
                </div>
            </div>
            <div class="col">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action list-group-item-success"> <h4>cURL:</h4></a>
                    <p><?php foreach($continents2 as $value){
                            echo '<a href="#" class="list-group-item list-group-item-action list-group-item-light">' . $value . '</a>';
                        }?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="text-center">The capital of CA</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action list-group-item-success"><h4>SOAP:</h4></a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-light"><?=$capital1;?></a>
                </div>
            </div>
            <div class="col">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action list-group-item-success"><h4>cURL:</h4></a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-light"><?=$capital2;?></a>
                </div>
            </div>
        </div>
    </div>
</main>

</body>
</html> -->