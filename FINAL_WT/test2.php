<?php include 'inc/header.php'; ?>
<?php
 Session::checkSession();
 if (isset($_GET['q'])) {
 	$quesnumber = (int) $_GET['q'];
 }else{
 	header("Location:exam.php");
 }
 $total    = $exam->getTotalRows2();
 $question = $exam->getQuestionNumber2($quesnumber);

?>
<?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 	$process = $pro->getProcessData2($_POST);
 }


?>
<script>
var timetaken;
timetaken=60;</script>
<html>
<body>
<div id="countdown"></div>
<div id="notifier"></div>
<script type="text/javascript">
(function () {
  function display( notifier, str ) {
    document.getElementById(notifier).innerHTML = str;
  }

  function toMinuteAndSecond( x ) {
    return Math.floor(x/60) + ":" + (x=x%60 < 10 ? 0 : x);
  }

  function setTimer( remain, actions ) {
    var action;
    (function countdown() {
       display("countdown", toMinuteAndSecond(remain));
       if (action = actions[remain]) {
         action();
       }
       if (remain > 0) {
         remain -= 1;
		 timetaken=remain;
		 timetaken = 60 - timetaken;
		//document.write(taken);
         setTimeout(arguments.callee, 1000);
       }
    })(); // End countdown
  }

  setTimer(60, {
    10: function () { display("notifier", "Just 10 seconds to go"); },
     5: function () { display("notifier", "5 seconds left");        },
     0: function () { display("notifier", "Time is up baby");       }
  });
})();

</script>
</body>
</html>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">Question <?php echo $question['quesNo']." of ". $total; ?></h1>
                <br/>
                <br/>
            </div>
            <div class="col-lg-12">
                <form action="" method="post"  >
                    <table>
                        <tr>
                            <td colspan="2">
                                <h3>Que <?php echo $question['quesNo']." : ".$question['ques']; ?></h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="text" name="CorrectAns" class="form-check-input" placeholder="Enter your Ans">" />
                                    </label>
                                </div>

<!--                                        <input type="radio" name="ans" value="--><?php //echo $result['id']; ?><!--" />--><?php //echo $result['ans']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br/>
								<script>
								 function previous()
								 {
								     if(<?php echo $question['quesNo']; ?> >1)
									 {
									 window.location.href = "test2.php?q=<?php echo $question['quesNo']-1; ?>";
									 <?php //$pro->fixscore();
                                    //  $_SESSION['score']--;
									  ?>
									 }
									 else
									 {
										alert("Can not go back");
									 }

								 }

								</script>
								
								<?php
                                if(($question['quesNo']+1)<=$total)
                                {
                                ?>
                                  <script>
                                  setTimeout(function()
                                  {
                                      window.location.href = "test.php?q=<?php echo $question['quesNo']+1; ?>";
                                    }, 60000);
                                    </script>
                                    <input type="button" class="btn btn-outline-primary" onclick = previous() value="previous Question" />
                                <input type="submit" name="submit" class="btn btn-outline-primary" value="Next Question" />
                                    <?php
                                }
                                ?>
                                <?php
                                if(($question['quesNo'])==$total)
                                {
                                    ?>
                                    <script>
                                    setTimeout(function()
                                    {
                                      window.location.href = "final.php";
                                    }, 60000);
                                    
                                    </script>
                                    <input type="button" class="btn btn-outline-primary" onclick = previous() value="previous Question" />
                                <input type="submit" name="submit" class="btn btn-outline-success" value="Submit" />

                                    <?php
                                }
                                ?>
                                <input type="hidden" name="quesNo"
                                       value="<?php echo $quesnumber; ?>" />
                            </td>
                        </tr>

                    </table>
                </form>
                <br/>
                <br/>
            </div>
        </div>
    </div>

<?php include 'inc/footer.php'; ?>
