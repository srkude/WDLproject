<?php
session_start();
include 'connect.php';

$centeredmobileno= $_POST['typedmobno'];
$centeredemail = $_POST['typedemail'];


$error1 = "Invalid mobile no. or email add. ";
$error2 = "successfully deleted ";
$sql_users = "SELECT `MobileNo`, `email` FROM `ticketid` WHERE `email`='".$centeredemail."' AND `MobileNo`='".$centeredmobileno."'";
$res_users = mysqli_query($connect, $sql_users);

if(mysqli_num_rows($res_users) < 1)
{
    echo "<script type='text/javascript'>alert(\"$error1\");</script>";
    echo "<br><br><a href='confirmcancel.php'>RE-ENTER valid email id and mobile no</a>";
    
}

else
{
	//deletion 
	$sql_users2 = "DELETE FROM `passengers_info` WHERE `TID`= '".$_SESSION['centeredticketid']."'";
	$res_users2 = mysqli_query($connect, $sql_users2);

	$sql_users3 = "DELETE FROM `ticketid` WHERE `ticketID`= '".$_SESSION['centeredticketid']."'";
	$res_users3 = mysqli_query($connect, $sql_users3);
	echo "<script type='text/javascript'>alert(\"$error2\");</script>";
    echo "<br><br><a href='index.php'>HOME</a>";
}


?>