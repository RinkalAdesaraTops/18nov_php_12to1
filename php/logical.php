<?php
// logical operators
//&& || !
    $a = 350;
    $b = 450;
    $c = 120;
    echo "a>b && a>c -- ".($a>$b && $a>$c);
    echo "<br>a>b || a>c -- ".($a>$b || $a>$c);
    echo "<br> !a>b || a>c -- ".!($a>$b || $a>$c);
    //Assignment - += -=,*=,/=,%=

    $a = 10;
    echo "<br>A is ".$a;
    $a += 5; //a = a+5
    echo "<br>A is ".$a;
?>