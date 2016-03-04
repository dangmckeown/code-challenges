<?php

// Given a list_of_ints, find the highest_product you can get from three of the integers.
// The input list_of_ints will always have at least three integers.
// via https://www.interviewcake.com

function highest_product($list_of_ints){

rsort($list_of_ints);
	
$output = $list_of_ints[0] * $list_of_ints[1] * $list_of_ints[2];

return $output;

}

?>
