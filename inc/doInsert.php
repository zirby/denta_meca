<?php
    require_once 'conn.php';
    
    $DateOuvr = $_POST['insDateOuvr'];
    $NoteEnvoi = $_POST['insNoteEnvoi'];
    $Patient = $_POST['insPatient'];
    $Ouvrage = $_POST['insOuvrage'];
    $Qui = $_POST['insQui'];
    $Asd = $_POST['insAsd'];
    $Tvac = $_POST['insTvac'];
    
    
    $req = $pdo->prepare("INSERT INTO ouvrages SET date_ouvr=?, note_envoi=?, patient=?, ouvrage=?, qui=?, asd=?, tvac=?");
    $req->execute(array($DateOuvr,$NoteEnvoi,$Patient,$Ouvrage,$Qui,$Asd,$Tvac));


