<?php
    require_once 'conn.php';
    
    if(isset($_GET['id'])){
        $req = $pdo->prepare("DELETE FROM ouvrages WHERE id = ?");
        $req->execute([$_GET['id']]);
        
        header('Location:../index.php');
        exit();
        
    }

