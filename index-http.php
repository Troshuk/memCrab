<?php
if (isset($_GET['submit'])) {
	echo "форма отправлена";
	$a = $_GET['a'];
	$b = $_GET['b'];
	$c = $_GET['c'];
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>HTTP. Forms</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div>
			<form action="index-http.php" method="get">
				A: <input type="text" name="a"><br>
				B: <input type="text" name="b"><br>
				C: <input type="text" name="c"><br>
				<input type="submit" value="Submit" name="submit">
			</form>
		</div>
	</body>
</html>