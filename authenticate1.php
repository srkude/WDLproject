<?php
include 'connect.php';

$source = $_POST['source'];
$dest = $_POST['dest'];
$Jdate = $_POST['Jdate'];
$noofpass = $_POST['noofpass'];
$class = $_POST['class'];

session_start();
$_SESSION['source'] = $source ;
$_SESSION['dest'] = $dest ;
$_SESSION['date'] = $Jdate ;
$_SESSION['noofpass'] = $noofpass ;
$_SESSION['class'] = $class ;   
/*
//echo "$source";
echo "".$_SESSION['source']. "";
echo "<br>";
echo "".$_SESSION['dest']. "";
echo "<br>";
echo "".$_SESSION['date']. "";
echo "<br>";
echo "".$_SESSION['noofpass']. "";
echo "<br>";
echo "".$_SESSION['class']. "";
echo "<br>";
echo "<br>";
*/
$query = "SELECT * FROM `flights` WHERE `source`='".$source."' AND `dest`='".$dest."' ";
$result = mysqli_query($connect, $query);
$rows=$result->num_rows;

for($j=0;$j<$rows;++$j)
{
	$result->data_seek($j);
	$row=$result->fetch_array(MYSQLI_ASSOC);
		if ($j==0)
		{
			$_SESSION['FN1'] = $row['FlightNo'];
			$_SESSION['AT1'] = $row['ArrTime'];
			$_SESSION['DT1'] = $row['DeptTime'];	
			$_SESSION['SP1'] = $row['SeatPrice'];
			$_SESSION['AS1'] = $row['AvailableSeats'];
		}
		if ($j==1)
		{
			$_SESSION['FN2'] = $row['FlightNo'];
			$_SESSION['AT2'] = $row['ArrTime'];
			$_SESSION['DT2'] = $row['DeptTime'];	
			$_SESSION['SP2'] = $row['SeatPrice'];
			$_SESSION['AS2'] = $row['AvailableSeats'];
		}
}

header("Location: grid.php");

?>