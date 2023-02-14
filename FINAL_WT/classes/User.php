<?php

$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/Database.php');
include_once ($filepath.'/../lib/Session.php');
include_once ($filepath.'/../helpers/Format.php');

class User{
	private $db;
	private $fm;
    private $resultrollno;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}

	public function userRegistion($name,$userName,$password,$rollno){
      $name     = $this->fm->validation($name);
      $userName = $this->fm->validation($userName);
      $password = $this->fm->validation($password);
      $rollno   = $this->fm->validation($rollno);

      $name     = mysqli_real_escape_string($this->db->link, $name);
      $userName = mysqli_real_escape_string($this->db->link, $userName);
      $password = mysqli_real_escape_string($this->db->link, $password);
      $rollno    = mysqli_real_escape_string($this->db->link, $rollno);

      if ($name == "" || $userName == "" || $password == "" || $rollno == "") {
         echo "<div class=\"alert alert-danger alert-dismissible\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    <strong>Fields must not be Empty</strong>
  </div>";
          exit();
      }elseif (filter_var($rollno, FILTER_VALIDATE_INT) === false) {
         echo "<div class=\"alert alert-danger alert-dismissible\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    <strong>Invalid rollno .</strong></div>";
          exit();
      }else{
         $chkquery = "SELECT * FROM tbl_user WHERE rollno = '$rollno'";
         $chkresult = $this->db->select($chkquery);
         if ($chkresult != false) {
            echo "<div class=\"alert alert-danger alert-dismissible\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    <strong>Enrollment already exists. Try with different no.</strong></div>";
          exit();
         }else{
            $query = "INSERT INTO tbl_user(name, userName, password, rollno) VALUES('$name','$userName', MD5('".$password."'),'$rollno')";
            $insertr = $this->db->insert($query);
            if ($insertr) {
               echo "<div class=\"alert alert-success alert-dismissible fade show\">Registration Successful. Please login.</div>";
               exit();
            }else{
               echo "<div class=\"alert alert-danger alert-dismissible\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    <strong>Something happened. Registration Unsucessful.</strong></div>";
               exit();
            }
         }
      }


	}

   public function userLogin($rollno, $password){
      $rollno    = $this->fm->validation($rollno);
      $password = $this->fm->validation($password);
      $rollno    = mysqli_real_escape_string($this->db->link, $rollno);
      if ($rollno == "" || $password == "") {
         echo "empty";
          exit();
      }else{
        $password = mysqli_real_escape_string($this->db->link, $password);
         $query = "SELECT * FROM tbl_user WHERE rollno = '$rollno' AND password = MD5('".$password."')";
         $result = $this->db->select($query);
         if ($result != false) {
            $value = $result->fetch_assoc();
            if ($value['status'] == '1') {
               echo "disable";
               exit();
            }else{
               Session::init();
               Session::set("login", true);
               Session::set("userId", $value['userId']);
               Session::set("userName", $value['userName']);
               Session::set("name", $value['name']);
            }
         }else{
            echo "error";
            exit();
         }
      }
	  //this->fm = $rollno;
   }
   
   public function getresultrollno()
   {
	   //return this->$resultrollno;
   }
    
   public function getUserPData($userId, $data){
      $name     = $this->fm->validation($data['name']);
      $userName = $this->fm->validation($data['userName']);
      $rollno    = $this->fm->validation($data['rollno']);
      $name     = mysqli_real_escape_string($this->db->link, $name);
      $userName = mysqli_real_escape_string($this->db->link, $userName);
      $rollno    = mysqli_real_escape_string($this->db->link, $rollno);
             $query = "UPDATE tbl_user
                SET
                name     = '$name',
                userName = '$userName',
                rollno    = '$rollno' WHERE
                userId   = '$userId'";
         $result = $this->db->update($query);
         if ($result) {
            $msg = "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
  <strong>All right!</strong> Data updated successfully
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>";
         return $msg;
         }else{
            $msg =  "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
  <strong>Oh shoot!</strong> Data was NOT updated.
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>";
            return $msg;
         }
      }

      public function getUserData(){
        $query  = "SELECT * FROM tbl_user ORDER BY userId DESC";
        $result = $this->db->select($query);
        return $result;
      }

      public function  disableUser($userId){
            $update = "UPDATE tbl_user SET status = '1' WHERE userId = '$userId'";
            $result = $this->db->update($update);
            if ($result) {
                  $msg = "<span class='success'>Data Disable Successfuly!</span>";
               return $msg;
            }else{
                  $msg = "<span class='error'>Data Not Disable! </span>";
                  return $msg;
            }

      }

      public function enaUser($userId){
            $update = "UPDATE tbl_user SET status = '0' WHERE userId = '$userId'";
            $result = $this->db->update($update);
            if ($result) {
                  $msg = "<span class='success'>Data Enable Successfuly!</span>";
               return $msg;
            }else{
                  $msg = "<span class='error'>Data Not Enable! </span>";
                  return $msg;
            }
      }

      public function delUser($userId){
            $delete = "DELETE FROM tbl_user WHERE userId = '$userId'";
            $result = $this->db->delete($delete);
            if ($result) {
                  $msg = "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
  <strong>All right!</strong> Data was deleted successfully
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>";
                  return $msg;
            }else{
                  $msg = "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
  <strong>All right!</strong> Data was not deleted
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>";
                  return $msg;
            }
      }


      public function getUserProfile($userId){
         $query = "SELECT * FROM tbl_user WHERE userId = '$userId'";
         $result = $this->db->select($query);
         return $result;
      }
 }
