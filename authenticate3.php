<?php
session_start();
include 'connect.php';

$mobno = $_POST['mob'];
$emailid = $_POST['email'];

$_SESSION['mobileno'] = $mobno ;
$_SESSION['email'] = $emailid ;

$sql_users = "SELECT `AvailableSeats` FROM `flights` WHERE `FlightNo`='".$_SESSION['choice']."'";
$res_users = mysqli_query($connect, $sql_users);
$row = mysqli_fetch_array($res_users);
$as = $row['AvailableSeats'];

$sql_users1 = "SELECT `TicketID` FROM `ticketno` WHERE 1";
$res_users1 = mysqli_query($connect, $sql_users1);
$row1 = mysqli_fetch_array($res_users1);
$tid = $row1['TicketID'];

if ($_SESSION['noofpass'] > 0 )
{
	$title1 = $_POST['title1'];
	$fn1 = $_POST['fn1'];
	$ln1 = $_POST['ln1'];
	$age1 = $_POST['age1'];
	$as = $as;
$sql_users = "INSERT INTO `passengers_info` (`Title`, `FirstName`, `LastName`, `Age` , `TID`, `SeatNo`) VALUES ('".$title1."', '".$fn1."', '".$ln1."', '".$age1."', '".$tid."', '".$as."');";
$res_users = mysqli_query($connect, $sql_users);
}

if ($_SESSION['noofpass'] > 1 )
{
	$title2 = $_POST['title2'];
	$fn2 = $_POST['fn2'];
	$ln2 = $_POST['ln2'];
	$age2 = $_POST['age2'];
	$as = $as-1;
$sql_users = "INSERT INTO `passengers_info` (`Title`, `FirstName`, `LastName`, `Age`, `TID`, `SeatNo`) VALUES ('".$title2."', '".$fn2."', '".$ln2."', '".$age2."', '".$tid."', '".$as."');";
$res_users = mysqli_query($connect, $sql_users);
}

if ($_SESSION['noofpass'] > 2 )
{
	$title3 = $_POST['title3'];
	$fn3 = $_POST['fn3'];
	$ln3 = $_POST['ln3'];
	$age3 = $_POST['age3'];
	$as = $as-1;
$sql_users = "INSERT INTO `passengers_info` (`Title`, `FirstName`, `LastName`, `Age`, `TID`, `SeatNo`) VALUES ('".$title3."', '".$fn3."', '".$ln3."', '".$age3."', '".$tid."', '".$as."');";
$res_users = mysqli_query($connect, $sql_users);
}

if ($_SESSION['noofpass'] > 3 )
{
	$title4 = $_POST['title4'];
	$fn4 = $_POST['fn4'];
	$ln4 = $_POST['ln4'];
	$age4 = $_POST['age4'];
	$as = $as-1;
$sql_users = "INSERT INTO `passengers_info` (`Title`, `FirstName`, `LastName`, `Age`, `TID`, `SeatNo`) VALUES ('".$title4."', '".$fn4."', '".$ln4."', '".$age4."', '".$tid."', '".$as."');";
$res_users = mysqli_query($connect, $sql_users);
}

$as = $as-1;
$sql_users = "UPDATE `flights` SET `AvailableSeats`='".$as."' WHERE `FlightNo`='".$_SESSION['choice']."';" ;
$res_users = mysqli_query($connect, $sql_users);

$sql_users1111 = "INSERT INTO `ticketid` (`ticketID`, `FlightNo`, `class`, `date`, `noofpass`, `MobileNo`, `email`) VALUES ('".$tid."' , '".$_SESSION['choice']."' , '".$_SESSION['class']."' , '".$_SESSION['date']."' , '".$_SESSION['noofpass']."', '".$_SESSION['mobileno']."' , '".$_SESSION['email']."' );";
$res_users1111 = mysqli_query($connect, $sql_users1111);

$_SESSION['latestticketid'] = $tid;

$tid = $tid+1;
$sql_users1 = "UPDATE `ticketno` SET `TicketID`='".$tid."' WHERE 1 ;";
$res_users1 = mysqli_query($connect, $sql_users1);

header("Location: authenticate4.php");
?>