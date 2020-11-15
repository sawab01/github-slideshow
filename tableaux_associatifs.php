<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
      $notes=array("Ahmed"=>12,"Said"=>15,"Hajar"=>20);//méthode 1
      $notes1=["Ahmed"=>12,"Said"=>15,"Hajar"=>20];// méthode 2

      // méthode 3
    $notes2["Ahmed"]=12;
    $notes2["Said"]=15;
    $notes2["Hajar"]=20;

     foreach ($notes as $cle => $val){
         echo "$cle : $val <br>";
     }

    ?>
</body>
</html>