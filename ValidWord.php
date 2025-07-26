<?php 

class Solution{
    /**
     * @param string $word
     * @return Boolean
     */

    function isValidWord($word) {
       if(strlen($word) >= 3 ){
            if(preg_match('/d/', $word) && preg_grep('/[aeiou]/', str_split($word)) && preg_match('/[A-Z]/', $word) && preg_match('/[a-z]/', $word)){
                return true;
            } else {
                return false;
            }
            return true;
            }else{
                return false;
            }

       }
      

    }

?>