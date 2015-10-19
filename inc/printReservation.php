<?php

    $result = array();
    include 'conn.php';
	
$j=$_GET['j'];	

$id=$_GET['id'];
	

$sql="SELECT * FROM `cd".$j."-spectateurs` WHERE id=".$id;
//echo $sql;
$rs = $conn->query($sql);;
$row = $rs->fetch(PDO::FETCH_OBJ);


$name=utf8_encode($row->nom);
$firstname=utf8_encode($row->prenom);
$adresse=utf8_encode($row->adresse);
$zip=utf8_encode($row->zip);
$local=utf8_encode($row->localite);
$email=utf8_encode($row->email);
$phone=utf8_encode($row->telephone);
$emplacement=utf8_encode($row->zone);
$nbplaces=$row->nbplaces;
$options=utf8_encode($row->options);
$date_reserv=$row->date_reserv;
$apayer=sprintf("%01.2f", $row->apayer);



if ($options=="guichet"){
	$options=" tenir &agrave; votre disposition au guichet.";
	$lettre="G";
}else{
	$options=" vous remettre en annexe";
	$lettre="E";
}
	
	$body = '<html>';
    $body .= '<body>';
    $body .= '<div>';
	$body .= '<div style="text-align: center; "><h2>Countrytickets.eu</h2><br /></div>';
	$body .= '<div style="float:left;width:50%;height:100px">&nbsp;</div>';
	$body .= '<div style="text-align: left" ><h1 style="margin-bottom: 0px; margin-top: 0px;">'.$j.' - '.$id.' - '.$lettre.'</h1><b>'.$name.'&nbsp;'.$firstname.'<br />'.$adresse.'<br />'.$zip.'&nbsp;'.$local;
    $body .= '</b></div>';
    $body .= '<div><h2>Billetterie du Country Hall de Li&egrave;ge</h2><br /></div>';
    $body .= '<div>Madame, Monsieur<br /></div>';
	$body .= '<div style="text-align: center; text-decoration: underline"><p><h3>COUPE DAVIS : BELGIQUE - SUISSE</h3></p><p><h2>'.$j.' MARS 2015 - Country Hall de LIEGE</h2></p></div>';
    $body .= '<div>';
	$body .= '<p>Nous avons bien re&ccedil;u votre paiement de '.$apayer.' &euro; et avons le plaisir de '.$options.':</p>';
	$body .= '<ul><li>'.$nbplaces.' place(s)</li><li>Zone: '.$emplacement.'</li></ul>';
	$body .= '<p>En vous remerciant</p>';
	$body .= '</div>';
	$body .= '<div>Votre adresse e-mail:<b> '.$email.'</b><br />Votre n&deg; de t&eacute;l&eacute;phone:<b> '.$phone.'</b><br />Date de r&eacute;servation:<b>'.$date_reserv.'</b></div>';
	$body .= '</div>';
	$body .= '</body>';
	$body .= '</html>';
    
    
    echo $body;
?>