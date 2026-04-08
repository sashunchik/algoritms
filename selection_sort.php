<?php
//first find the smallest element

function findSmallest($array){
    //is binary search good for this?
    //maybe not, since we need to check every element to be sure
    //the first element will be the smallest for now
    $smallest = $array[0];
    //we need to know its index
    $smallest_index = 0;
    //use a for to itarate
    for($i = 1; $i < count($array); $i++){
        if($array[$i] < $smallest){
            $smallest = $array[$i];
            $smallest_index = $i;
        }
    }
    return $smallest_index;
}

//now we can use the smallest elem to start sorting the array
function selectionSort($arr){
    $newArr = [];
    //iterate ro find the smallest and add it to the new array
    for($i = 0; $i < count($arr); $i++){
        $smallest = findSmallest($arr);
        $newArr[] = $arr[$smallest];
        //now remove it from the old array
        array_splice($arr, $smallest, 1);
    }
    return $newArr;
}


//check
$arr = [5, 3, 6, 2, 10];
echo "Original array: " . implode(", ", $arr) . "\n";
$sortedArr = selectionSort($arr);   
echo "Sorted array: " . implode(", ", $sortedArr) . "\n";

