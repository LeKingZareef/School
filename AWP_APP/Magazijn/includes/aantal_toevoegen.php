<?php 
	require '../core/init.php';

	if (isset($_POST['product_aantal']) && $_POST['product_number']) {

		$addaantal = "UPDATE `product` SET `product_aantal` = :product_totaal WHERE `product_number` = :product_number";
		$statement = $conn->prepare($addaantal);
		$product_number = $_POST['product_number'];
		$product_aantal = $_POST['product_aantal'];

		$statement->bindValue(':product_number', $product_number);
		
		$fetchproduct = "SELECT * FROM product WHERE product_number = '$product_number' " ;
		foreach ($conn->query($fetchproduct) as $row){
		$product_aantal_fetch = $row['product_aantal'];
		}

		$statement->bindValue(':product_totaal', $product_aantal + $product_aantal_fetch);

		$update = $statement->execute();

		header("Location: ../product_edit.php");
	}
	else {
		echo "Erorr";
	}
?>