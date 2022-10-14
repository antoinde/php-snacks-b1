<?php

/* 
------------------------------------------------------------------------------------------------
Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo
 e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

 */

    $paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Pariatur distinctio reprehenderit provident nisi fugit accusamus quo. 
    Quasi dicta natus. perferendis esse laboriosam quibusdam itaque. soluta aut. 
    fugiat officia repudiandae error.';

    $array = explode('.', $paragraph);
    
    var_dump($array);
 ?>