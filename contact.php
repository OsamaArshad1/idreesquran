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
$Message=$_POST['m1'];

$query="insert into contact(Name,Email,Country,Phone,Message) values('$Name','$Email','$Country',$Phone,'$Message') ";
$transport=mysqli_query($connect,$query);
if($transport)
{echo "successfully" ;
}
else
{
    echo"record not inserted";
}
