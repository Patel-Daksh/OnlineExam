<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header_fill.php');
	include_once ($filepath.'/../classes/Exam.php');
	$exam = new exam();
?>
<?php
  if (isset($_GET['delque'])) {
    $quesNo1 = (int)$_GET['delque'];
    $delresult1 = $exam->getdelresult2($quesNo1);
  }
?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <?php
                if (isset($delresult1)) {
                    echo $delresult1;
                }
                ?>
                <h1 class="mt-5">Question List</h1>
                <br/>
            </div>


            <div class="col-lg-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th width="10%">NO</th>
                        <th width="70%">Question</th>
                        <th width="20%">ACTION</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $questionData1 = $exam->getqueData2();
                    if ($questionData1) {
                        $i = 0;
                        while ($result1 = $questionData1->fetch_assoc()) {
                            $i++;

                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $result1['ques']; ?></td>
                                <td><a onclick="return confirm('Are you sure to Delete.')" href="?delque=<?php echo $result1['quesNo']; ?>">Remove</a>
                                </td>
                            </tr>
                        <?php } } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

<?php include '../inc/footer.php'; ?>
