<?php
    require_once 'conn.php';
    
    $id = $_POST['updId'];
    $DateOuvr = $_POST['updDateOuvr'];
    $NoteEnvoi = $_POST['updNoteEnvoi'];
    $Patient = $_POST['updPatient'];
    $Ouvrage = $_POST['updOuvrage'];
    $Qui = $_POST['updQui'];
    $Asd = $_POST['updAsd'];
    $Tvac = $_POST['updTvac'];
    
    
    $req = $pdo->prepare("UPDATE ouvrages SET date_ouvre=?, note_envoi=?, patient=?, ouvrage=?, qui=?, asd=?, tvac=? WHERE id=?");
    $req->execute(array($DateOuvr,$NoteEnvoi,$Patient,$Ouvrage,$Qui,$Asd,$Tvac, $id));


