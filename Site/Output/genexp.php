
<?php
	/*require_once 'login.php';
	$connection = mysqli_connect(
		$db_hostname, $db_username,
		$db_password, $db_database);
	if( $_POST)
	{
	if(mysqli_connect_error()){
		die("Database Connection Failed: " .
				mysqli_connect_error() .
				" (" . mysqli_connect_error() . ")"
	)
	mysql_select_db()
	};
	}
	?><?php
	//stuff here
	if($_GET['username']!=""){}
	$query ="SELECT User_Name, count(idReceipt) as 'total transactions', sum(Transaction.Amount) AS 'Total' 
FROM `fa16-547-330-02_group6`.Receipt 
INNER JOIN `Transaction` ON Transaction.Receipt_idReceipt=Receipt.idReceipt 
where User_Name=$_GET['username'];"
}
if($_GET['merchant']!=""){}
	$query ="if($_GET['merchname']!="SELECT Receipt.Merchant_MerchPrimary, count(idReceipt) as 'total transactions', sum(Transaction.Amount) AS 'Total' FROM `fa16-547-330-02_group6`.Receipt 
INNER JOIN `Transaction` ON Transaction.Receipt_idReceipt=Receipt.idReceipt  where Receipt.Merchant_MerchPrimary='$_GET['merchname']';")"
}
	
	?><?php
	mysqli_close($connection);
	*/?>
	
-----------------------------------------------------------------------------------------------------------


	<?php
			require_once 'smg330_login.php';
			$connection = mysqli_connect(
			$db_hostname, $db_username,
			$db_password, $db_database);
			if(mysqli_connect_error()){
			die("Database Connection Failed: " .
			mysqli_connect_error() .
		

" (" . mysqli_connect_error() . ")"
);
};
?>
<?php
	echo " Go here:http://fa16-547-330-02.rutgers-sci.domains/group6/output/genBud.php to return Results: "
	?><?php
	//stuff here
	$query ="SELECT User_Name, Date, Merchant_MerchPrimary, Amount, ItemsBought FROM `fa16-547-330-02_group6`.Receipt 
INNER JOIN `Transaction` ON Transaction.Receipt_idReceipt=Receipt.idReceipt;";
	$result = mysqli_query($connection,$query); if(!$result) {
		die("Database Query Failed!");
	};
		echo "<table><tr><th>Name</th><th>Date</th><th>Merchant</th><th>Amount</th>
				<th>Number of Items Bought</th></tr>";
		while($row = $result->fetch_assoc()){
			echo"<tr><td>".$row["User_Name"]."</td><td>".$row["Date"]."</td><td>".$row["Merchant_MerchPrimary"]."</td>
				<td>".$row["Amount"]."</td><td>".$row["ItemsBought"]."</td></tr>";
		}
		echo "</table>";
	;
	mysqli_free_result($result);
	?><?php
	mysqli_close($connection);
	?>