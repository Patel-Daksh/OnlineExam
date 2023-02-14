<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'../inc/header.php');
?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">Welcome to Exam Control Panel - Admin</h1>
                <h2>You can manage your users and online exam system to add questions.</h2>
                <br/>
                <br/>

                <div class="jumbotron">
                    <h1>Controls</h1>
                    <br/>
                    <br/>
                    <pre>      <a class="btn btn-outline-dark btn-lg" href="users.php"><span class="fa fa-user-circle"></span> User List</a>          <a class="btn btn-outline-success btn-lg" href="quesadd.php"><span class="fa fa-question-circle"></span> Add MCQ</a>          <a class="btn btn-outline-success btn-lg" href="quetf.php"><span class="fa fa-question-circle"></span> Add T/F Que.</a>          <a class="btn btn-outline-success btn-lg" href="quesfill.php"><span class="fa fa-question-circle"></span> Add Fill Up</a></pre>
                    <pre><a class="btn btn-outline-primary btn-lg" href="queslist.php"><span class="fa fa-list"></span> MCQ List</a>          <a class="btn btn-outline-primary btn-lg" href="questflist.php"><span class="fa fa-list"></span> T/F List</a>         <a class="btn btn-outline-primary btn-lg" href="quesfilllist.php"><span class="fa fa-list"></span> Fill Up List</a>          <a class="btn btn-outline-danger btn-lg" href="?action=logout"><span class="fa fa-sign-out"></span> Logout</a></pre>
                </div>

            </div>
        </div>
    </div>
<?php include '../inc/footer.php'; ?>
