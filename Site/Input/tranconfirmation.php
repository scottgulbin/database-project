
<?php
	echo " Go here:http://fa16-547-330-02.rutgers-sci.domains/group6/home.php to return, Data has been added"
	?><?php
	
	//stuff here
	$query ="INSERT INTO Category_Item ('EntryID','Amount','Items Bought','Receipt_idReceipt')
VALUES ($_GET['entryID'],$_GET['item'],$_GET['catselect'],$_GET['id'];"
	
	mysqli_free_result($result);
	?><?php
	mysqli_close($connection);
	?>
	