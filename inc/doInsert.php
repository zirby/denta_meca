<?php
    require_once 'conn.php';
    
    $DateOuvr = $_GET['insDateOuvr'];
    $NoteEnvoi = $_GET['insNoteEnvoi'];
    $Patient = $_GET['insPatient'];
    $Ouvrage = $_GET['insOuvrage'];
    $Asd = $_GET['insAsd'];
    $Tvac = $_GET['insTvac'];
    
    
    $req = $pdo->prepare("INSERT INTO ouvrages SET date_ouvre=?, note_envoi=?, patient=?, ouvrage=?, asd=?, tvac=?");
    $req->execute(array($DateOuvr,$NoteEnvoi,$Patient,$Ouvrage,$Asd,$Tvac));


