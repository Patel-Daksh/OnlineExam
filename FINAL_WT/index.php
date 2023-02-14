<?php include 'inc/header.php'; ?>
<?php
  Session::checkLogin();
?>


	<div class="container">
		<div class="row">
        	<div class="col-lg-12 text-center">
				<br></br>
				<h1 style="color:#2C5A85;"><b>Arrange your exams</b></h1><br>
                <p class="lead" style="color:#000000;">We use latest advancements in information technology and provide a central web solution for automating some basic examination</p>
            	<p class="lead" style="color:#000000;" >This will help stakeholders of college,institute or school to quickly do examination online.</p>
				<img src="img/test.png"/>

			</div>
			<br></br>
			<pre>                                        <a class="btn btn-outline-primary btn-lg" href="admin/login.php">Educator</a>                                    <a class="btn btn-outline-primary btn-lg" href="student.php">Student</a></pre>
		</div>
	</div>






<?php include 'inc/footer.php'; ?>
