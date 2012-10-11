<?php

/*
* Copyright by Nathan Sakoetoe
*/
	
	$f1 = 0;
	$f2 = 1;
	$i = 0;

	echo 'zoeken...';
	$searching = true;	
	while( $searching ) {
	
		$i++;
		$f3 = $f1 + $f2;
		$f1 = $f2;
		$f2 = $f3;
		
		if( strlen( $f3 ) == 15 ) $searching = false;
	}

	echo 'Eerste met 30 cijfers is F' . $i . ' met ' . $f3;

?>
