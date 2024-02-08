<?php include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Ambo Global College display</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="crud.css">
</head>
<body>
    <div class="container">
        
        <table >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Address</th>
      <th scope="col">Gmail</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Sex</th>
      <th scope="col" colspan="2">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
  $sql = "select * from `student`";
  $result = mysqli_query($conn,$sql);
  if($result){
    
    while( $row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $address = $row['address'];
        $gmail = $row['email'];
        $number = $row['telephone'];
        $sex = $row['sex'];

        
        echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$firstname.'</td>
      <td>'.$lastname.'</td>
      <td>'.$address.'</td>
      <td>'.$gmail.'</td>
      <td>'.$number.'</td>
      <td>'.$sex.'</td>
      <td><button> <a href="update.php? updateid='.$id.'"> update</a></button></td>
      <td><button> <a href="delete.php?
      deleteid='.$id.'" >delete</a></button></td>
    </tr>';
    }
  }
  ?>
  </tbody>
</table>
<button > <a href="user.php">Add user</a></button>
<button><a href="Home.html">Logout</a></button>
    </div>
    
</body>
</html>