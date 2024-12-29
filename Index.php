<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="./style.css">
    </head>
<body>
    <h1 align="center">Login Form</h1>
    <form action="Login.php" method="post">
<table> 
  <tr> 
    <td><label for="name">User Name</label> </td>
    <td><input type="text" id="uname" name="uname" placeholder="user" required> </td> 
     </tr>
 <tr> 
    <td><label for="name">Password</label> </td>
    <td><input type="password" id="pword" name="pword" placeholder="password" required> </td> 
   </tr>
 
 <td><input type="submit" value="Submit"></td>
 <td><input type="Reset" value="Reset"></td>
  </tr>
 <tr>
  <td colspan="2">
  <div class="signup-link">
               Not a member?...Clieck New Registration <a href="Registration.php">Signup now</a>
            </div>
</td>
</tr>
</table>
</form> 
  
</body>
</html>
