<?php

class Calculator{
//    function fact ($n)  
// {  
//     if($n <= 1)   
//     {  
//         return 1;  
//     }  
//     else   
//     {  
//         return $n * fact($n - 1);  
//     }  
// }  

public function fact($n)
{
    if (!is_numeric($n) || $n < 0 || is_float($n) || false || is_string($n)) {
        return null;
    } 
    elseif ($n <=  1) {
        return 1;
    } 
    else {
        $x = 1;
        for ($i = $n; $i >= 1; $i--) {
            $x *= $i;
        }
        return $x;  
    }
}

}



?>