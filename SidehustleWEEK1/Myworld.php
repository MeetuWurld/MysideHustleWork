<?php
echo "The answer =";
function task1($start,$end){
 foreach(range($start, $end, 1) as $rangeOfNumber){

    echo "$rangeOfNumber,";
 }
}

task1(1, 10);
echo "<br/>";
?>