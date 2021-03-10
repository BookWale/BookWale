<?php
$con = mysqli_connect('localhost','root','');
if($con)
{
mysqli_select_db($con,'bookwale');
}
else
{
	die("error".mysql_error());
}

$b=$_POST['bidphp'];

$query1 = "select * from subname9 where bid88=3";
$result1 = mysqli_query($con,$query1);
?>
<option selected="true" disabled="disabled">-- Select Branch --</option>
								<?php
										while($row = mysqli_fetch_array($result1))
										{
										?>
											<option value="<?php echo $row['subname9']; ?>"><?php echo $row['subname9']; ?></option>
										<?php
										}									
									?>


