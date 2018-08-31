<?php 
$servername="localhost";
        $username="root";
        $password="root";
        $database="Transaction";
        $conn= mysqli_connect($servername,$username,$password,$database);


if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
} 
print_r($conn);
echo "Connected successfully";

$account_id = $conn->real_escape_string($_REQUEST['account_id']);
$card_number_hash = $conn->real_escape_string($_REQUEST['card_number_hash']);
$created_on = $conn->real_escape_string($_REQUEST['created_on']);
echo $created_on;

$sql = "INSERT INTO txndetails (account_id,card_number_hash,created_on) VALUES ('$account_id','$card_number_hash','$created_on')";
if($conn->query($sql) === true)
	{
	    echo "Records inserted successfully.";
	} 
	else
	{
	    echo "ERROR: Could not able to execute $sql. " . $conn->error;
	} 
 ?>