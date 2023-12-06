<?php
$Name = $_POST['Name'];
$countrycode = $_POST['country code'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$amount = $_POST['amount'];

// database connection

$conn = new mysqli('localhost','root','','donate');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into Data(Name, country code, phone, email, amount)values(?,?,?,?,?)");
    $stmt->bind_param("siisi",$Name, $countrycode, $phone ,$email ,$amount);
    $stmt->execute();
    echo "Donation  Successfully......";
    $stmt->close();
    $conn->close();
}
?>