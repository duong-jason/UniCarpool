<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  
  <div class="hero">
      <h1 class = "hero-title">UniCarpool</h1>
    </div>
  
  <div pic="logo">
    <img src="UniCarpoolLogo1.png">
  </div>

  <div>
    <img src="UniCarpoolLogo1.png" style="position:absolute;width: 150px;height:150px;left:992px;top:60px;">
  </div>
  
  <div id="frm">
    <form action="index.php" method="POST">
      <p>
        <label>Username:</label>
        <input type="text" id="user" name="user"  />
      </p>
      <p>
        <label>Password:</label>
        <input type="password" id="pass" name="pass"  />
      </p>
      <p>
        <input type="submit" id="btn" value="Login"  />
      </p>
    </form>
  </div>
  
  <p>
    <a href="http://ecs.fullerton.edu/~cs332m24">Register Here!
    </a>
  </p>
  
</body>
</html>
