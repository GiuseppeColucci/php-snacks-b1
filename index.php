<?php
    /*
    Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    Stampiamo a schermo tutte le partite con questo schema:
    Olimpia Milano - Cantù | 55 - 60
        */

 $matches=[
    [
        "ospite"=>"Bull",
        "casa"=>"LE",
        "Pospite"=>15,
        "Pcasa"=>17
    ],
    [
        "ospite"=>"Bull",
        "casa"=>"LE",
        "Pospite"=>1,
        "Pcasa"=>7
    ],
    [
        "ospite"=>"Bull",
        "casa"=>"LE",
        "Pospite"=>10,
        "Pcasa"=>5
    ],
 ];
 for($i=0; $i < count($matches); $i++){
    echo $matches[$i]["casa"].["ospite"].["Pospite"].["Pcasa"];


 }






    ?>

