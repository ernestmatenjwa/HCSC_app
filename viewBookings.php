






<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete records from database using PHP - Coding Birds Online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    
</head>
<body>
<
        <h3>Delete records from database using PHP </h3>
   
</div>
<div class="container">
    <table class="table">
        <thead thead>
        <tr>  
  
        <th>Consulter ID</th>  
        <th>Consulter Name</th>  
        <th>Consulter Surname</th> 
        <th>Contact</th> 
        <th>Help On</th>  
        <th>Book time</th> 
        <th>Delete User</th>  
        </tr>  

        </thead>
        <tbody>
        <?php
        include "config.php";
        include_once "Common.php";
        $common = new Common();
        $records = $common->getAllRecords($link);
        if ($records->num_rows>0){
            $sr = 1;
            while ($record = $records->fetch_object()) {
                $cons_id = $record->cons_Id;
                $cons_name = $record->cons_name;
                $cons_surname = $record->cons_surname;
                $const_contact = $record->const_contact;
                $query = $record->query;
                $created_at = $record->created_at;?>

                <tr>
                     <th><?php echo $cons_id;?></th>
                    <th><?php echo $cons_name;?></th>
                    <th><?php echo $cons_surname;?></th>
                    <th><?php echo $const_contact;?></th>
                    <th><?php echo $query;?></th>
                    <th><?php echo $created_at;?></th>
                    <td><a href="Delete.php?cons_id=<?php echo $cons_id?>" class="btn btn-danger btn-sm">Delete</a> </td>
                </tr>
                <?php
                $sr++;
            }
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
<?php

