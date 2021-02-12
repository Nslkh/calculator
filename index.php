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
				<form action="" method="post">
					<label for="">Enter First Number</label>
					<input class="form-control" type="text" name="fnumber" placeholder="First Number">
                    <br>
					<label for="">Enter Second Number</label>
					<input class="form-control" type="text" name="secnumber" placeholder="Second Number">
                    <br>
                    <p>Choose any Operator</p>
					<select class="form-control" name="Operator" id="">
						<option value="">None</option>
						<option value="">+</option>
						<option value="">-</option>
						<option value="">x</option>
						<option value="">/</option>
					</select>
					<br>
					<input type="submit" name="submit" value="Calculate" class="btn btn-success">
					<input type="reset" value="Clear" class="btn btn-danger">
				</form>
				<br>
				<h4>The Answer is </h4>
				<div id="answer"></div>
			</div>
			<div class="col-lg-3"></div>
		</div>
	</div>
</body>
</html>
