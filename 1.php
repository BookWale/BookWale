<?php
      if($_REQUEST['book_id']){
            $book_id = $_REQUEST['book_id'];
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
     
      <embed src="assets/pdf/<?php echo $book_id.".pdf" ?>" type="application/pdf" width="100%" height="600px">

</body>
</html>
