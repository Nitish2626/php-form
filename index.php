<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback-Form</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    
    <form action="index.php" method="post" onsubmit="submit()">
        
        <div id="heading">
            <img src="feedback-image.webp" id="feedback-image">
            <h2>Feedback Form</h2>
        </div>

        <div class="container">
            <img src="user-icon.png" class="user-icon">
            <input type="text" class="input-fields" name="firstname" placeholder="First Name" required>
        </div>

        <div class="container">
            <img src="user-icon.png" class="user-icon">
            <input type="text" class="input-fields" name="lastname" placeholder="Last Name" required>
        </div>

        <div class="container">
            <img src="phone-icon.png" class="user-icon">
            <input type="tel" class="input-fields" name="phone" placeholder="Phone (xxxxxxxxxx)" pattern="[0-9]{10}" maxlength="10" required>
        </div>

        <div class="container">
            <img src="email-icon.png" class="user-icon">
            <input type="email" class="input-fields" name="email" placeholder="Email" required>
        </div>

        <div class="container">
            <img src="description-icon.png" class="user-icon">
            <textarea class="input-fields" name="description" rows="3" placeholder="Write Something" required></textarea>
        </div>

        <button type="submit" id="submit-button" value="Submit">Submit</button>
    </form>

</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    
    $servername="localhost";
    $username="id20787242_nitish";
    $password="Nit123*456";

    $conn=mysqli_connect($servername,$username,$password);

    if(!$conn){
        // die("Disconnected".mysqli_connect_error());
    }
    else{
        // echo "Database connected";
    }

    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $description=$_POST['description'];

    $sql="INSERT INTO `id20787242_feed`.`info` (`First-Name`, `Last-Name`, `Phone`, `Email`, `Description`, `Date-Time`) VALUES ( '$firstname', '$lastname', '$phone', '$email', '$description', current_timestamp())";

    if($conn->query($sql)==true){
        // echo "Successfully inserted";
    }
    else{
        // echo "Error : $sql <br> $conn->error";
    }

    $conn->close();
}
?>