<?php
$err ="";
$conn= mysqli_connect("localhost","root","","login");
if(isset($_POST['LOGIN'])){
  $fname = mysqli_real_escape_string($conn, $_POST['fname']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
$sql="SELECT * FROM users WHERE firstname='".$fname."' AND password='".$password."' limit 1";
$result = mysqli_query($conn,$sql);
if (empty($fname)) {
  $err= "Username is required";
}
else if (empty($password)) {
  $err="Password is required";
}
else if(mysqli_num_rows($result)==1){
  header('location: display.php');	
}else{
  $err="Dogogortaniittuum";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Ambo Global collage Login System</title>
  <link rel="shortcut icon" href="logo.png" type="image/x-icon">
<style>
  body{
  margin: 0;
  padding: 0;
  background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(bb.jpg);
  background-size: cover;
  height: 100vh;
  font-family: sans-serif;
}
.box{
  height: 260px;
  width: 250px;
  background-color: rgba(2, 0, 5, 0.905);
  opacity: 80%;
  position: absolute;
  color: #fff;
  transform: translate(-50%, -50%);
  left: 50%;
  top: 50%;
  padding: 30px 30px;
  border-radius: 30px;

}
h1{
  margin: 0;
  padding: 0 0 20px;
  text-align: center;
  font-size: 25px;
}
.err{
  color: #fa0909;
}
.box input{
  width: 100%;
  margin-bottom: 20px;
  color: #fff;
}
.box input[type="text"],input[type="password"]{
  border: none;
  border-bottom: 1px solid #fff;
  background-color: transparent;
  outline: none;
  height: 40px;
  columns: #fff;
  font-size: 15px; 
  
}
.box input[type="submit"]{
border: none;
outline: none;
height: 40px;
background-color: #81bdee;
color: #fff;
font-size: 18px;
border-radius: 20px;
}
.box input[type="submit"]:hover{
  cursor: pointer;
  background-color: #ffc107;
}
marquee{
  font-size:90px;
  color:#88e3e0;
  font-family:sans-serif;
  font-weight: 600;
}
.back{
  margin-left:100px;
  border-radius:10px;
  border: 2px #fff;
  width:90px;
  height:30px;
  background-color:yellow;
  text-align:center;
  font-size:25px;
  color:black;
  
}
.back:hover{
  background-color:red;
}
.back a{
  color:#000;
  text-decoration:none;
}
.back a:hover{
  color:#fff;
  
}
</style>
</head>
<body>
  <marquee>Ambo Global Collage Login System</marquee>
  <div class="box">
    <h1>Login Here</h1>
    <div class="err">
      <?php echo $err; ?>
    </div>
    <form action="login.php" method="post" >
      <input type="text" name="fname" id="" placeholder="Enter username">
      <input type="password" name="password" id="" placeholder="Enter Password">
      <input type="submit" name="LOGIN" value="LOGIN">
      <div class="back"><a href="Home.html">Cancel</a></div>
    </form>
  </div>
</body>
</html>