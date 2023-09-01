<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "connnection successful";
}else{
    echo "No connection";
}

mysqli_select_db($con, 'traveluserdata');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$location = $_POST['location'];
$guests = $_POST['guests'];
$arrivals = $_POST['arrivals'];
$leaving = $_POST['leaving'];

$query = "insert into userinfodata (name, email, phone, address, location, guests, arrivals, leaving)
values ('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";

mysqli_query($con,$query);

header('location:thanku.php');

?>