<?php

//  Encode $input according to 'atbash' cipher and return $output
//  via Daily programmer
//  https://www.reddit.com/r/dailyprogrammer/comments/45w6ad/20160216_challenge_254_easy_atbash_cipher/
//  Slightly disappointingly, 'atbash' when encoded comes back as 'zgyzhs'

function atbash($input){

$output="";
//initialise output

$atbash = array(
"a"=>"z",
"b"=>"y",
"c"=>"x",
"d"=>"w",
"e"=>"v",
"f"=>"u",
"g"=>"t",
"h"=>"s",
"i"=>"r",
"j"=>"q",
"k"=>"p",
"l"=>"o",
"m"=>"n",
"n"=>"m",
"o"=>"l",
"p"=>"k",
"q"=>"j",
"r"=>"i",
"s"=>"h",
"t"=>"g",
"u"=>"f",
"v"=>"e",
"w"=>"d",
"x"=>"c",
"y"=>"b",
"z"=>"a",
"A"=>"Z",
"B"=>"Y",
"C"=>"X",
"D"=>"W",
"E"=>"V",
"F"=>"U",
"G"=>"T",
"H"=>"S",
"I"=>"R",
"J"=>"Q",
"K"=>"P",
"L"=>"O",
"M"=>"N",
"N"=>"M",
"O"=>"L",
"P"=>"K",
"Q"=>"J",
"R"=>"I",
"S"=>"H",
"T"=>"G",
"U"=>"F",
"V"=>"E",
"W"=>"D",
"X"=>"C",
"Y"=>"B",
"Z"=>"A"
);

$split_input = str_split($input);
	
foreach ($split_input as $split_in){
	if (in_array($split_in,$atbash)){
		 $output .= $atbash[$split_in];
		}//end if
	else{
		$output .= $split_in;
		//non-alpha comes back unaltered
		}//end else
	}	//end foreach

return $output;
} //end atbash

?>
