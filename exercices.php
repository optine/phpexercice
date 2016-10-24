<?php
	
	$live=0;
	$force=100;

	while ($live < $force) {
		echo ++$live . "\n";
	}

if (0) echo "zero"; else echo "faux";
if (1) echo "un"; else echo "faux";

while ($force) {
	if($force % 2 == 1) echo $force ;

	$force--;
}
/* 	exercice3 */
$force = 0;
$dayend = 24 * 60 * 60 ;
$time = 0;

/*while ($time < $dayend) 
{
	if ($time % 3 == 0) {
		$force += 5 ;
	};
};
	echo '<pre>' ;
	print_r($force);
	echo '</pre>';
*/

/*  exercice 4 */
echo strrev("Engage le jeu que je le gagne");
/* $len = strlen($string);
	$inv = '' ;
	white($len != 0 )
	{
		$inv.= $string[$len -1];
		$len--;
	}
	return $inv;
}
	 */

/* exercice 5 */

function gen_num_alea($interval,$length){
	$result = 0;
	for ($i=0; $i <$length ; $i++) {
		if ($i == $length-1) {
			$result += pow(10,$i)*mt_rand(1,$interval);
		}else{
			$result += pow(10,$i)*mt_rand(0,$interval);
		}
	}
	echo $result;
/*$nombre = pow(10,3)*mt_rand($nb_min,$nb_max)
 + pow(10,2)*mt_rand($nb_min,$nb_max)
 + pow(10,1)*mt_rand($nb_min,$nb_max)
 + pow(10,0)*mt_rand($nb_min,$nb_max);

 echo $nombre * "\n";*/
}
gen_num_alea(5,1);

 /* exercice 6 */

 $cartes = ['c1', 'c2', 'c3', 'c4', 'c5', 'c6', 'c7', 'c8', 'c9', 'c10', 'c11', 'c12', 'c13', 'c14', 'c15'
 ,'c16', 'c17', 'c18', 'c19', 'c20'];

function draw_alea($array, $num){
	$result = [];
	$index_array = array_rand($array, $num);

	foreach ($index_array as $o) {
		$result[] = $array[$o];
	}

	return $result;
}
		echo '<pre>' ;
		print_r(draw_alea($cartes, 5));
		echo '</pre>';

 /* exercice 7 */

 function calcul_time()
 {
 	$time = time();
 	$min = (int) ($time /60) ;
 	$secondes = $time % 60 ;

 	$h = (int) ($min /60);
 	$min = 
 }