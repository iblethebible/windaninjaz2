<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('location: index.html');
	exit;
}
include "connectdb.php";
$job_id = $_GET['id'];
$sql = "SELECT * FROM job WHERE id = $job_id;";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


$ispaid = $row["paid"];
?>
<html>
<head>
	<script type="text/javascript" src="js/removeCompleteButtons.js"></script>
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
		<link href="main.css" rel="stylesheet">
		<style>
			tr:nth-child(even) {
  				background-color: #D6EEEE;
			}
		</style>
		<title>Winda Ninjas</title>
        <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
<div class="d-grid gap-3">
<button onClick="location.href = 'jobadd.php';" class="btn btn-primary" type="button">Add Job</button>
<button onClick="location.href = 'jobsarea.php' ; " class="btn btn-primary" type="button">Select Zone</button>
<button onclick="location.href = 'profile.php' ; " class="btn btn-warning" type="button">Profile</button>
</div>
<?php echo $ispaid ?>
<?php 
if ($ispaid == 0) {
	echo "<form action=\"testpaid.php\" method=\"get\">
	<input type=\"hidden\" name=\"id\" value=\"$job_id\">
	<input class=\"btn btn-success\" type=\"submit\" name=\"jobpaid_submit\" value=\"JOB PAID\">
	</form>"
}

else {
	echo $ispaid;
}
?>




</body>
</html>
