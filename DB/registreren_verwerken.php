<?php include('connect.php');
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $myemail = mysqli_real_escape_string($conn,$_POST['user']);
    $mypassword = mysqli_real_escape_string($conn,$_POST['password']);
    $myusername = mysqli_real_escape_string($conn,$_POST['gebruikersnaam']);
    $mygender = $_POST["genderRdb"];
    
        $query = "INSERT INTO Gebruikers (email, wachtwoord, gebruikersnaam, saldo, gender) VALUES ('$myemail', '$mypassword', '$myusername', '0', '$mygender')";
        mysqli_query($conn, $query);
        $_SESSION['login_user'] = mysqli_insert_id($conn);
        header('Location: ../');
}