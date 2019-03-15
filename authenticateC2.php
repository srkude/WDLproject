<?php
session_start();
include 'connect.php';

$error = "Invalid Ticket ID";

$sql_users = "SELECT `ticketID` FROM `ticketid` WHERE `ticketID` ='".$_SESSION['centeredticketid']."'";
$res_users = mysqli_query($connect, $sql_users);

if(mysqli_num_rows($res_users) < 1)
{
    echo "<script type='text/javascript'>alert(\"$error\");</script>";
    echo "<br><br><a href='cancel_ticket.php'>RETRY Ticket Cancelling</a>";
}

else
{

$_SESSION['ctitle1'] = "- - -";
$_SESSION['cfn1'] ="- - -";
$_SESSION['cln1'] = "- - -";
$_SESSION['cage1'] ="- - -";
$_SESSION['cseatno1'] ="- - -";

$_SESSION['ctitle2'] = "- - -";
$_SESSION['cfn2'] ="- - -";
$_SESSION['cln2'] = "- - -";
$_SESSION['cage2'] ="- - -";
$_SESSION['cseatno2'] ="- - -";

$_SESSION['ctitle3'] = "- - -";
$_SESSION['cfn3'] ="- - -";
$_SESSION['cln3'] = "- - -";
$_SESSION['cage3'] ="- - -";
$_SESSION['cseatno3'] ="- - -";

$_SESSION['ctitle4'] = "- - -";
$_SESSION['cfn4'] ="- - -";
$_SESSION['cln4'] = "- - -";
$_SESSION['cage4'] ="- - -";
$_SESSION['cseatno4'] ="- - -";

	// get boarding pass details
	$query = "SELECT * FROM `passengers_info` WHERE `TID`='".$_SESSION['centeredticketid']."' ";
	$result = mysqli_query($connect, $query);
	$rows=$result->num_rows;


	for($j=0;$j<$rows;++$j)
	{
	$result->data_seek($j);
	$rows=$result->fetch_array(MYSQLI_ASSOC);
		if ($j==0)
		{
			$_SESSION['ctitle1'] = $rows['Title'];
			$_SESSION['cfn1'] = $rows['FirstName'];
		    $_SESSION['cln1'] = $rows['LastName'];
		    $_SESSION['cage1'] = $rows['Age'];
		    $_SESSION['cseatno1'] = $rows['SeatNo'];
		}


		if ($j==1)
		{
			$_SESSION['ctitle2'] = $rows['Title'];
			$_SESSION['cfn2'] = $rows['FirstName'];
		    $_SESSION['cln2'] = $rows['LastName'];
		    $_SESSION['cage2'] = $rows['Age'];
		    $_SESSION['cseatno2'] = $rows['SeatNo'];
		}

		if ($j==2)
		{
			$_SESSION['ctitle3'] = $rows['Title'];
			$_SESSION['cfn3'] = $rows['FirstName'];
		    $_SESSION['cln3'] = $rows['LastName'];
		    $_SESSION['cage3'] = $rows['Age'];
		    $_SESSION['cseatno3'] = $rows['SeatNo'];
		}

		if ($j==3)
		{
			$_SESSION['ctitle4'] = $rows['Title'];
			$_SESSION['cfn4'] = $rows['FirstName'];
		    $_SESSION['cln4'] = $rows['LastName'];
		    $_SESSION['cage4'] = $rows['Age'];
		    $_SESSION['cseatno4'] = $rows['SeatNo'];
		}
	}


/*
echo "".$_SESSION['centeredticketid']. "";
echo "<br>";
echo "".$_SESSION['ctitle1']. "";
echo "<br>";
echo "".$_SESSION['cfn1']. "";
echo "<br>";
echo "".$_SESSION['cln1']. "";
echo "<br>";
echo "".$_SESSION['cage1']. "";
echo "<br>";
echo "".$_SESSION['cseatno1']. "";
echo "<br>";
*/
	header("Location: confirmcancel.php");
}
?>