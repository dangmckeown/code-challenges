<?php

/*
Via Parker @ Interview Cake:
write a function to tell us if a full deck of cards shuffled_deck (replaced here with $deck) is a single riffle of two other halves half1 and half2.
*/

function riffle($deck, $half1, $half2){

	//set output to true as default, then run tests to disprove it...
	$output = True;
	
	//first, test we at least have the right number of cards...
	if(count($deck) == count($half1) + count($half2)){
	
	//then, test the order matches the two split decks...	
	foreach($deck as $d){
	
		//if next card in deck is from start of half1...
		if ($d == $half1[0]){
		$discard = array_shift($half1);
		#echo "discard from half1";
		}//end if
		
		//if next card in deck is from start of half2...
		elseif ($d == $half2[0]){
		$discard = array_shift($half2);
		#echo "discard from half2";
		} //end elseif
		
		//if next card in deck isn't from start of half1 or half2, test is failed...
		else
		{
		#echo "BAD ORDER"; 
		$output = False;
		break;
		} //end else
		
	}//end foreach
	
	}//end if
	
	//if number of cards is inequal...
	else
	{
		$output = False;
		#echo "SOMEONE'S HIDING AN ACE"; 
	}//end else

return $output;

}
