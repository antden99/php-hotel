<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];


    $select_hotel=$_GET["parcking"];
    echo $select_hotel;
    $hotelList = [];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP HOTEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">

<form action="" method="get">
    <select name="parcking" id="parking">
        <option value="valore_1">All Hotels</option>
        <option value="valore_2">Hotel With Parking</option>
    </select>
    <button type="submit">Invia form</button>
</form>


<?php

if($select_hotel === "valore_1"){
    echo "<table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>NAME</th>
                        <th scope='col'>DESCRIPTION</th>
                        <th scope='col'>PARKING</th>
                        <th scope='col'>VOTE</th>
                        <th scope='col'>DISTANCE TO CENTER</th>
                    </tr>
                </thead>
                <tbody>";
            
            foreach ($hotels as $hotel => $info) {
                echo "<tr>
                        <th scope='row'>" . ($hotel) . "</th>
                        <td>" . $info['name'] . "</td>
                        <td>" . $info['description'] . "</td>
                        <td>" . $info['parking'] . "</td>
                        <td>" . $info['vote'] . "</td>
                        <td>" . $info['distance_to_center'] . "</td>
                    </tr>";
            }

            echo "</tbody></table>";
} else if ($select_hotel === "valore_2"){
    foreach($hotels as $hotel => $info){
        if ($info["parking"] === true){
            $hotelList[]=$info; //aggiungo a $hotelList il nuovo hotel che soddisfa la condizione
        }
    }
    //var_dump($hotelList);   stampo con var_dump la lista di hotel
    echo "<table class='table'>
    <thead>
        <tr>
            <th scope='col'>#</th>
            <th scope='col'>NAME</th>
            <th scope='col'>DESCRIPTION</th>
            <th scope='col'>PARKING</th>
            <th scope='col'>VOTE</th>
            <th scope='col'>DISTANCE TO CENTER</th>
        </tr>
    </thead>
    <tbody>";

foreach ($hotelList as $hotel => $info) {
    echo "<tr>
            <th scope='row'>" . ($hotel) . "</th>
            <td>" . $info['name'] . "</td>
            <td>" . $info['description'] . "</td>
            <td>" . $info['parking'] . "</td>
            <td>" . $info['vote'] . "</td>
            <td>" . $info['distance_to_center'] . "</td>
        </tr>";
}

echo "</tbody></table>";
}






?>
</div>
</body>
</html>