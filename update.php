 <?php
include('includes/dbconnection.php');

 $eid=$_GET['eid'];
// echo $eid;


    if (isset($_POST['submit1'])) {
        // echo $eid;
        $VisitorName=$_POST['VisitorName'];
        $MobileNumber=$_POST['MobileNumber'];
        $Address=$_POST['Address'];
        $Apartment=$_POST['Apartment'];
        $Floor=$_POST['Floor'];
        $WhomtoMeet=$_POST['WhomtoMeet'];
        $ReasontoMeet=$_POST['ReasontoMeet'];
        $EnterDate=$_POST['EnterDate'];
        $remark=$_POST['remark'];
        date_default_timezone_set('Asia/Kolkata');
// echo date('d-m-Y H:i');
        $outtime=date('d-m-Y H:i');

        $sql = "UPDATE `tblvisitor` SET 
           `VisitorName` = '$VisitorName', 
           `MobileNumber` = '$MobileNumber', 
           `Address` = '$Address', 
           `Apartment` = '$Apartment', 
           `Floor` = '$Floor',
           `WhomtoMeet` = '$WhomtoMeet',
           `ReasontoMeet` = '$ReasontoMeet',
           `EnterDate` = '$EnterDate',
           `remark` = '$remark'
           
        where `ID` = '$eid'  ";

        if (mysqli_query($con, $sql)) {
            // echo "Record deleted successfully";
            header("Location: manage-newvisitors.php");
          } else {
            echo "Error deleting record: " . mysqli_error($con);
          }
    }




    elseif (isset($_POST['submit2'])) {
        // echo $eid;
        $VisitorName=$_POST['VisitorName'];
        $MobileNumber=$_POST['MobileNumber'];
        $Address=$_POST['Address'];
        $Apartment=$_POST['Apartment'];
        $Floor=$_POST['Floor'];
        $WhomtoMeet=$_POST['WhomtoMeet'];
        $ReasontoMeet=$_POST['ReasontoMeet'];
        $EnterDate=$_POST['EnterDate'];
        $remark=$_POST['remark'];
        $outtime=$_POST['outtime'];

        $sql = "UPDATE `tblvisitor` SET 
           `VisitorName` = '$VisitorName', 
           `MobileNumber` = '$MobileNumber', 
           `Address` = '$Address', 
           `Apartment` = '$Apartment', 
           `Floor` = '$Floor',
           `WhomtoMeet` = '$WhomtoMeet',
           `ReasontoMeet` = '$ReasontoMeet',
           `remark` = '$remark',
           `outtime` = '$outtime'
           
        where `ID` = '$eid'  ";

        if (mysqli_query($con, $sql)) {
            // echo "Record deleted successfully";
            header("Location: manage-newvisitors.php");
          } else {
            echo "Error deleting record: " . mysqli_error($conn);
          }
    }

?>