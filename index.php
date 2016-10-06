<!doctype html>
<html lang="en">
	<head>
		<title>HTML5 Portscanner</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="scanner.js"></script>
	</head>

	<body>
		<div class="container">
			<h1>HTML 5 Portscanner</h1>

			<form onsubmit="doAction('scan');return false;">
				<div class="form-group">
					<label for="ip_address">IP Address</label>
					<input type="text" class="form-control" id="ip_address" placeholder="127.0.0.1" required />
				</div>
			</form>

			<div class="panel panel-default">
				<div class="panel-body">
					<ul class="list-group" id="scan_results">
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>
