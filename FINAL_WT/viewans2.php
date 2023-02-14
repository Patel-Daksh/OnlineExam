<?php include 'inc/header.php'; ?>
<?php
 Session::checkSession();
$total    = $exam->getTotalRows2();
?>


<div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">All Question & Answer - Total <?php echo $total; ?> Questions</h1>
                <br/>
                <br/></div>

                <div class="col-lg-12">
                <table>
                    <?php
                    $getQues = $exam->getqueData2();
                    if ($getQues) {
                        while ($question = $getQues->fetch_assoc()) {
                            ?>
                            <tr>
                                <td colspan="2">
                                    <h5>Que <?php echo $question['quesNo']." : ".$question['ques']; ?></h5>
                                </td>
                            </tr>
                            <?php
                            $quesnumber = $question['quesNo'];
                            $answer = $exam->getAnswer2($quesnumber);
                            if ($answer) {
                                while ($result = $answer->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php
                                                echo " Answer :<span style='color:green;font-weight: bold;'>".$result['CorrectAns']." </span>";
                                            ?>
                                        </td>
                                    </tr>
                                <?php } } ?>
                        <?php } } ?>
                </table>


                <a href="starttest2.php" class="btn btn-success btn-lg">
                    <span class="fa fa-arrow-right"></span>  Exam Again
                </a>
                <a href="time_3.php" class="btn btn-success btn-lg">
                    <span class="fa fa-arrow-right"></span> Time Analysis
                </a>
                <br/>
                <br/>
                </div>
            </div>
        </div>
    </div>
<?php include 'inc/footer.php'; ?>
