<?php
$un=$_SESSION["uni"];
$pay=1;
if($un<50)
{
    $pay=$un;
}
else if($un>=50&&$un<=100)
{
    $pay=$un*2;
}
else if($un>=101&&$un<=150)
{
    $pay=$un*3;
}
else
{
    $pay=$un*5;
}
?>