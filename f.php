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
    $email = $_POST["search"];
    $search = "select * from hotel where place='$email' ";
    // $insertquery = " insert into hotel(place) values('$email','$refer','$jobpost')";
    $ref = mysqli_query($con,$search);
    if($ref){
            while ($a = mysqli_fetch_array($ref)) {
                echo $a['hotelname'];
            }
        
    }else{
        
        echo("data not found");
        
      }
    }
?>