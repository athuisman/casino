<?php include_once 'connect.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $myemail = mysqli_real_escape_string($conn,$_POST['user']);
    $mypassword = mysqli_real_escape_string($conn,$_POST['password']);

    $sql = "SELECT * FROM Gebruikers WHERE email = '$myemail' and wachtwoord = '$mypassword'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

          if($count == 1) {
            $id = $row['id'];
            $_SESSION['login_user'] = $id;
            header('Location: ../');
          } else {
            $errorAD = "Your Login Name or Password is invalid test";
            echo($errorAD);
            header('Location: errors.php');
            }
        }