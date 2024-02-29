<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$cname = $_POST['cname'];
$pin = $_POST['pin'];
$user  = $_POST['user'];
$password = $_POST['password'];


$conn = new mysqli('localhost','root','','nomination');
if($conn->connect_error){
 die('connection Failed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into login(fname,lname,cname,pin,user,password)
    vaues(?, ?, ?, ?, ?, ?,)");
    $stmt->bind_param("sssiii", $fname, $lname, $cname,$pin,$user,$password);
    $stmt->execute();
    echo "login sucess.........";
    $stmt->close();
    $conn->close();


}

?>