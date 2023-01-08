<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sigma Summation Program</title>
</head>
<body>
    <h1>Sigma Summation Program</h1>
    <form action="#" method="POST">
        <label>Write a number to get its summed number.</label>
        <input type="text" name="n1">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $N1 = $_POST['n1'];
    $sum = 0;
    for($i=1;$i<=$N1;$i++){
        $sum += $i;                  //Add and assign a new value to the variable, for example if you have chosen 5, sum=1,i=2,sum=1+2=3,i=3,sum=3+3=6,i=4,sum=6+4=10,i=5,sum=10+5=15,i=6,  
    }
    echo $sum;
}
?>
