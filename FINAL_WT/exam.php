<?php include 'inc/header.php'; ?>
<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/classes/User.php');
$usr = new User();
?>
<?php
  Session::checkSession();
?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">You can start your exam</h1>
				<?php $resultrollno = $usr->getresultrollno();
				 echo $resultrollno;
				?>
				
                <p class="lead">Take your time. Click Start Exam when you are ready.</p>
                <img src="img/takeTest.png" height="200" width="200"/>
                <br/>
                <br/>

                <a href="starttest.php" class="btn btn-outline-primary">
                    <span class="fa fa-arrow-right"></span> MCQ
                </a>
                <a href="starttest1.php" class="btn btn-outline-primary">
                    <span class="fa fa-arrow-right"></span> T/F
                </a>
                <a href="starttest2.php" class="btn btn-outline-primary">
                    <span class="fa fa-arrow-right"></span> Fill Up
                </a>

                <br/>
                <br/>
            </div>
        </div>
    </div>

<?php include 'inc/footer.php'; ?>
