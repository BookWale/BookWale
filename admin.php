<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="assets/css/main.css" />
      <title>Admin Login</title>
      <style>
            .input-field{
                  width:200px;
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
                  <li><a href="admin.php">Admin Login</a></li>
            </ul>
            <ul class="actions vertical">
                  <li><a href="#" class="button fit">Login</a></li>
            </ul>
      </nav>

      <form action="./dashboard.php" method="get" style="margin:30px 50px 0px 50px">

            <label for="username">Username: </label>
            <input type="text" style="width:300px;" name="username" id="username">

            <label for="password" style="margin-top:30px;">Password:</label>
            <input type="password" style="width:300px;" name="password" id="password">

            <input type="submit" style="margin-top:50px;" name="submit" value="Login">
      </form>

</body>
</html>