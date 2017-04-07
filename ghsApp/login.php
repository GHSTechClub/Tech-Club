<?php
require "conn.php";
$user_name = $_POST['user_name'];
$user_pass = $_POST['password'];
$mysql_qry = "SELECT * FROM employee_data WHERE username LIKE '$user_name' and password LIKE '$user_pass'";
$result = mysqli_query($conn, $mysql_qry);
if (mysqli_num_rows($result) > 0) {
	$res = mysqli_fetch_array($result);
	echo 'Your name is ' . $res['username'] . ' ' . $res['password'];
}
else {
	echo "log in failed";
}
?>