<?php 
include('header.php');

 ?>

 <body>
 	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Registered Vehicles
  <a class="pull-right" href="../index.php">Go Back</a>
  </div>
  
 	
 
    <div style=" margin-right: auto; margin-left: auto; width:1000px">
<div style="clear:both"></div>
    <h2 style="color: grey">Vehicle Details</h2>
    <div class="table-responsive" >
    <table class="table table-bordered">
    <tr>
    <th width="30%">Make</th>
    <th width="30%">Model</th>
    <th width="20%">Vehicle Number</th>
    <th width="10%">Update</th>
    <th width="10%">Delete</th>
    
    </tr>
    <?php
    $query = "SELECT * FROM regvehicle ";
                        $result = mysqli_query($connect, $query);
                        if(mysqli_num_rows($result) > 0)
                        {
                          while($row = mysqli_fetch_array($result))
                            {
                            $_SESSION["make"] = $row["make"];
                            $_SESSION["model"] = $row["model"];
                            $_SESSION["number"] = $row["number"];
                            $_SESSION["vehId"] =  $row["vehId"];
                            

                            $vehId = $row["vehId"];
    ?>
            <form method="post" action=""> 
            <tr>
            <td><?php echo $row["make"] ?></td>
            <td><?php echo $row["model"] ?></td>
            <td><?php echo $row["number"] ?></td>
            <td><span><input type="submit" name="update" value="Update" ></span></td>
            <td> <span><input type="submit" name="delete" value="Delete " ></span></td>
            <input type="hidden" name="hidden_vehId" value="<?php echo $row["vehId"]; ?>">
            </tr>
            </form>
            <?php 
            if(isset($_POST["delete"]))
			{

				mysqli_query($connect,"delete from regvehicle where vehId = $_POST[hidden_vehId] ");
				echo '<script>window.location="viewVeh.php"</script>';
            }
            if(isset($_POST["update"])){
                $_SESSION["update"]= true;

                echo '<script>window.location="regVehicle.php"</script>';

            }
        
        }
        
        
        
    }
    ?>
    </table>
    </div>
</div>

  
</div>


 </body>

 </html>