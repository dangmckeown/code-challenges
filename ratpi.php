<?
define("PI", 3.14159265);
//pi is a constant and will not change throughout the script

$tol = 0.0007;
//adjust to make tolerance more stringent / more relaxed


for ($i = 3; $i <=5500; $i++){
// we can't get PI for anything less than 3
// find feasible divisors: range i/3.13 to i/3.15

$div = round($i / 3.13);
	//no point using a lower divisor than this - not close enough to PI

$highest = ceil($i / 3.15);
//no point using a higher divisor than this - not close enough to PI

do 
{
    $rat = $i / $div;
    $test = pow ($rat - PI, 2);
    $test = sqrt($test); 
    
    
if ($test < $tol){
    echo "$i / $div = $rat<br/>";
} //end if $test    

$div ++;
}
while ($div <= $highest);
	//end do...while - will perform at least one operation for each value of $i (then probably throw it out when it doesn't meet test criteria)
	
	
} //end for $i

?>