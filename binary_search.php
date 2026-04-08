function binarySearch($arr, $item){
    $low = 0;
    $high = count($arr) - 1;

    while($low <= $high){
        mid = floor(($low + $high) / 2);
        if($arr[$mid] == $item){
            return $mid;
        }
        if($arr[$mid] < $item){
            $low = $mid + 1;
        } else {
            $high = $mid - 1;
        }
        return -1;
    }
}