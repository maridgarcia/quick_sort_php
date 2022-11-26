<?php
function quick_sort($numbers) {
    if(count($numbers) <= 1) return $numbers;

    $pivot = $numbers[0];
    $left = array();
    $right = array();

    for($i = 1; $i < count($numbers); $i++) {
        if($numbers[$i] < $pivot) {
            $left[] = $numbers[$i];
        } else {
            $right[] = $numbers[$i];
        }
    }

    return array_merge(quick_sort($left), array($pivot), quick_sort($right));
}
// Para testar:
// $arr = array(10, 16, 8, 12, 15, 6, 3, 9, 5);
// echo implode(", ", quick_sort($arr));
?>