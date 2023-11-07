<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
</head>
<body>
    <form action="rejestr.php" method="GET">
        <label for="login">Login:</label>
        <input type="text" name="login"><br><br>
        <label for="haslo">Haslo:</label>
        <input type="text" name="haslo"><br><br>
        <input type="submit" value="Wyślij">
    </form>
<?php
    $login = $_GET['login'];
    $haslo = $_GET['haslo'];

    if(isset($login) && isset($haslo)) {
        $conn = mysqli_connect("localhost", "root", "", "sklep");

        if($conn->query('INSERT INTO `uzytkownicy` (`login`, `haslo`) VALUES ("'.$login.'", "'.$haslo.'")')){
            header("Location:login.php");
        }else{
            echo "nie dodano do bazy danych";
        }
    }

   

?>
</body>
</html>