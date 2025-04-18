<?php

$conn=new mysqli('localhost','root','','db2');

$designation=$_GET['dsg'];
$E1=$_GET['E1'];
$C1=$_GET['C1'];
$E2=$_GET['E2'];
$C2=$_GET['C2'];
$E3=$_GET['E3'];
$C3=$_GET['C3'];
$E4=$_GET['E4'];
$C4=$_GET['C4'];
$E5=$_GET['E5'];
$C5=$_GET['C5'];



$conn=new mysqli('localhost','root','','db2');

if($conn->connect_error)
{
    echo "Error";
    echo $conn->connect_error;
    die;
}



$querry=mysqli_query($conn,"insert into employee (Designation,E1,C1,E2,C2,E3,C3,E4,C4,E5,C5) Values ('$designation','$E1','$C1','$E2','$C2','$E3','$C3','$E4','$C4','$E5','$C5')");
if ($querry)
{
    echo "Data accepted!";
    header('C:\Users\DIVYA\Downloads\MINI PROJECT SEM IV-20231031T022851Z-001\MINI PROJECT SEM IV\home.html');
}
else{
    echo "<h1>Data failed</h1>";
}
    

print_r();
?>