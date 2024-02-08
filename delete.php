<?php
  // Connect to database
 include 'connection.php';
  // Delete data from database
  if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
  }
  

  $sql = "DELETE FROM student WHERE id=$id";
  $result = mysqli_query($conn,$sql);

  if ($result) {
    //echo "User deleted successfully";
    header('location:display.php');
  } else {
    echo "Error deleting user: " . mysqli_error($conn);
  }

  mysqli_close($conn);
?>
