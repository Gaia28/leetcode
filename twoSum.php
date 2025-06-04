<?php 
// TWO SUM
class Solution {

    /**
     * @param Int[] $nums
     * @param Int $target
     * @return Int[]
     */


 public static function twoSum($target, $nums){

    for($index1 = 0; $index1 < count($nums); $index1++ ){
        for($index2 = $index1 + 1; $index2 < count($nums); $index2++){
            if($nums[$index1] + $nums[$index2] == $target ){
                echo $index1, $index2;

            }

        }

    }

}


} Solution::twoSum(18, [2, 7, 11, 15]);

?>