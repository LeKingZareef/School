<?php
	include '../core/init.php';
	if (isset($_POST["add"])) 
	{
		if (empty($_POST['product_name']) || empty($_POST['product_number']) || empty($_POST['product_merk']) || empty($_POST['product_aantal']) || empty($_POST['product_omschrijving']) || empty($_POST['product_price']))
		{
			//echo "Vul alle velden in";\
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
					window.location = "../product_toevoegen.php";
				}
				</script>
			</body>
			<?php
			//header("Location: ../product_toevoegen.php");
			
		}
		else {
			$product_name = $_POST['product_name'];
			$product_number = $_POST['product_number'];
			$product_merk = $_POST['product_merk'];
			$product_aantal = $_POST['product_aantal'];
			$product_omschrijving = $_POST['product_omschrijving'];
			$product_price = $_POST['product_price'];

			$insertdata = $conn->prepare("INSERT INTO product (product_name, product_number, product_merk, product_aantal, product_omschrijving, product_price) VALUES (:product_name, :product_number, :product_merk, :product_aantal, :product_omschrijving, :product_price)");

			$insertdata->execute(array(
			    "product_name" => $product_name,
			    "product_number" => $product_number,
			    "product_merk" => $product_merk, 
			    "product_aantal" => $product_aantal, 
			    "product_omschrijving" => $product_omschrijving, 
			    "product_price" => $product_price
			));
			header("Location: ../index.php");

		}
	}
?>