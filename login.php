<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<body>
<form action="login.php" method="post">
        <h2>Panel Logowania</h2>
        <label for="imie">Login:</label>
        <input type="text" id="login" name="login"><br><br>
        <label for="haslo">Hasło:</label>
        <input type="password" id="haslo" name="haslo"><br><br>
        <input type="reset" value="Reset">
        <input type="submit" value="Zaloguj">
    </form>

    <?php   
    

    
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    $conn = mysqli_connect("localhost", "root", "", "sklep");

    $sel = "SELECT login, haslo FROM uzytkownicy WHERE login = '.$login.' AND '.$haslo.' ";
    $zapytanie = mysqli_query($conn, $sel);
    if($wiersz['login'] = $login) {
        header('Location:glowna.php');
    }else{
        echo 'Nie zalogowano';}
    ?>
</body>
</html>