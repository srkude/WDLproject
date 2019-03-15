<?php
session_start();
include 'connect.php';

$_SESSION['centeredticketid'] = $_POST['tid'];
//$_SESSION['centeredticketid'] = "133" ; //eg put 133


$query0 = "SELECT * FROM `ticketid` WHERE `ticketID` ='".$_SESSION['centeredticketid']."' ";
$result0 = mysqli_query($connect, $query0);
$row0 = mysqli_fetch_array($result0);

$_SESSION['cflightno'] = $row0['FlightNo'];
$_SESSION['cclass'] = $row0['class'];
$_SESSION['cdate'] = $row0['date'];
$_SESSION['cnoofpass'] = $row0['noofpass'];

$query1 = "SELECT * FROM `flights` WHERE `FlightNo` ='".$_SESSION['cflightno']."' ";
$result1 = mysqli_query($connect, $query1);
$row1 = mysqli_fetch_array($result1);

$_SESSION['csource'] = $row1['Source'];
$_SESSION['cdest'] = $row1['Dest'];
$_SESSION['cat'] = $row1['ArrTime'];
$_SESSION['cdt'] = $row1['DeptTime'];

/*
echo "".$_SESSION['centeredticketid']. "";
echo "<br>";
echo "".$_SESSION['cflightno']. "";
echo "<br>";
echo "".$_SESSION['cclass']. "";
echo "<br>";
echo "".$_SESSION['cdate']. "";
echo "<br>";
echo "".$_SESSION['cnoofpass']. "";
echo "<br>";
echo "".$_SESSION['csource']. "";
echo "<br>";
echo "".$_SESSION['cdest']. "";
echo "<br>";
echo "".$_SESSION['cat']. "";
echo "<br>";
echo "".$_SESSION['cdt']. "";
echo "<br>";
*/
header("Location: authenticateC2.php");
?>