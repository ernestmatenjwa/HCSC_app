<?php  
include "config.php";
include_once "Common.php";
if (isset($_GET['cons_id'])){
    $cons_id = $_GET['cons_id'];
    $common = new Common();
    $delete = $common->deleteRecordById($link,$cons_id);
    if ($delete){
        echo '<script>alert("Record deleted successfully !")</script>';
        echo '<script>window.location.href="viewBookings.php";</script>';
    }
}
  
?> 