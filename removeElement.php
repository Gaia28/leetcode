<?php 

class Solution {

  
    /**
     * @param Integer[] &$nums
     * @param Integer $val
     * @return Integer
     */
    
    public static function removeElement(&$nums, $val) {
        for ($index = 0; $index < count($nums); $index++) {
            if ($nums[$index] === $val) {
                array_splice($nums, $index, 1); // remove o elemento
                $index--; // volta um índice para não pular o próximo
            }
        }

        return count($nums); // retorna o novo tamanho do array
    }
}





?>
