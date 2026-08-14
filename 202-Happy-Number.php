class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
 function isHappy($n) {
$digits  = [];
$happy;
$seen=[];
array_push($seen , $n);
while($n != 1){
while($n > 0)
{
    array_push($digits, $n %10 );
    $n  = floor($n/10);
}
$digits = array_reverse($digits);
for($i = 0; $i <= count($digits) - 1 ; $i++){
   $n += pow($digits[$i] , 2);
}
if(!in_array($n, $seen)){
    array_push($seen , $n);
}else{
    return 0;
}
$digits = [];
}
return 1;
    }
}