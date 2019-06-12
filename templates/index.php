<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Task10</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<main>
    <h1>SOAP results:</h1>
    <hr>
    <h3>The list of Continents:</h3>
    <p><?php foreach($continents1 as $key=>$value){ echo $value->sName . "</br>";}?></p>
    <h3>The capital of CA:</h3>
    <p><?=$capital1;?></p>

    <h1>cURL results:</h1>
    <hr>
    <h3>The list of Continents:</h3>
    <p><?php foreach($continents2 as $value){ echo $value . "</br>";}?></p>
    <h3>The capital of CA:</h3>
    <p><?=$capital2;?></p>
</main>

</body>
</html>