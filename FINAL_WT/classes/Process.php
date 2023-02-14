<?php

$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/Session.php');
include_once ($filepath.'/../lib/Database.php');
include_once ($filepath.'/../helpers/Format.php');

class Process{
	private $db;
	private $fm;
	public $i = 0;
    //public $count=0;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
   public function getProcessData($data){
     $selectAns        = $this->fm->validation($data['ans']);
     $quesnumber = $this->fm->validation($data['quesnumber']);
     $selectAns        = mysqli_real_escape_string($this->db->link, $selectAns);
     $quesnumber = mysqli_real_escape_string($this->db->link, $quesnumber);
     $next       = $quesnumber+1;
		
     if (!isset($_SESSION['score'])) {
     	 $_SESSION['score'] = '0';
		 //$this->count=0;
     }
      $count1 = $this->count;
     $total = $this->getTotal();
     $right = $this->rightAns($quesnumber);
     if ($right == $selectAns) {
		$_SESSION['score']++;
		/*if($this->count==1)
		{
			$_SESSION['score']--;
		}*/
			
		
     }
     if ($quesnumber == $total) {
     	header("Location:final.php");
     	exit();
     }else{
     	header("Location:test.php?q=".$next);
     }
   }
   public function fixscore()
   {  $this->i++;
	  $_SESSION['score']--; 
	 // $_SESSION['score'] = $_SESSION['score'] + 2*$this->i;
	  
   }
   private function getTotal(){
   	$query = "SELECT * FROM tbl_ques";
   	$result = $this->db->select($query);
   	$resultData = $result->num_rows;
   	return $resultData;
   }
   private function rightAns($quesnumber){
   	$query = "SELECT * FROM tbl_ans WHERE quesNo = '$quesnumber' AND rightAns = '1'";
   	$result = $this->db->select($query)->fetch_assoc();
   	$rightar = $result['id'];
   	return $rightar;

   }

	 public function getProcessData1($data){
     $selectAns        = $this->fm->validation($data['ans']);
     $quesnumber = $this->fm->validation($data['quesnumber']);
     $selectAns        = mysqli_real_escape_string($this->db->link, $selectAns);
     $quesnumber = mysqli_real_escape_string($this->db->link, $quesnumber);
     $next       = $quesnumber+1;

     if (!isset($_SESSION['score'])) {
     	 $_SESSION['score'] = '0';
     }

     $total = $this->getTotal1();
     $right = $this->rightAns1($quesnumber);
     if ($right == $selectAns) {
     	$_SESSION['score']++;
     }
     if ($quesnumber == $total) {
     	header("Location:final1.php");
     	exit();
     }else{
     	header("Location:test1.php?q=".$next);
     }
   }
   private function getTotal1(){
   	$query = "SELECT * FROM tbl_ques_tf";
   	$result = $this->db->select($query);
   	$resultData = $result->num_rows;
   	return $resultData;
   }
   private function rightAns1($quesnumber){
   	$query = "SELECT * FROM tbl_ans_tf WHERE quesNo = '$quesnumber' ";
   	$result = $this->db->select($query)->fetch_assoc();
   	$rightar = $result['id'];
   	return $rightar;

   }


    public function getProcessData2($data){
     $CorrectAns        = $this->fm->validation($data['CorrectAns']);
     $quesnumber = $this->fm->validation($data['quesNo']);
     $CorrectAns        = mysqli_real_escape_string($this->db->link, $CorrectAns);
     $quesnumber = mysqli_real_escape_string($this->db->link, $quesnumber);
     $next       = $quesnumber+1;

     if (!isset($_SESSION['score'])) {
       $_SESSION['score'] = '0';
     }

     $total = $this->getTotal2();

		 $query = "SELECT * FROM tbl_ques_fill WHERE CorrectAns = '$CorrectAns' AND quesNo = '$quesnumber'";
		 $result = $this->db->select($query);
		 if ($result != false) {
      $_SESSION['score']++;
     }


     if ($quesnumber == $total) {
      header("Location:final2.php");
      exit();
     }else{
      header("Location:test2.php?q=".$next);
     }
   }
   private function getTotal2(){
    $query = "SELECT * FROM tbl_ques_fill";
    $result = $this->db->select($query);
    $resultData = $result->num_rows;
    return $resultData;
   }
  }
?>
