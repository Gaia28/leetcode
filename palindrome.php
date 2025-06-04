<?php 
// PALINDROME
class Solution {
    /** 
     * @param int $x
     * @return Boolean
     */
   public static function isPalindrome($x){
        
        if($x < 0){
            echo 'Numbers less than 0 are not palindromes';
            return false;
        }
        //convert the number to string
        $x = (string)$x;
        //split the string into an array
        $orignal = str_split($x);
        //reverse the array
        $reverse = array_reverse($orignal);
        //compare if the original and reversed are equals
        if($orignal === $reverse){
            echo 'The number is a palindrome';
            return true;
      
        }else{
            echo 'The number is not a palindrome';
            return false;
        }
    }
}
Solution::isPalindrome(121);
?>