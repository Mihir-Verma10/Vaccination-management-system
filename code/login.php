<html>
<head>
<style>
body{
background-image:url("cv19.jpg");
background-position:center;
background-size:cover;
}
</style>
</head>
<form method="POST">
<h1 style="position:absolute;top:100px;left:300px;font-family:'algerian';color:black">LOGIN FORM</h1>
<h1 style="position:absolute;top:190px;left:150;color:black;left:200px">USER NAME OR ID</h1>
<input type="text" name="username_id" placeholder="enter your user name here"style="position:absolute;top:260px;left:200px;height:35px;width:400px;border-width:2px" required>
<h1 style="position:absolute;top:280px;color:black;left:200px">PASSWORD</h1>
<input type="password" name="pwd" placeholder="enter your password" style="border-width:2px;position:absolute;top:345px;left:200px;height:35px;width:400px">
<input type="submit" value="LOGIN" style="position:absolute;top:410px;left:200px;height:40px;width:400px;color:blue;background-color:white;font-size:20px;font-family:algerian" required>
</form>
<body>
</body>
</html>
<?php
include("connection.php");
$un=$_POST['username_id'];
$id=$_POST['username_id'];
$password=$_POST['pwd'];
if(empty($password) and empty($un))
{
	echo"<h3 style='color:red;position:absolute;left:200px;top:450px'><u>"."PLESAE ENTER USERNAME AND PASSWORD"."</u></h3>";
}
else
{
$query="select * from vaccine_provider where (name='$un' or id='$un') and password='$password';";
$q=mysqli_query($conn,$query);
$num=mysqli_num_rows($q);
if($num==1)
{
	header('location:work.php');
}
else
{
	echo"<h3 style='color:red;position:absolute;left:200;top:450px'><u>"."PLEASE ENTER CORRECT USERNAME AND PASSWORD"."</u></h3>";
}
}
?>