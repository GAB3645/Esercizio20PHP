<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table style="border: 1px solid blue">

<tr>
    <th>Metri Quadri</th>
    <th>Indirizzo</th>
    <th>Prezzo MQ</th>
    <th>Prezzo Totale</th>
</tr>

<tr>

    
    <?php


    $casa = array("indirizzo" => "Via ciarda 90" , "metriQuadrati" => 104.90 , "prezzoMQ" => 3312);

    $prezzoTOT = ($casa["metriQuadrati"] * $casa["prezzoMQ"]);

    $casa["prezzoTOT"] = $prezzoTOT;


    foreach ($casa as $value) {
        echo "<td> $value </td>";
    }

    ?>

</tr>
</table>
</body>
</html>