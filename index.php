<?php 
/*
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60

Snack 2
Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di
 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
 Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo 
formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z

Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo
 e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

Snack 5
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome,
 Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome 
 e la media dei voti di ogni alunno.
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
<h2>Partite: </h2>

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