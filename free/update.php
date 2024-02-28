<?php
$host='localhost';
$user='root';
$pass='';
$db='std';


$conn=new mysqli($host,$user,$pass,$db);
echo 'connection success...';

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gmail=$_POST['gmail'];
$id=$_POST['id'];
$sql="insert into persons(fname,lname,gmail,id) values('$fname','$lname','$gmail','$id')";

$res=$conn->query($sql);

if($res==TRUE)
{
    echo '<br>Data insertion Success...';
}
else
{
    echo 'Error...';
}

$conn->close();
?>