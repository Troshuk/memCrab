<?php
session_start();
if (isset($_POST['submit'])) {
	if (!isset($_SESSION['start'])) {
		$_SESSION['start'] = 'start';
		$_SESSION['date'] = date('Y-m-d_H:i:s');
	}
}
if (isset($_SESSION['start'])) {
	echo "Session isset: " . $_SESSION['start'] . "<br>";
	echo "Session date create: " . $_SESSION['date'] . "<br>";
} else {
	echo "Session dead, pleace create session" . "<br>";
	?>
		<form method="Post">
			<input type="submit" value="Submit" name="submit">
		</form>
	<?php
}

// 10:54