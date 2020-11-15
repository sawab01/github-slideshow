<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    $etudiants=array("Ahmed","Said","Hajar","Safaa");

    echo '<table border="1">';
    echo '<tr> <th> ID</th> <th>Prénom</th> </tr>';

    foreach($etudiants as $cle => $n){
        echo "<tr><td>$cle</td><td>$n</td> </tr> ";
    }

    echo '</table>';
?>
</body>
</html>