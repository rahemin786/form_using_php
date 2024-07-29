<?php

include './navbar.php';


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<h1>Registration Form</h1>
<br>
<form action="form.php" method="POST">
    <label for="name">Enter name</label><br>
    <input type="text" id="name" name="name"><br>
    
    <label for="city">Enter city</label><br>
    <input type="text" id="city" name="city"><br>
    
    <label for="mobile">Mobile</label><br>
    <input type="number" id="mobile" name="mobile"><br><br>
    
    <input type="submit" value="Submit">
</form>

<h2>list of users</h2>

<ul>
<?php
 include 'read.php' ?>

</ul>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>