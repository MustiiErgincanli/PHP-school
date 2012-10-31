<?php
	
################################################
#   * Created by Nathan Sakoetoe
#   * Copyright 2012, Zavox All rights reserved.
################################################

	$n = 6;
	$searching = true;	
	while( $searching ) { 
	$n++;
	
	$sum = 0; 
	for( $i = 1; $i <= $n; $i++ ) { 
		$sum += $i; 
	} 
 
	$deelbaar = 0; 
	for( $i = 1; $i <= $sum; $i++ ) { 
		if( $sum % $i == 0 ) $deelbaar++; 
	} 
 
	echo $sum . " is deelbaar door " . $deelbaar . " getallen\n"; 
	echo "<br />";
	 
	if( $deelbaar == 10 ) $searching = false; 
	
	}	

?>


