<?php
	require '../core/init.php';
	
	if (!empty($_POST['product_number']) && isset($_POST['product_number']) ) {
		$product_number = $_POST['product_number'];

		$sqldelete = "DELETE FROM `product` WHERE `product_number` = :product_number";

		$statement = $conn->prepare($sqldelete);
		$statement->bindValue(':product_number', $product_number);
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