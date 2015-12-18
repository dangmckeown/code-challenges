<?
function primes($num){
	//returns all prime numbers from 2 to $num as array
	
$primes = array(2);
$i = 3;
$end = $num; //alter this number to set upper limit
while($i <= $end){
	while ($i <= $end){
		
		$sqrt = ceil(sqrt($i));
		foreach  ($primes as $primus){
		$p = $i % $primus; //gets remainder
			
			if ($primus > $sqrt){
				continue;
			}
	#	echo $i . " divided by $primus = remainder " . $p . "<br />";
		//uncomment above to show working out
	
			if ($p == 0){
			//if number divides by anything in the prime array (ie has 0 remainder) it will get bumped    
			break 2;
			} //end if $p
		} //end foreach primes
	
	$primes[] = $i;
	$primes = array_unique($primes);
	
	$i+=2; 
	
	} //end while $i, adds number to primes array, otherwise...
$i+=2;
} //end while $i, *doesn't* add number to primes array
return $primes;
}
?>
