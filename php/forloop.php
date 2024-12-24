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
            for($i=1;$i<=$n;$i++){
                echo "<br>".$i;
            }
        }

    ?>
    <form action="#" method="post" name="frm">
        <input type="number" name="n1" id="n1"><br><br>
        <input type="submit" value="Save" name="save">
    </form>
</body>
</html>