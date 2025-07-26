<?php 

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    public static function romanToInt($s){
        $romanNumerals = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];
        $s = strtoupper($s); 
        $s = str_split($s);
        $total = 0;
        $prevValue = 0;

        foreach($s as $key => $value){
            $currentValue = $romanNumerals[$value];
            
            $total += $currentValue;

           if($prevValue < $currentValue)
              {
                $total -= 2 * $prevValue; 

                $prevValue = $currentValue;
            
            } else {
                $prevValue = $currentValue;

           }

        }
        return $total;
    }
}


?>