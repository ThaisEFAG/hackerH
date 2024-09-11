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
        $arrReturn = [
        $percPosiNum = 0,
        $percNegaNum = 0,
        $percZeroNum = 0
    ];


    $decPercIndexArr = 1 / count($arr);

    for ($i = 0; $i < count($arr); $i++) {

        if ($arr[$i] > 0) {
            $percPosiNum += $decPercIndexArr;
            $arrReturn[0] = $percPosiNum;
        }
        if ($arr[$i] < 0) {
            $percNegaNum += $decPercIndexArr;
            $arrReturn[1] = $percNegaNum;
        }
        if ($arr[$i] === 0) {
            $percZeroNum += $decPercIndexArr;
            $arrReturn[2] = $percZeroNum;
        }
    }
    ksort($arrReturn);
    
    foreach ($arrReturn as $value) {

        echo (number_format($value, 6)) . "\n";
    }
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);
