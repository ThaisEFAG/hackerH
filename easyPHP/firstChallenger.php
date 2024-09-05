<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
   echo "<pre>";
print_r($arr);
echo "</pre>";

function plusMinus($arr) {
   $arrResp = [];
   
  echo "<pre>";
print_r($arrResp);
echo "</pre>";

  $decNumPositive = 0;
   $decNumNegative = 0;
   $decNumZero = 0;
   
        for($i = 0; $i < count($arr); $i++){
         
            if($arr[$i] > 0){
           
             $porcentagem = $i / count($arr) / $i;
               $decNumPositive += $porcentagem;    
               echo("$decNumPositive, ");
                  
                }
                if($arr[$i] < 0){
                
                $porcentagem = ($i + 1) / count($arr) / ($i + 1);
                $decNumNegative += $porcentagem;
                
                } 
                else{
                    $decNumZero = $i / count($arr) / $i;
                    echo("$decNumZero, ");
                    
                    
                }
            
        };

}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);
