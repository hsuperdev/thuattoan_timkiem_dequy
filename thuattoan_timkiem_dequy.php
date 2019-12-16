<?php
    function recursionSearch($array, $item, $start, $end) {
        $mid = (int)(($start + $end)/2);

        if ($array[$mid] > $item) {
            return recursionSearch($array, $item, $start, $mid-1);
        } elseif ($array[$mid] < $item) {
            return recursionSearch($array, $item, $mid+1, $end);
        } else {
            return true;
        }

        return false;
    }

    $arr = [1, 2, 3, 4, 5];

    $checkItem = recursionSearch($arr, 1, 0, 4);
    if ($checkItem) {
        echo "Tim thay so";
    } else {
        echo "Khong tim thay so";
    }
?>