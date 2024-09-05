<?php


/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr)
{
    $leftDiagonal = 0;
    $rightDiagonal = 0;
    $countMtz = count($arr);


    foreach ($arr as $indexLine  => $line) {


        $rightSum = $line[$countMtz - 1 - $indexLine];
        $leftDiagonal += $rightSum;


        $leftSum = $line[$indexLine];
        $rightDiagonal += $leftSum;
    }

    $result = abs($leftDiagonal - $rightDiagonal);
    return $result;
}



$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);


###########################################################################################


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
