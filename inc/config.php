<?php
$host = 'localhost';
$username = 'root';
$pass = '';
$conn = 'hotel';

$conn = new mysqli($host,$username,$pass,$conn);

if ($conn->connect_error) {
	 die("Connection Failed". $conn->connect_error);
}
// ss
?>