<?php 

$username = "root";
$password = "";
$server = 'localhost';
$db = 'goibibohotel';


$con = mysqli_connect($server,$username,$password,$db);
if($con){
    echo "connection";
}else{
    echo "not connection";
    //die("no connect" . mysqli_connect_error());
}
// session_start();

if(isset($_POST['submit'])){
    $uname = $_POST['urname'];
	$pass = $_POST['psword'];
    $sql = "SELECT * FROM hotel WHERE place='$uname' AND price='$pass'";
    // $sql = "SELECT * FROM hotel WHERE place='$uname' AND price='$pass'";
    $result = mysqli_query($con, $sql);
    $res = mysqli_num_rows($result);
    if($res){
        $row = mysqli_fetch_assoc($result);
        if($row){
            echo "login succuss";
        }
        else{
            echo "not log in";
        }
    }
    else{
        echo "haiiiiiiii";
    }

}

?>