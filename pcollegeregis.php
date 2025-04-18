<?php

$conn=new mysqli('localhost','root','','db2');

$collid=$_GET['CollegeID'];
$collname=$_GET['CollegeFullName'];
$city=$_GET['City'];
$state=$_GET['state'];
$pincode=$_GET['ZipCode'];
$website=$_GET['CollegeWebsite'];
$coffered=$_GET['coffered'];


$conn=new mysqli('localhost','root','','db2');

if($conn->connect_error)
{
    echo "Error";
    echo $conn->connect_error;
    die;
}

// $sql_obj=mysqli_query($conn,"select * from tusers where username='$username'");
// $totalr=mysqli_num_rows($sql_obj);

// if($totalr>0)
// {
//     echo "Username already exists.";
//     die;
    
// }

$querry=mysqli_query($conn,"insert into college (id,clgname,city,state,Pincode,website,course_Offer) Values ('$collid','$collname','$city','$state','$pincode','$website','$coffered')");
if ($querry)
{
    echo "Data accepted!";
    header('index.html');
}
else{
    echo "<h1>Data failed</h1>";
}
    

// print_r();
?>