<?php

$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['action'])){
   if($_GET["action"] == "gym"){

//Create database
$sql = "CREATE DATABASE `gymsystemdb`";
if ($conn->query($sql) === TRUE) {
echo "Database created successfully";
} else {
echo "Error creating database: " . $conn->error;
}

$conn = mysqli_connect("localhost","root","","gymsystemdb");

$sql = "CREATE TABLE `tbl_logintimetrack` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table 1: " . $conn->error;
}





$sql = "CREATE TABLE `tbl_payments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `session` varchar(50) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table 1: " . $conn->error;
}


$sql = "CREATE TABLE `tbl_pricing` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `session` varchar(50) NOT NULL,
  `access` varchar(50) NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table 1: " . $conn->error;
}

$sql = "INSERT INTO `tbl_pricing` (`id`, `session`, `access`, `price`) VALUES
(1, 'Day', 'Limited access ', 5000.00),
(2, 'Week', 'Flexible limited access', 9500.00),
(3, 'Month', 'Pro Access e.g WiFI & DSTV Room', 30500.00),
(4, 'Year', 'Unlimited Access e.g WiFi, DSTV Room, Swimming Poo', 75000.00)";
if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table 1: " . $conn->error;
}

$sql = "CREATE TABLE `tbl_updates` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `inform_user` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `start_timeam` varchar(25) NOT NULL,
  `end_timeam` varchar(25) NOT NULL,
  `start_timepm` varchar(25) NOT NULL,
  `end_timepm` varchar(20) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table 1: " . $conn->error;
}

$sql = "INSERT INTO `tbl_updates` (`id`, `inform_user`, `message`, `start_timeam`, `end_timeam`, `start_timepm`, `end_timepm`) VALUES
(1, 'Today, the gym will be closed due to technical problem.', '', '00:00', '08:00', '14:30', '17:30')";
if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table 1: " . $conn->error;
}


$sql = "CREATE TABLE `tbl_users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `user` varchar(10) NOT NULL COMMENT '1 - admin\r\n2 - member / user',
  `password` varchar(255) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table 1: " . $conn->error;
}

$sql = "INSERT INTO `tbl_users` (`id`, `name`, `email`, `contact`, `occupation`, `location`, `usertype`, `user`, `password`, `join_date`) VALUES
(1, 'King Stedah', 'admin@gmail.com', '', '', '', '', '1', '45f2603610af569b6155c45067268c6b', '2021-07-11 10:23:37')";
if ($conn->query($sql) === TRUE) {
header("location:../administrator/index.php");
} else {
echo "Error creating table: " . $conn->error;
}
}
}

?>
<?php include '../templates/header.php'; ?>


<div class="container" style="text-align: center;">
    <p style="font-size:30px;">Click install to run the system</p>
</div>
<div class="container" style="text-align: center;">
<button style="background-color: mediumseagreen; border-radius: 8px; border: 1px solid mediumseagreen;"><a href="install.php?action=gym" 
style="text-decoration: none;font-size: 30px; color: #fff; ">Install</a></button>
</div>