<?php

################################################
#   * Created by Nathan Sakoetoe
#   * Copyright 2012, Zavox All rights reserved.
################################################

	
	$som = 0;
	
	//Met een loopje herhaal je iets
	for ($i = 0; $i < 1000; $i++) {
			//Met is_int checken of het om een heel getal gaat.
			if (is_int($i / 3) || is_int($i / 5)) {
				$som = $som + $i;			
    }
}
	//Uitkomst van de som wordt weergeven.
	echo $som;
	
?>
