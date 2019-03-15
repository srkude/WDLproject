<?php
session_start();
include 'connect.php';


$tid = $_SESSION['latestticketid'] ;
//-----------------------
$_SESSION['title1'] = "- - -";
$_SESSION['fn1'] ="- - -";
$_SESSION['ln1'] = "- - -";
$_SESSION['age1'] ="- - -";
$_SESSION['seatno1'] ="- - -";

$_SESSION['title2'] = "- - -";
$_SESSION['fn2'] ="- - -";
$_SESSION['ln2'] = "- - -";
$_SESSION['age2'] ="- - -";
$_SESSION['seatno2'] ="- - -";

$_SESSION['title3'] = "- - -";
$_SESSION['fn3'] ="- - -";
$_SESSION['ln3'] = "- - -";
$_SESSION['age3'] ="- - -";
$_SESSION['seatno3'] ="- - -";

$_SESSION['title4'] = "ww";
$_SESSION['fn4'] ="ww";
$_SESSION['ln4'] = "www";
$_SESSION['age4'] ="vvvv";
$_SESSION['seatno4'] ="www";

//------------------------
$sql_users00 = "SELECT `ArrTime` , `DeptTime` FROM `flights` WHERE `FlightNo`='".$_SESSION['choice']."'";
$res_users00 = mysqli_query($connect, $sql_users00);
$row = mysqli_fetch_array($res_users00);
$_SESSION['arrtime'] = $row['ArrTime'];
$_SESSION['depttime'] = $row['DeptTime'];

$query = "SELECT * FROM `passengers_info` WHERE `TID`='".$tid."' ";
$result = mysqli_query($connect, $query);
$rows=$result->num_rows;


for($j=0;$j<$rows;$j++)
{
	$result->data_seek($j);
	$rows=$result->fetch_array(MYSQLI_ASSOC);
		if ($j==0)
		{
			$_SESSION['title1'] = $rows['Title'];
			$_SESSION['fn1'] = $rows['FirstName'];
		    $_SESSION['ln1'] = $rows['LastName'];
		    $_SESSION['age1'] = $rows['Age'];
		    $_SESSION['seatno1'] = $rows['SeatNo'];
		}


		else if ($j==1)
		{
			$_SESSION['title2'] = $rows['Title'];
			$_SESSION['fn2'] = $rows['FirstName'];
		    $_SESSION['ln2'] = $rows['LastName'];
		    $_SESSION['age2'] = $rows['Age'];
		    $_SESSION['seatno2'] = $rows['SeatNo'];
		}

		else if ($j==2)
		{
			$_SESSION['title3'] = $rows['Title'];
			$_SESSION['fn3'] = $rows['FirstName'];
		    $_SESSION['ln3'] = $rows['LastName'];
		    $_SESSION['age3'] = $rows['Age'];
		    $_SESSION['seatno3'] = $rows['SeatNo'];
		}

		else if ($j==3)
		{
			$_SESSION['title4'] = $rows['Title'];
			$_SESSION['fn4'] = $rows['FirstName'];
		    $_SESSION['ln4'] = $rows['LastName'];
		    $_SESSION['age4'] = $rows['Age'];
		    $_SESSION['seatno4'] = $rows['SeatNo'];
		}
}

/*
echo "".$_SESSION['tic_source']. "<br> "; 
echo "".$_SESSION['tic_dest']. " <br> ";
echo "".$_SESSION['tic_date']. "<br>"; 
echo "".$_SESSION['price_per_seat']. "<br>";
echo "".$_SESSION['class']. "<br>";
*/

/*
echo "".$_SESSION['title1']. ""; 
echo "".$_SESSION['fn1']. "";
echo "".$_SESSION['ln1']. "";
echo "".$_SESSION['seatno1']. "<br> "; 

echo "".$_SESSION['title2']. "";
echo "".$_SESSION['fn2']. "";
echo "".$_SESSION['ln2']. "";
echo "".$_SESSION['seatno2']. "<br>"; 

echo "".$_SESSION['title3']. "";
echo "".$_SESSION['fn3']. "";
echo "".$_SESSION['ln3']. "";
echo "".$_SESSION['seatno3']. "<br> "; 	

echo "".$_SESSION['title4']. "";
echo "".$_SESSION['fn4']. "";
echo "".$_SESSION['ln4']. "";
echo "".$_SESSION['seatno4']. "<br>";


echo "next page will be coming soon !!!!!!!!!";
*/
header("Location: ticket.php");

?>
