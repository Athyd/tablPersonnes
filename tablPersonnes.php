<?php 
$personne = [
	'personne1' => [
		'age'=>'20',
		'nom' => 'LETEUBE',
		'prenom' => 'Yohan'
		
		
	],
	'personne2' => [
		'age'=>'120',
		'nom' => 'LOREM',
		'prenom' => 'Ipsum'
		
		
	],
	'personne3' => [
		'age'=>'12',
		'nom' => 'HOLLANDE',
		'prenom' => 'François'
		
		
	],
	'personne4' => [
		'age'=>'43',
		'nom' => 'HAYDEN',
		'prenom' => 'Samuel'
		
		
	]
];
/*if ('age' >18) {
	echo $personne['nom'].' '.$personne['prenom'].' '.$personne['age'];
}*/
$pasBon=1;
foreach ($personne as $key => $value) {
	foreach ($value as $clef => $valeur) {
		if ($clef == 'age' && $valeur < 18) {
			//echo 'son '.$clef.' est '.$valeur."\n";
			$pasBon=0;
		}
		elseif ($clef == 'age' && $valeur > 18){
			$pasBon=1;
		}
		
		if ($pasBon != 0 && $clef == 'prenom') {
			echo 'son '.$clef.' est '.$valeur."\n";
		}
		
	}
}


 ?>