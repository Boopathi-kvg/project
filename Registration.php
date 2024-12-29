<?php include ('./conn.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="./style.css">
   
</head>
<body>
    <h1 align="center">Registraion Form</h1>
    <form action="./AddUser.php" method="post">
<table> 
  <tr> 
    <td><label for="name">First Name</label> </td>
    <td><input type="text" id="uname" name="uname" required> </td> 
     </tr>
  <tr> 
    <td><label for="name">Last Name</label> </td>
    <td><input type="text" id="lname" name="lname" required> </td> 
  </tr>
  <tr> 
    <td><label for="name">Email</label> </td>
    <td><input type="text" id="email" name="email" required> </td> 
  </tr>
  <tr> 
    <td><label for="name">Password</label> </td>
    <td><input type="password" id="pword" name="pword" required> </td> 
   </tr>
 
 <td><input type="submit" value="Register"></td>
 <td><input type="Reset" value="Reset"></td>
  </tr>
 
</table>
</form>   
</body>
</html>
