<?php

$reserv = $_POST['reserv'];

    require_once 'conn.php';
    $req = $pdo->prepare("SELECT * FROM cd16_reservations  WHERE id= ? ");
    $req->execute([$reserv]);
    $laReserv = $req->fetch();
    
    $bloc = $laReserv->bloc;
    $jour = $laReserv->jour;
    
    $reqP = $pdo->prepare("SELECT * FROM cd16_places_".$jour."  WHERE bloc= ? AND spectateurs_id = 0");
    $reqP->execute([$bloc]);
    while($row = $reqP->fetch()){
        
    }