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

		header("Location: ../product_history.php");
	}
	else {
		?>
		<head>
				<script src="../assets/dist/sweetalert.min.js"></script>
				<link rel="stylesheet" type="text/css" href="../assets/dist/sweetalert.css">
			</head>
			<body>
				<script>
					// window.alert('U dient alle velden in te vullen');
					// window.history.back();
					swal({   title: "Fout melding!",   text: "U dient alle velden in te vullen",   timer: 2000,   showConfirmButton: true });
					window.setTimeout( relocate , 1500);
					function relocate(){
					window.location = "../product_edit.php";
				}
				</script>
			</body>
		<?php

	}
?>