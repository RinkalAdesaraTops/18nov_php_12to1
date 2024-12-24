<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="#" name="frm" method="post">
        <input type="number" name="no1" id="no1" placeholder="Enter no">
        <br><br>
        <input type="number" name="no2" id="no2" placeholder="Enter no">
        <br><br>
        <input type="submit" value="Add" name="save">
    </form>
    <?php
    if(isset($_POST['save'])){
        // echo '<pre>';
        // print_r($_POST);
        // die;
        //true block'
        $n1 = $_POST['no1'];
        $n2 = $_POST['no2'];
        $add = $n1+$n2;
        echo "<br>Addition is ".$add;

        if($n1>$n2){
            echo "<br>No1 is Maximum";
        } else {
            echo "<br>No2 is Maximum";
        }

        if($n1 > 0){
            echo "<br>No1 is +ve";
        } else if($n1==0){
            echo "<br>No1 is zero";
        } else {
            echo "<br>No1 is -ve";
        }
    } 
    
    ?>
</body>
</html>