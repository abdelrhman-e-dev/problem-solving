class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
function containsNearbyDuplicate($nums, $k) {         
        $map = [];
        for($i = 0; $i < count($nums) ; $i++)
        {
            if(array_key_exists($nums[$i] , $map)){
                if(abs($map[$nums[$i]] - $i) <= $k){
                    return true;
                }
            }
            $map[$nums[$i]] = $i;
        }
        return false;
    }
}