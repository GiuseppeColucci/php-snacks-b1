<?php
    /*
    Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    Stampiamo a schermo tutte le partite con questo schema:
    Olimpia Milano - Cantù | 55 - 60
        */

 $matches=[
    [
        "ospite"=>"Bull1",
        "casa"=>"LE1",
        "Pospite"=>15,
        "Pcasa"=>17
    ],
    [
        "ospite"=>"Bull2",
        "casa"=>"LE2",
        "Pospite"=>1,
        "Pcasa"=>7
    ],
    [
        "ospite"=>"Bull3",
        "casa"=>"LE3",
        "Pospite"=>10,
        "Pcasa"=>5
    ],
 ];
 for($i=0; $i < count($matches); $i++){
    echo "<p>";
    echo "Partita";

    echo "</p>";

     echo "<p>";
     echo$matches[$i]["casa"];
     echo "</p>";
     echo "<p>";

     echo $matches[$i]["ospite"];
     echo "</p>";
     echo "<p>";

     echo $matches[$i]["Pospite"];
     echo "</p>";
     echo "<p>";

     echo $matches[$i]["Pcasa"];
     echo "</p>";



 }
/*
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

*/
$name = $_GET['name'];
$LengthName=3;

if (strlen($name)>=$LengthName){
    $response1='il nome è valido';
}
else{
    $response1='il nome NON è valido';

}

$age=$_GET['age'];
if (is_numeric($age)=== true){
    $response2='è un numero';

}
else{
    $response2=' NON è un numero';

}



//parte email
$email = $_GET['email'];

$chiocciola = '@';

$dot = '.';

if(strpos($email,$chiocciola) !== false && strpos($email, $dot) !== false){
   $response = 'ok';
}else{
  $response = 'ko';
}



    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    

    <h1>verifica nome</h1>
   <p> Il risultato è <?php echo $response1 ?></p>
    <h1>email verifica</h1>
   <p> Il risultato è <?php echo $response ?></p>
    <h1>verifica età</h1>
    <p>Il risultato  <?php echo $response2 ?></p>

</body>
</html>

