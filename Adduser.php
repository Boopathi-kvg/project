<?php include ('./conn.php') ?>
<!DOCTYPE html>
<html>
<body>

<?php
$conn= new mysqli('localhost','root','','project');   
 //(db name as already create ur database name for registerno)
$fname1 = $_POST['uname'];
$lname1 = $_POST['lname'];
$email1 = $_POST['email'];
$pword1 = $_POST['pword'];




$sql = "INSERT INTO reg (Fname,Lname,Email,Pword) VALUES ('$fname1','$lname1','$email1','$pword1')";

if ($conn->query($sql) === TRUE) {
  echo "
        <script>
            alert('Registered Successfully');
            window.location.href = 'http://localhost/boopathi/index.php';
//(Project  as already create ur folderame for registerno)
        </script>
        ";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>
