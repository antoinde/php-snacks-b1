<?php 
/*
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/

$partite= [
    [
        'casa'=> 'Olimpia Milano',
        'ospite' => 'Cantù',
        'punti_casa' => 55,
        'punti_ospite' => 60
    ],
    [
        'casa'=> 'Chicago Bulls',
        'ospite' => 'Boston Celtics',
        'punti_casa' => 125,
        'punti_ospite' => 129
    ],
    [
        'casa'=> 'Atlanta Hawks',
        'ospite' => 'Miami Heat',
        'punti_casa' => 123,
        'punti_ospite' => 113
    ]
];
    
    
?>
<h2>Snack 1 - Partite di basket: </h2>

<?php
    for($i=0; $i < count($partite) ; $i++) {
        echo '<p>';
        echo $partite[$i]['casa'];
        echo ' - ';
        echo $partite[$i]['ospite'];
        echo ' | ';
        echo $partite[$i]['punti_casa'];
        echo ' - ';
        echo $partite[$i]['punti_ospite'];
        echo '</p>';
    }
?>
