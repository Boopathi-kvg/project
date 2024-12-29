<?php

include ('./Conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['uname'];
    $password = $_POST['pword'];

    $sql = "SELECT Email,Pword FROM reg WHERE Email='$username' And Pword='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        if($row = $result->fetch_assoc()) {
            echo "
            <script>
                alert('Login Successfully!');
                window.location.href = 'http://localhost/boopathi/home.php';
            </script>
            "; 
        }
      } else {
        echo "
            <script>
                alert('Login UnSuccessfully!');
                window.location.href = 'http://localhost/boopathi/Index.php';
            </script>
            ";
      }
      $conn->close();
    }
      ?>
