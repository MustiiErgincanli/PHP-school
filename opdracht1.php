<?php

/*
* Copyright by Nathan Sakoetoe
*/

	$som = 0;
	
	for ($i = 0; $i < 1000; $i++) {
			//heel getal
			if (is_int($i / 3) || is_int($i / 5)) {
				$som = $som + $i;			
    }
}
	//Output van de som
	echo $som;
	
?>
