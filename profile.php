<?php 
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('location: index.html');
	exit;
}
    ?>
<?php include "connectdb.php"; 
	?>
    <html>
        <head><!-- CSS only -->
        <meta charset="utf-8">
        <title>Winda Ninjas</title>
        <link rel="icon" type="image/x-icon" href="favicon.ico">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link href="main.css" rel="stylesheet">
</head>
        <body> 
            
            <div class="d-grid gap-3">
 
 <button onClick="location.href = 'jobadd.php';" class="btn btn-primary" type="button">Add Job</button>
 <button onClick="location.href = 'jobsarea.php' ; " class="btn btn-primary" type="button">Select Zone</button>
 <button onClick="location.href = 'jobs.php' ; " class="btn btn-primary" type="button">All Jobs</button>

 <button onClick="location.href = 'logout.php'; " class="btn btn-danger" type="button">LOGOUT</button>
</div>
 <!--           <div class="btn-group">
  
  <a href="jobadd.php" class="btn btn-info btn-lg" role="button">Add Job</a>
  <a href="jobsarea.php" class="btn btn-info btn-lg" role="button">Select Zone</a>
  <a href="jobs.php" class="btn btn-info btn-lg" role="button">All Jobs</a>
  <br>
  <a href="logout.php" class="btn btn-info" role="button">Logout</a>
  
</div>--> 
<h1>Profile</h1> 
           
            
        </body>
    </html>