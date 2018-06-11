<?php
include('header.php');
?>

<body>
    <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Vehicle Registration
  <a class="pull-right" href="../index.php">Go Back</a>
  </div>
  

<form action="" method="post" style="align-content: center; height: 300px; width: 400px; margin-right: auto; margin-left: auto;">

<h3>Register your vehicle here</h3>
<br>
<div class="form-group ">
  <label for="example-text-input" class="col-2 col-form-label">Make</label>
  <div class="col-10">
    <input class="form-control" type="text" <?php if(isset($_SESSION["update"])) {?> value="<?php echo $_SESSION["make"] ?>"<?php } ?> name="make" placeholder="Make" id="example-text-input">
  </div>
</div>
<div class="form-group ">
  <label for="example-text-input" class="col-2 col-form-label">Model</label>
  <div class="col-10">
    <input class="form-control" type="text" <?php if(isset($_SESSION["update"])) {?> value="<?php echo $_SESSION["model"] ?>"<?php } ?> name="model" placeholder="Model" id="example-text-input">
  </div>
</div>
<div class="form-group ">
  <label for="example-text-input" class="col-2 col-form-label">Vehicle Number</label>
  <div class="col-10">
    <input class="form-control" type="text" <?php if(isset($_SESSION["update"])) {?> value="<?php echo $_SESSION["number"] ?>"<?php } ?> name="number" placeholder="Vehicle Number" id="example-text-input">
  </div>
</div>
 <input type="hidden" name="hidden_vehId" <?php if(isset($_SESSION["update"])) {?> value="<?php echo $_SESSION["vehId"] ?>"<?php } ?> >

<?php
 if(isset($_SESSION['update'])){

     if ($_SESSION['update']){
  ?>
  <p class="pull-left"><input type="submit" name="submit4" value="Update"></p>
  <?php
   }
 }else{
?>
<p class="pull-left"><input type="submit" name="submit3" value="Register"></p>
<?php
}
?>   


<p class="pull-right"> <a href="../index.php"> Go back</a> </p> 
</form>

<?php
if(isset($_POST["submit3"]))
{
  
mysqli_query($connect,"insert into regvehicle(make,model,number) values('$_POST[make]','$_POST[model]','$_POST[number]')");
echo '<script>window.location="../index.php"</script>';

}

if (isset($_POST["submit4"])) {
  mysqli_query($connect,"UPDATE regvehicle SET make = '$_POST[make]',  model ='$_POST[model]', number ='$_POST[number]' WHERE vehId=$_POST[hidden_vehId] ");
echo '<script>window.location="sessionDes.php"</script>';
}
	
?>
</div>
	
</body>

</html>