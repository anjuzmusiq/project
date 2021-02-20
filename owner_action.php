<?php 
include("header.php");
include ("connect.php");
$status=$_POST['status'];
?> 

<!-- end header -->
            <section class="slider_section">
                <div class="banner_main">
                    <div class="container-fluid"><br><br><br><br><br><br><br>
                        <div class="row">
                            <div class="col-md-2 padding_center">

                            </div>
<table>
  <thead>
    <tr>
      <th>Owner Id</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Mobile No</th>
      <th>Appartment No</th>
      <th>Email</th>
	  <th>Number of Adults</th>
      <th>Number of Children</th>
	  </tr>
  </thead>
  <?php
$sql1="SELECT * from registration where status='$status'";
$s1=mysqli_query($con,$sql1);
while(($row=mysqli_fetch_array($s1))==TRUE)
{
?>
  <tbody>
    <tr>
      <td><?php echo $row[0];?></td>
      <td><?php echo $row[1];?></td>
      <td><?php echo $row[2];?></td>
	  <td><?php echo $row[3];?></td>
	  <td><?php echo $row[4];?></td>
	  <td><?php echo $row[5];?></td>
	  <td><?php echo $row[8];?></td>
	  <td><?php echo $row[9];?></td>
	  </tr>
	 </tbody>
<?php
}
?>
	 </table>
                        </div>
                    </div>
                </div>
        
           </section>
        </div>
    </header>






<?php 
include("footer.php");
?> 