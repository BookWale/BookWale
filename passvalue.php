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

$semid = $_POST['semid'];
$branchid = $_POST['branchid'];

$query1 = "select * from subname9 where bid88='$branchid' and semid='$semid' ";
$result1 = mysqli_query($con,$query1);
?>

								<?php
										while($row = mysqli_fetch_array($result1))
										{
										?>
											<option value="<?php echo $row['subname9']; ?>"><?php echo $row['subname9']; ?></option>
										<?php
										}									
									?>


