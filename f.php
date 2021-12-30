<?php
$username = "root";
$password = "";
$server = 'localhost';
$db = 'goibibohotel';


$con = mysqli_connect($server,$username,$password,$db);
if($con){
    // echo "connection";
}else{
    echo "not connection";
    //die("no connect" . mysqli_connect_error());
}
if(isset($_POST['submit'])){
$email = $_POST["username"];
$refer = $_POST["email"];
$jobpost = $_POST["password"];
// $refer = $_POST["email"];
// $jobpost = $_POST["jobpost"];
$insertquery = " insert into hotel(place,hotelname,price ) values('$email','$refer','$jobpost')";
$ref = mysqli_query($con,$insertquery);
if($ref){
        echo("data insert</br> name $email, </br>email $refer,</br> Password $jobpost");
    
}else{
    
    echo("data inot valid");
    
  }
    }
?>