<?php
include 'database.php';
// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data using $_POST superglobal
    $name = $_POST['name'];
    $city = $_POST['city'];
    $mobile = $_POST['mobile'];

    //Prepared Connection
    $sql = $conn->prepare("INSERT INTO user(name,city,mobile)VALUES
        (?,?,?)");
    $sql->bind_param("ssi", $name, $city, $mobile);
  
  

    
    //Execute Statement
    if ($sql->execute()) {
        echo "<h3>Saved Successfully </h3>";
        header("Location: index.php");
    } else {
        echo "ERROR: Could not execute" . $sql->error;
    }
    //Close the MySql Connection
    $sql->close();
    mysqli_close($conn);
}
