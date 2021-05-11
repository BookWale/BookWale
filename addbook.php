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
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="assets/css/main.css" />
      <title>Add Book</title>
</head>
<body>

<header id="header">
      <nav class="left">
		<a href="#menu"><span>Menu</span></a>
	</nav>
      <a href="index.php" class="logo">Book Wale</a>
</header>
      
<nav id="menu">
      <ul class="links">
            <li><a href="index.php">Home</a></li>
            <li><a href="addbook.php">Add Books</a></li>
      </ul>
      <ul class="actions vertical">
            <li><a href="#" class="button fit">Login</a></li>
      </ul>
</nav>

<form action="insert_db.php" method="post" enctype="multipart/form-data" style="margin:30px 50px 0px 50px">

      <label for="name" >Name</label>
      <input type="text" name="name" id="name">

      <label for="authon" style="margin-top:20px">Author</label>
      <input type="text" name="author" id="author">

      <label for="description" style="margin-top:20px">Description</label>
      <input type="text" name="description" id="description">

      <label style="margin-top:20px"> Select your Branch </label>
      <select style="display:inline" name="branch_id" id="branch" onchange="enablesem()">
            <option selected="true" value="-1" >-- Select Branch --</option>
            <?php
                  $query1 = "select * from branch84";
                  $result1 = mysqli_query($con,$query1);
                  while($row = mysqli_fetch_array($result1))
                  {
                  ?>
                        <option name="branch_id" value="<?php echo $row['bid88']; ?>"><?php echo $row['bname83']; ?></option>
                  <?php
                  }									
            ?>
            
      </select>
      <a href="#" data-toggle="tooltip" data-placement="right" title="Select Branch First"></a>
      <br>
      <label style="margin-top:20px"> Select your Semester </label>
      <select name="sem_id" id="semster" onclick="checkbranch()" onchange="passval(this.value)" >
            <option id="test1" value="-1" selected="true" disabled>-- Select Branch --</option>
            <?php
                  $query1 = "select * from sem8";
                  $result1 = mysqli_query($con,$query1);
                  while($row = mysqli_fetch_array($result1))
                  {
                  ?>
                        <option disabled name="sem_id" value="<?php echo $row['sid8']; ?>"><?php echo $row['semstername88']; ?></option>
                  <?php
                  }									
            ?>
      </select>
      <br>
      <label style="margin-top:20px"> Select your Subject </label>
      <select name="subject_id" id="subname">
            <option selected="true" disabled="disabled">-- Select subject --</option>	
      </select>

      <label for="image" style="margin-top:20px">Image</label>
      <input type="file" name="image" id="image" accept="image/png, image/jpeg,image/jpg">

      <label for="pdf" style="margin-top:20px">PDF</label>
      <input type="file" name="pdf" id="pdf" accept="application/pdf">

      <input type="submit" name="add" value="Add Book" style="margin:50px 0;">

</form>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script type="text/javascript">
      var data1 = document.getElementById("subname").innerHTML;
      function passval(val)
      {
            var bid=document.getElementById("branch").value;
            
            $.ajax({
                  url:'passvalue.php',
                  type: 'POST',
                  data:{semid:val,branchid:bid},
                  success: function(result){
                        d=data1+result;
                        $("#subname").html(d);
                  }
            });
      }
      function enablesem(){
            if(!($('#semster').find(":selected").val() == -1)){
                  $('#semster').find(":selected").removeAttr("selected");
            }
            $('#semster').children().removeAttr("disabled");
      }
      function checkbranch(){
            if($('#branch').find(":selected").val() == -1){
                  $('[data-toggle="tooltip"]').tooltip('show');
                  $("#semster").on('focusout',function(){
                        $('[data-toggle="tooltip"]').tooltip('hide');
                  });
            }
      }
</script>


</body>
</html>