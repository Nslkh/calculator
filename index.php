<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculator</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				<br>
				<h1 class="text-center">Simple Calculator </h1>
				<form action="" method="POST">
					<label for="">Enter First Number</label>
					<input class="form-control" type="number" name="fnumber" placeholder="First Number">
                    <br>
					<label for="">Enter Second Number</label>
					<input class="form-control" type="number" name="secnumber" placeholder="Second Number">
                    <br>
                    <p>Choose any Operator</p>
					<select class="form-control" name="operator" >
						<option >None</option>
						<option >+</option>
						<option >-</option>
						<option >x</option>
						<option >/</option>
					</select>
					<br>
					<button type="submit" name="submit" value="Calculate" class="btn btn-success">Calculate	</button>
					<button type="reset" value="Clear" class="btn btn-danger">Reset</button> 
				</form>
				<br>
				<h4>The Answer is </h4>
				<div id="answer">
				<?php
				if(isset($_POST['submit'])){
					$result1 = $_POST['fnumber'];
					$result2 = $_POST['secnumber'];
					$sign = $_POST['operator'];
					switch ($sign){
						case 'None':
							echo "Please choose at least one operator";
							break;

						case '+':
							echo $result1 + $result2;
							break;

						case '-':
							echo $result1 - $esult2;
							break;

						case 'x':
							echo $result1 * $result2;
							break;

						case '/':
							echo $result1 / $result2;
							break;
					}
				}
				?>
				</div>
			</div>
			<div class="col-lg-3"></div>
		</div>
	</div>
</body>
</html>
