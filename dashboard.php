<?php

if(isset($_REQUEST['submit'])){
      if($_REQUEST['username'] && $_REQUEST['password']){
            $username = $_REQUEST['username'];
            $password = $_REQUEST['password'];
            if($username == 'parth' && $password =='123'){
                  $_SESSION["user"] = $username;
                  // echo "Successfully login";
            }
      }
}

if(!isset($_SESSION["user"])){
      header("Location:index.php");
}

$con = mysqli_connect('localhost','root','');
if($con)
{
      mysqli_select_db($con,'bookwale');
}
else
{
	die("error".mysql_error());
}

$sql = "select *from book";

$result = mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="assets/css/main.css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
      <title>Document</title>
      <style>
            .row.display-flex {
                  display: flex;
                  flex-wrap: wrap;
            }
            .row.display-flex > [class*='col-'] {
                  display: flex;
                  flex-direction: column;
            }

      </style>
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

<div class="container mt-4" >
<div class="row display-flex">

<?php
      while($row = mysqli_fetch_assoc($result)){
?>

      <div class="col-lg-4 mb-4">
            <div class="card">
                  <div class="view overlay">
                        <img src="<?php echo "images/".$row['book_id'].".jpg"; ?>" class="card-img-top" alt="">
                        <a>
                              <div class="mask rgba-white-slight"></div>
                        </a>
                  </div>

                  <div class="card-body text-center">
                        <h3 class="">Name: "<?php echo $row['name'] ?>"</h3>

                        <h4>
                              <strong>Author: 
                              <?php echo $row['author'] ?>
                              </strong>
                        </h4>

                        <p class=" ">
                              <?php echo $row['description'] ?>
                        </p>

                        <a href="1.php?book_id=<?php echo $row['book_id']; ?>"  target="_blank"  >Get Book</a>
                  </div>
            </div>
      </div>
      <?php } ?>
      </div>

</div>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>


