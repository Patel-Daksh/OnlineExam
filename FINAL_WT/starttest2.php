<?php include 'inc/header.php'; ?>
<?php
  Session::checkSession();
  $question = $exam->getQuestion2();
  $total    = $exam->getTotalRows2();
?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">Welcome to Online Exam</h1>
                <p class="lead">Test Your Knowledge</p>
                <br/>

                <p>Number Of Question: </strong><?php echo $total; ?></p>
                <p></p><strong>Question Type: </strong>Fill Up</p>

                <a href="test2.php?q=<?php echo $question['quesNo']; ?>" class="btn btn-outline-primary">
                    <span class="fa fa-arrow-right"></span> Start Exam
                </a>

                <br/>
                <br/>
            </div>
        </div>
    </div>

<?php include 'inc/footer.php'; ?>