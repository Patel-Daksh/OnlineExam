<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header_tf.php');
	include_once ($filepath.'/../classes/Exam.php');
	$exam = new exam();
?>


    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                
                <h1 class="mt-5">Result</h1>
                <br/>
            </div>


            <div class="col-lg-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th width="25%">Enroll no</th>
                        <th width="25%">MCQ</th>
                        <th width="25%">TF</th>
						<th width="25%">Fill</th>
						
                    </tr>
                    </thead>
					<tbody>
                    <?php
                    $result = $exam->getfinalresult();
                    if ($result) {
                        $i = 0;
                        while ($result1 = $result->fetch_assoc()) {
                            $i++;

					?>
					<tr>
                        <td><?php echo $result1['rollno']; ?></td>
                        <td><?php echo $result1['marks_mcq']; ?></td>
						<td><?php echo $result1['marks_tf']; ?></td>
						<td><?php echo $result1['marks_fill']; ?></td>
						
                        
                        </td>
                        </tr>
						 <?php } } ?>
					</tbody>
				</table>	
	        </div>	
         </div>
    </div>		
<?php include '../inc/footer.php'; ?>	