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



    foreach($hotels as $hotel => $info){
        echo "<h3>HOTEL - " . $hotel . " : </h3>";
        echo "<div>NAME: " . $info["name"] . "</div>" ;
        echo "<div>DESCRIPTION: " . $info["description"] . "</div>" ;
        echo "<div>PARKING: " . $info["parking"] . "</div>" ;
        echo "<div>VOTE: " . $info["vote"] . "</div>" ;
        echo "<div>DISTANCE TO CENTER: " . $info["distance_to_center"] . "</div>" ;
    }

?>