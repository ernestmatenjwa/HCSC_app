<?php
class Common
{
    public function getAllRecords($link) {
        $query = "SELECT * FROM consulter";
        $result = $link->query($query) or die("Error in query1".$link->error);
        return $result;
    }

    public function deleteRecordById($link,$cons_id) {
        $query = "DELETE FROM consulter WHERE cons_Id ='$cons_id'";
        $result = $link->query($query) or die("Error in query2".$link->error);
        return $result;
    }
}
?>