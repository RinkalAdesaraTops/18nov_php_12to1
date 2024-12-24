<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //reverse no then 121 == 121 palindrom no
        if(isset($_POST['save'])){
        $n = $_POST['n1'];
        $f = $n;
           //no = 342== 3 4 2 
           $rev=0;
           while($n>0){ //342 243
                $r = $n%10; //2 4 3
                //2*10=20+4= 24 *10=240+3 == 243
                $sum = $sum + ($r*$r*$r);
                $rev = ($rev*10)+$r;
                $n = floor($n/10);               
           }
           echo "<br> Reverse no is ".$rev;
           if($f == $rev){
                echo "No is palindrom";

           } else {
            echo "No is not palindrom";
           }
        }
// factorial no -- 5! == 5*4*3*2*1 == 120
//Armstrong no- 153 == 1^3 +5^3+ 3^3  = 1+125+27 = 153
    ?>
    <form action="#" method="post" name="frm">
        <input type="number" name="n1" id="n1"><br><br>
        <input type="submit" value="Save" name="save">
    </form>
</body>
</html>