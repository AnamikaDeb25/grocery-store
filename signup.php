<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>

  <div class="login">

    
      
      <h1 class="text-center" >User Register</h1>
      
      <form method="post" action="insert.php">
        
        <div class="txt_field">
          
          <input type="text" name ="name" required>
          
         
          
          <label>Name</label>
        
        </div>

        <div class="txt_field">
          
          <input type="text" name="email" required>
          
          <span></span>
          
          <label>Email</label>
        
        </div>

        <div class="txt_field">
          
          <input type="text" name="numbers" required>
          
          <span></span>
          
          <label>Number</label>
        
        </div>
        
        <div class="txt_field">
          
          <input type="password" name = "pass" required>
        
          <span></span>
        
          <label>Password</label>
        
        </div>
        
        <div class="txt_field">
          
          <input type="password" name = 'confirm'required>
        
          <span></span>
        
          <label>Confirm Password</label>
        
        </div>

        <input class="btn-primary" type="submit" value="Register" name = "register">
        
        <div class="signup_link">
        
          Already have an Account ? <a href="signin.php">Login</a>
        </div>
      </form>
    </div>
</body>
</html>