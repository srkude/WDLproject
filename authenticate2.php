<?php
session_start();
include 'connect.php';

$choice = $_GET['choice'];
$_SESSION['choice'] = $choice ;
//$choice = $_POST['FNO'];
//$_SESSION['choice'] = $choice ;
/*
echo$choice;
echo "<br>"; 
echo "".$_SESSION['choice']. "";
echo "<br>";
*/
$sql_users00 = "SELECT `ArrTime` , `DeptTime` FROM `flights` WHERE `FlightNo`='".$_SESSION['choice']."'";
$res_users00 = mysqli_query($connect, $sql_users00);
$row = mysqli_fetch_array($res_users00);
$_SESSION['arrtime'] = $row['ArrTime'];
$_SESSION['depttime'] = $row['DeptTime'];

header("Location: 3pagenew.php");
//echo$choice ;
?>