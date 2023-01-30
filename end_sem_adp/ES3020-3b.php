<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3rd question</title>
</head>
<body>
<p align="right">
        My details<br> 
        R Navaneetha Krishnan<br> 
        R batch<br> 
        19-07-2021<br> 
    </p>
    <?php
    $consumer=$_POST["cname"];
    $units=$_POST["units"];
    $month=$_POST["month"];
    $area=$_POST["area"];
    $_SESSION["uni"]=$units;
    include 'ES3020-3c.php';
    $far=$pay;
    echo '<table border="5" align="center">';
    echo '<tr>';
    echo '<td> Consumer </td>';
    echo '<td> Details </td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td> Name </td>';
    echo '<td>'.$consumer.'</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td> No of unites consumed </td>';
    echo '<td>'.$units.'</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td> Month of billing </td>';
    echo '<td>'.$month.'</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td> Total charges </td>';
    echo '<td>'.$far.'</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td colspan="2" align="center">Pay    '.$far.'</td>';
    echo '</tr>';
    ?>
</body>
</html>