<?php
// sort - numeric value 
//rsort - reverse sort
//asort - associative array 
//arsort =  associative array reverse sort
//ksort = key sort
$a =array(10,20,30);
echo '<pre>';
print_r($a);
array_push($a,25);
array_push($a,45);
array_push($a,55);
print_r($a);
array_pop($a);
print_r($a);
$b = array(100,200,300);
$c = array_merge($a,$b);
print_r($c);

if(in_array(2500,$c)){
    echo "data found";
} else {
    echo 'No data found';
}
?>