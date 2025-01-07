<?php
$arr=array(1,2,3,4,5);

$c = count($arr);
// for ($i=0; $i<=$c;$i++){
//     echo "&arr[$i] <br>"; // 0 1 2 3 4 5
// }
foreach($arr as $i){
    echo "$i <br>"; // 1 2 3 4 5
}
?>