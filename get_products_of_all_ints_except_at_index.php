<?php

//Write a function get_products_of_all_ints_except_at_index() that takes a list of integers and returns a list of the products.
//via www.interviewcake.com

function get_products_of_all_ints_except_at_index($input){

if (! is_array($input)){
	return "ERROR: input is not an array";
}//end if

else
	
{

$output = array();

$count = count($input);

$count--;


for ($i = 0; $i <= $count; $i++){

	$keys = array();
	
	for($j = 0; $j <= $count; $j++){
		if($j != $i){
		$keys[] = $input[$j];
			
		}//end if
		
	}//end for $j
	$outcome = 1;
	
	foreach ($keys as $key){
	$outcome *= $key;
	}//end foreach	

$output[$i] = $outcome;
	
}//end for $i

return $output;
	
}//end else
	
}//end function

?>
