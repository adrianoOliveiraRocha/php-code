<?php

include_once 'Product.php';

$products = Product::getAllProducts();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Test Connection</title>
	<!-- links -->
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> 

	<!-- end links -->
</head>
<body>
	
	<section style="width: 80%; margin-right: auto; margin-left: auto; margin-top: 3%;">
		<h3>Test Connection</h3>
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Description</th>
					<th>Value R$</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($products as $product) {
					echo "
					<tr>
						<td>{$product['id']}</td>
						<td>{$product['description']}</td>
						<td>{$product['value']}</td>
					</tr>
					";
				}
				?>
			</tbody>
		</table>
	</section>
</body>
</html>