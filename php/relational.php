<?php
//Relational operator
// <,>,<=,>=,==,!=,===,!==
//== only check value
$a = "35";
$b=35; //35>35  35<35
echo "a > b is ".($a>=$b); 
echo "<br> a < b is ".($a<=$b);
echo "<br> a == b is ".($a==$b);
echo "<br> a === b is ".($a===$b);
if($a>$b){
    echo "<br>A is maximum";
} else {
    echo "<br>B is maximum";
}
?>
