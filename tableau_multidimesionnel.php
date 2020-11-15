<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
      $mat=[ [2,2,2,2],
             [3,3,3,3],
             [4,4,4,4]];
        /* identique à
         $mat=array(array(2,2,2,2),
                     array(3,3,3,3),
                     array(4,4,4,4)
                       );
        */
    /* affichage avec la boucle for
     for($i=0;$i<count($mat);$i++){
         for($j=0;$j<count($mat[$i]);$j++){
            echo $mat[$i][$j].' ';
         }
         echo '<br>';
     }*/

    echo '<table border="1"> ';

    foreach ($mat as $t){
        echo '<tr>';
        foreach ($t as $val){
         echo '<td>'.$val.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
?>
</body>
</html>
