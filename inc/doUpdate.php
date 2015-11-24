<?php
    require_once 'conn.php';
    
    $id = $_GET['updId'];
    $DateOuvr = $_GET['updDateOuvr'];
    $NoteEnvoi = $_GET['updNoteEnvoi'];
    $Patient = $_GET['updPatient'];
    $Ouvrage = $_GET['updOuvrage'];
    $Asd = $_GET['updAsd'];
    $Tvac = $_GET['updTvac'];
    
    
    $req = $pdo->prepare("UPDATE ouvrages SET date_ouvre=?, note_envoi=?, patient=?, ouvrage=?, asd=?, tvac=? WHERE id=?");
    $req->execute(array($DateOuvr,$NoteEnvoi,$Patient,$Ouvrage,$Asd,$Tvac, $id));


