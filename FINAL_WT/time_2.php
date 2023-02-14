<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	include_once ($filepath.'/../classes/Exam.php');
	$exam = new Exam();
?>


    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">Question List</h1>
                <br/>
            </div>


            <div class="col-lg-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th width="10%"> Que No</th>
                        <th width="70%">Question</th>
                        <th width="20%">Time Taken(in seconds)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $questionData = $exam->getqueData1();

                    if ($questionData) {
                        $i = 0;
                        while ($result = $questionData->fetch_assoc()) {
                            $i++;
                            $timetaken = $exam->gettime();
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $result['ques']; ?></td>
                                <td><?php echo $timetaken ; ?>
                                </td>
                            </tr>
                        <?php } } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

<?php include 'inc/footer.php';?>
