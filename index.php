<?php
session_start();

// Logout handling moved here from logout.php.
if (isset($_GET['logout'])) {
	$_SESSION = [];
	session_destroy();
	header('Location: login.php');
	exit;
}

if (empty($_SESSION['driveCraftAuthenticated'])) {
	header('Location: login.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'sections/header.php'; ?>
</head>
<body>
	
	<?php include 'sections/navbar.php'; ?>
	<?php include 'sections/welcome.php'; ?>
	<?php include 'sections/cards.php'; ?>
	<?php include 'sections/footer.php'; ?>

</body>
</html>
