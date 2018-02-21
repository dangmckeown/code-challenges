<?php

/*
Via Parker @ Interview Cake
take array and shuffle without additional output
*/

function in_place_shuffle(&$array){

	$c = count($array);

	for($i = 0; $i < $c; $i++){
		
		do {
			//give a random unassigned index number
			$index = rand($c,($c*$c*$c));
		}	while ($array[$index]);
		//and remove the original index		
		$array[$index] = $array[$i];	
		unset($array[$i]);	
	}
	//sort the array by its new indices
	ksort($array);
	$j = 0;
	foreach($array as $k => $a){
		//and restore the conventional 0...n-1 index
	$array[$j] = $array[$k];
	unset($array[$k]);
	$j++;
	}
	
}//end function
