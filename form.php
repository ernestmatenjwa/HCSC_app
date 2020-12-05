<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form survey</title>

    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">

</head>

<body>


    </div>
    <div class="form__desc">
        <h2>Fill in personal details to book time slot</h2>
        <hr> </div>

    <form class="form" action="form.php" method="POST" name="form">

        <div class="form_item">
            <label for="firstname" class="form__label"> first name </label>
            <input class="form__input" type="text" name="firstname" id="firstname" placeholder="enter your firstname" title="fist name must not be empty and least 3 char long" pattern="\S{2,}" required>
       
            <label for="lastname" class="form__label"> Last name </label>
            <input class="form__input " type="text" name="lastname" id="lastname" placeholder="enter your last name" required title="lastname must not be empty and least 3 char long" pattern="\S?{3,}">
        
            <label for="contact" class="form__label"> Contact   </label> 
            <input class="form__input" type="tel" name="contact" id="contact" placeholder="Enter contact" pattern="[0-9]{10}"  title="Ten digits code Eg : 081 252 2724" required/>    
            
            <label for="query" class="form__label"> Query </label>
            <input class="form__input" type="text" name="query" id="query" placeholder="Enter query" title="Query must not be empty/ have spaces and least 3 char long" pattern="\S{2,}" required>
        </div>
        <div class="btn input"><input type="submit" name="submit" value="Submit" id="submit"></div>
        <div class="btn input"><input onclick="window.location.href='index.html'" type="cancel" name="cancel" value="Cancel/Home" id="cancel"></div>
        <footer class="footer"> @Health Care Service Centre</footer>
    </form>

</body>

</html>
<?php

// to store user details 

if (!empty($_POST['firstname'])) {
    
    $firstname = $_POST['firstname'];
    
}

if (!empty($_POST['lastname'])) {
    
    $lastname = $_POST['lastname'];
    
}

if (!empty($_POST['contact'])) {
    
    $contact = $_POST['contact'];
   
}

if (!empty($_POST['query'])) {
    
    $query = $_POST['query'];
    
}

?>

<?php


$server = "localhost";
$username = "root";
$password = "password";

@$conn = new mysqli($server, $username, '', 'health');

if (mysqli_connect_errno()) {

    echo "<p>Error: Could not connect to database.<br/>
    Please try again later.</p>";
    exit;
}

$sql = "INSERT INTO consulter(cons_name, cons_surname, const_contact, query) 
                 VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param('ssss', $firstname, $lastname, $contact, $query);
$stmt->execute();

if ($stmt->affected_rows>0) {
    #"<p>row inserted into the database.</p>";
   echo "<script>
   alert('$lastname, You have succesfully booked a slot, we will call you shortly we locating time for your request');
   </script>";
  // echo"<script>window.open('index.html','_self')</script>"; 

} else {
    echo "<p>An error has occurred.<br/>
            The item was not added.</p>";
}
$conn->close();
?>

 


