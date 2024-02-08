<?php
include 'connection.php';
 // Insert data into database
 if(isset($_POST['submit'])){
 $firstname = mysqli_escape_string( $conn,$_POST["firstname"]);
 $lastname = mysqli_escape_string( $conn,$_POST["lasttname"]);
 $address = mysqli_escape_string( $conn,$_POST["address"]);
 $gmail = mysqli_escape_string( $conn,$_POST["gmail"]);
 $number = mysqli_escape_string( $conn,$_POST["number"]);
 $sex = mysqli_escape_string( $conn,$_POST["sex"]);
 $sql = "INSERT INTO  student (firstname,lastname,address, email , telephone,sex) 
 VALUES ( '$firstname' , '$lastname ','$address' ,'$gmail ', '$number','$sex'	)";
 if (mysqli_query($conn,$sql)) {
   //echo " created successfully";
   header('location:display.php');
 } else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
 mysqli_close($conn);
 }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="crud.css">
    <title>Ambo Global collage Registration</title>
  <link rel="shortcut icon" href="logo.png" type="image/x-icon">
  </head>
  <body>
  <marquee>Ambo Global Collage Oline Registration Form</marquee>
   <div class="box" >
   <form method ="post" action="user.php">
  <div class="form-group">
  <br/>
   <input type="text" class="form-control" name="firstname" placeholder="enter your first name " autocomplete="off"required><br/>
  <input type="text" class="form-control" name="lasttname" placeholder="enter your last name" autocomplete="off"required><br/>
 <input type="text" class="form-control" name="address" placeholder="enter your address" autocomplete="off"required><br/>
  <input type="gmail" class="form-control" name="gmail" placeholder="enter your gmail" autocomplete="off"required><br/>
  <input type="text" class="form-control" name="number" placeholder="enter your mobile number" autocomplete="off"required><br/>
  </div>
  Sex:<input type="radio" name="sex" value="female" >female<input type="radio" name="sex" value="male">male <br/>
  <button type="submit" class="btn-submit" name="submit">Submit</button>
  <button class="back-btn"> <a href="Home.html">Back</a></button>
</form>
   </div>
  </body>
</html>