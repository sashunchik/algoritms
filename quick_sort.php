<?php

function quickSort($arr){
    //check if array is "sorted" (base case)
    if(count($arr) < 2){
        return $arr;
    }
    else{
        //find pivot (first element for now)
        $pivot = $arr[0];
        //divide into two arrays(one with less and one with greater)
        $less = [];
        $greater = [];
        for($i = 1; $i < count($arr); $i++){
            if($arr[$i] <= $pivot){
                $less[] = $arr[$i];
            }
            else{
                $greater[] = $arr[$i];
            }
        }
        //now call quicksort on the arrays
        return array_merge(quickSort($less), [$pivot], quickSort($greater));

    }
}

//check
$arr = [5, 3, 6, 2, 10];
echo "Original array: " . implode(", ", $arr) . "\n";
$sortedArr = quickSort($arr);
echo "Sorted array: " . implode(", ", $sortedArr) . "\n";
 