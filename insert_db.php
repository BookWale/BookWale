<?php

$name = $_REQUEST['name'];
$author = $_REQUEST['author'];
$description = $_REQUEST['description'];
$branch_id = $_REQUEST['branch_id'];
$sem_id = $_REQUEST['sem_id'];
$subject_id = $_REQUEST['subject_id'];

$image_dir = './images/';
$pdf_dir = './assets/pdf/';



$con = mysqli_connect('localhost','root','');
if($con)
{
mysqli_select_db($con,'bookwale');
}
else
{
	die("error".mysql_error());
}

$sql = "insert into book(`name`, `author`, `description`, `branch_id`, `sem_id`, `subject_id`) values('$name','$author','$description',$branch_id,$sem_id,$subject_id)";

if(mysqli_query($con,$sql)){
      $last_id = mysqli_insert_id($con);
      echo $last_id;

      $image_file = $image_dir.$last_id.".jpg";
      $pdf_file = $pdf_dir.$last_id.".pdf";


      if(move_uploaded_file($_FILES["image"]["tmp_name"],$image_file)){
            echo "Image uploaded";
      }
      if(move_uploaded_file($_FILES["pdf"]["tmp_name"],$pdf_file)){
            echo "pdf uploaded";
      }

      //header("Location:dashboard.php");
}
else{
      echo "Not inserted".mysqli_error($con);
}
?>

