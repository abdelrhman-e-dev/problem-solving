/*
 * Problem: 35. Search Insert Position
 * Difficulty: Easy
 * Link: https://leetcode.com/problems/search-insert-position/description/
 * Language: php
 * Date: 2025-12-28
 */

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $low = 0;
        $high = count($nums) - 1;
        while($low <= $high){
            $mid = floor(($low + $high) / 2);
            if($nums[$mid] == $targit){
                return $mid;
            }elseif($nums[$mid] < $target){
                $low = $mid + 1;
            }else{
                $high = $mid - 1 ;
            }
        }
        if($low >= $high){
        return $low  ;
        }
    }
}
