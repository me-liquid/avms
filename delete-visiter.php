 <?php
// session_start();
// error_reporting(0);
include('includes/dbconnection.php');
// if (strlen($_SESSION['avmsaid']==0)) {
//   header('location:logout.php');
//   } else{
//     if(isset($_POST['submit']))
//   {

// $eid=$_GET['editid'];
 
// $remark=$_POST['remark'];
//  $query=mysqli_query($con,"update tblvisitor set remark='$remark' where  ID='$eid'");
 

//     if ($query) {
//     $msg="Visitors Remark has been Updated.";
//   }
//   else
//     {
//       $msg="Something Went Wrong. Please try again";
//     }

  
// }


 $did=$_GET['deleteid'];
echo $did;

//$sql = " CALL `delete_id`($did)";

$sql = "DELETE FROM tblvisitor WHERE ID=$did";

if (mysqli_query($con, $sql)) {
  // echo "Record deleted successfully";
	header("Location: manage-newvisitors.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}


 ?>