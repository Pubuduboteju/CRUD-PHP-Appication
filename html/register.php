<?php
include('header.php');
?>

<body>
		<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Creat an Account
  <a class="pull-right" href="login.php">Go Back</a>
  </div>
  

<form action="" method="post" style="align-content: center; height: 300px; width: 400px; margin-right: auto; margin-left: auto;">

<h3>Register here</h3>
<br>
<div class="form-group ">
  <label for="example-text-input" class="col-2 col-form-label">Name</label>
  <div class="col-10">
    <input class="form-control" type="text" name="name" placeholder="Name" id="example-text-input">
  </div>
</div>
<div class="form-group ">
  <label for="example-text-input" class="col-2 col-form-label">Username</label>
  <div class="col-10">
    <input class="form-control" type="text" name="username" placeholder="Username" id="example-text-input">
  </div>
</div>
<div class="form-group ">
  <label for="example-password-input" class="col-2 col-form-label">Password</label>
  <div class="col-10">
    <input class="form-control" type="password" name="password" placeholder="Password" id="example-password-input">
  </div>
</div>
<p class="pull-left"><input type="submit" name="submit2" value="Register"></p>
<p class="pull-right"> <a href="login.php"> Go back</a> </p> 
</form>

<?php
if(isset($_POST["submit2"]))
{
  
mysqli_query($connect,"insert into register(name,username,password) values('$_POST[name]','$_POST[username]','$_POST[password]')");
echo '<script>window.location="../index.php"</script>';

}
	
?>

	
</body>

</html>