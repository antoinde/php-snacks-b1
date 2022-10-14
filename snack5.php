<?php

/* 
------------------------------------------------------------------------------------------------
Snack 5
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome,
 Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome 
 e la media dei voti di ogni alunno.

 */

$classe = [
    [
        'name' => 'Mario',
        'lastname' => 'Rossi',
        'votes' => [9,9,9,9,9,9,9,10]
    ],
    [
        'name' => 'Bartolo',
        'lastname' => 'Meo',
        'votes' => [5,6,7,8,9]
    ],
    [
        'name' => 'Tina',
        'lastname' => 'Ballerina',
        'votes' => [2,3,4,5,6]
    ]
];

for($i=0; $i < count($classe); $i++){
    $student = $classe[$i];
    $average = array_sum($student['votes']) / count($student['votes']);
    ?>
    <div>
        <h2><?= $student['name'] ?> <?= $student['lastname'] ?></h2>
        <p><?= round($average, 2) ?></p>
    </div>
    <?php
}

 ?>