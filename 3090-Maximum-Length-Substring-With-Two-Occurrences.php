class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function maximumLengthSubstring($s) {
        $left=0;
        $maxLength=0;
        $hash=[];
        $strLength = strlen($s);
        for($right=0 ; $right < $strLength ; $right++){
            $char = $s[$right];
            if(!isset($hash[$char])){
                $hash[$char] = 0;
            }
             $hash[$char]++;
             while($hash[$char] > 2)
             {
                $leftChar = $s[$left];
                $hash[$leftChar]--;
                $left++;
             }
             $currentLength = $right - $left + 1;
            $maxLength = max($maxLength, $currentLength);
        }
        return $maxLength;
    }
}