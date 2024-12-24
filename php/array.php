<?php
//1)Index array / numeric array
$a = array("abc","xyz","pqr");
// echo "array is -- $a[0]";
// echo "<br>array is -- $a[1]";
$a[1] = "Testing...";
// echo "<br>new array is -- $a[1]";

foreach($a as $k=>$var){
    // echo "<br>".$k." is $var";
}
//2) Associative array - key value 
$emp = array(
    "name"=>"abc",
    "age"=>25,
    "salary"=>25000
);
echo "<pre>";
// print_r($emp);
$multi = array(
    array(
        "name"=>"a1",
        "age"=>25
    ),
    array(
        "name"=>"a2",
        "age"=>22
    ),
    array(
        "name"=>"a3",
        "age"=>20
    )
    );
foreach($multi as $v){
    foreach($v as $h=>$r){
        echo "<br>$h is $r";
        // echo "<br>Name is $r[age]";
    }

}
?>