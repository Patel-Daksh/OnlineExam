<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header_fill.php');
	include_once ($filepath.'/../classes/Exam.php');
	$exam = new exam();
?>
<?php
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   	  $addQuestion = $exam->getAddQuestion2($_POST);
   }
   // Get Total
   $total = $exam->getTotalRows2();
   $next = $total+1;
?>


    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">Add new Questions</h1>
               <?php
              if (isset($addQuestion)) {
                echo $addQuestion;}?>
                <br/>
            </div>


            <div class="col-lg-12">
                <form action="" method="post" name="tbl_ques_fill">
                    <table>
                        <tr>
                            <td>Question No</td>
                            <td> : </td>
                            <td><input class="form-control" readonly type="number" name="quesNo" value="<?php
                                if(isset($next)){
                                    echo $next;
                                }

                                ?>"></td>
                        </tr>
                        <tr>
                            <td>Question</td>
                            <td> : </td>
                            <td><input class="form-control" type="text" name="ques" placeholder="Enter your question" required></td>
                        </tr>
                        <tr>
                            <td>Correct Ans</td>
                            <td> : </td>
                            <td><input class="form-control" type="text" name="CorrectAns" placeholder="Enter Correct ans"required></td>
                        </tr>
                        <tr>
                            <td align="center" colspan="3"><input type="submit" class="btn btn-primary" value="Submit"></td>
                        </tr>
                    </table>
                </form>

            </div>
        </div>
    </div>

<?php include '../inc/footer.php'; ?>
