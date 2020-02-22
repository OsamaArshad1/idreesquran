<?php
$host="localhost";
$username="root";
$password="";
$database="idreesacademy";

$connect=mysqli_connect($host,$username,$password,$database);

$Name=$_POST['n1'];
$Email=$_POST['e1'];
$Country=$_POST['c1'];
$Phone=$_POST['p1'];


$query="insert into register(Name,Email,Country,Phone) values('$Name','$Email','$Country',$Phone) ";
$transport=mysqli_query($connect,$query);
if($transport)
{
}
else
{
    echo"record not inserted";
}
