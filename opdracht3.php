<?php

################################################
#   * Created by Nathan Sakoetoe
#   * Copyright 2012, Zavox All rights reserved.
################################################

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
		//execute limit on localhost
		if( strlen( $f3 ) == 30 ) $searching = false;
	}

	echo 'Eerste met 30 cijfers is F' . $i . ' met ' . $f3;

?>
