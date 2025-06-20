<?php 

class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    public static function searchInsert($nums, $target) {
        for ($index = 0; $index < count($nums); $index++){
            if ($nums[$index] === $target){
                return $index;
                

            }elseif ($nums[$index] > $target) {
                return $index;
            
            }elseif ($index === count($nums) - 1) {
                return $index + 1; 
            }

        }
    }
}
// Example usage
Solution::searchInsert([1,3,5,6], 5); // Output: 2

?>