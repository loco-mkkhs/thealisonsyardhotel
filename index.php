<?php
require_once('logics/dbconnection.php');
// counting total number of students
$queryEnrolledStudents = mysqli_query($conn, "SELECT * FROM registrationdetails");
$countallstudents = mysqli_num_rows($queryEnrolledStudents);

// count by gender
$queryenrolledfemale = mysqli_query($conn, "SELECT * FROM registrationdetails WHERE gender = 'female'");
$countallfemales= mysqli_num_rows($queryenrolledfemale);
?>

<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php')?>	

<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php')?>
	
	<div class="sidebar">
		<?php require_once('includes/sidebar.php')?>
	</div>
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Top content</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center shadow">
						<span>Students</span>
					</div>
					<div class="card-body">
						<span><li class="fa fa-group fa-3x"></li></span>
						<span class="float-right badge bg-dark rounded-pill text-white"><?php echo $countallstudents?></span>
					</div>
					<div class="card-footer"></div>
				</div><div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center shadow">
						<span>Available Courses</span>
					</div>
					<div class="card-body">
						<span><li class="fa fa-folder-open fa-3x"></li></span>
						<span class="float-right">00</span>
					</div>
					<div class="card-footer"></div>
				</div><div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Campuses</span>
					</div>
					<div class="card-body">
						<span><li class="fa fa-graduation-cap fa-3x"></li></span>
						<span class="float-right">00</span>
					</div>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Users</span>
					</div>
					<div class="card-body">
						<span><li class="fa fa-user fa-3x"></li></span>
						<span class="float-right">00</span>
					</div>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Student Analysis</span>
					</div>
					<div class="body shadow">
						<span><i class="fa fa-line-chart fa-3x"> </i></span>
					</div>
				</div>					
			</div>
			

		</div>
		
	</div>
	
	<?php require_once('includes/scripts.php')?>
	
</body>
</html>