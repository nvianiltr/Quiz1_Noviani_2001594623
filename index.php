<!DOCTYPE html>
<html>
<head>
<title>Login | goCarShare </title>
<link rel="stylesheet" type="text/css" href="goCarShareStyles.css">

</head>
<body>

<form method="post" action="login.php" >
  <div class="imgcontainer">
    <img src="companyLogo.png" alt="goCarShare" class="logo">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b><br></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <label for="psw"><br><b>Password</b><br></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br>
    <button type="submit">Login</button>
    
  </div>

</form>

</body>
</html>