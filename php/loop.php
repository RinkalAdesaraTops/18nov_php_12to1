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
            $i=1;
            $sum = 0;
            $m = 1;
            while($i<=$n){ //entry controlled loop
                // echo "<br>".$i;
                $sum += $i;
                $m *= $i;
                $i++;
            }
            echo "<br> Sum is $sum";
            echo "<br> Multiplication is $m";
        }

    ?>
    <form action="#" method="post" name="frm">
        <input type="number" name="n1" id="n1"><br><br>
        <input type="submit" value="Save" name="save">
    </form>
</body>
</html>