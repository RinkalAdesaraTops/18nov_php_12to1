<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['save'])){
            $n = $_POST['n1'];
           //no = 342== 3 4 2 
           //count no of digits
           $count=0;
           $sum = 0;
           while($n>0){//342>0 34>0 3>0
                $r = $n%10; //342%10=2 34%10 =4  3%10=3
                $n = floor($n/10); //342/10=34.2 34/10=3.4=3
                $count++;
                $sum += $r;
           }
           echo "<br> No of digits are ".$count;
           echo "<br> SUm of digits are ".$sum;
        }

    ?>
    <form action="#" method="post" name="frm">
        <input type="number" name="n1" id="n1"><br><br>
        <input type="submit" value="Save" name="save">
    </form>
</body>
</html>