<?php
include 'connection.php';
 // update data into database
 $id=$_GET['updateid'];
 $sql = "select * from `student` where id = $id";
 $result = mysqli_query($conn,$sql);
 $row=mysqli_fetch_assoc($result);
 $firstname=$row['firstname'];
 $lastname=$row['lastname'];
 $address=$row['address'];
 $email=$row['email'];
 $number=$row['telephone'];
 $sex=$row['sex'];

 if(isset($_POST['submit'])){

 $firstname = mysqli_escape_string( $conn,$_POST["firstname"]);
 $lastname = mysqli_escape_string( $conn,$_POST["lasttname"]);
 $email = mysqli_escape_string( $conn,$_POST["email"]);
 $number = mysqli_escape_string( $conn,$_POST["number"]);
 $address = mysqli_escape_string( $conn,$_POST["address"]);
 $sex = mysqli_escape_string( $conn,$_POST["sex"]);

    $sql = " UPDATE `student` SET id=$id, firstname='$firstname', lastname='$lastname',address='$address', email='$email', telephone='$number' WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if ($result){
      //echo " update successfully";
      header('location:display.php');
    } else {
      die(mysqli_error($conn)) ;
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
     <title>Ambo Global collage Update</title>
  <link rel="shortcut icon" href="logo.png" type="image/x-icon">
  </head>
  <body>
    <marquee>Ambo Global Collage Oline Registration Form</marquee>
   <div class="box" >
   <form method="post">
  <div class="form-group">
    
   First Name:<input type="text"  name="firstname" placeholder="enter first name" autocomplete="off" value=<?php echo $firstname;?> required><br/>
   Last Name:<input type="text"  name="lasttname" placeholder="enter last name" autocomplete="off" value=<?php echo $lastname;?> required><br/>
   Address: <input type="text"  name="address" placeholder="enter yuor address" autocomplete="off" value=<?php echo $address;?> required><br/>
   Gmail: <input type="gmail"  name="email" placeholder="enter gmail" autocomplete="off" value=<?php echo $email;?> required><br/>
   Mobile Number:<input type="text"  name="number" placeholder="enter mobile number" autocomplete="off" value=<?php echo $number;?> required><br/>
  </div>
  Sex: <input type="radio" name="sex" value="female" >female<input type="radio" name="sex" value="male">male <br/><br/><br/>
  <button type="submit" name="submit" style="color:#fff;">update</button>
  <button class="back-btn"> <a href="display.php">Back</a></button>
</form>
   </div>
  </body>
</html>