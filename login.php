<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="nagłówek">
        <img src="eloelo.png" alt="Logo">
        <h1>Sklep z ciuchami UwU?</h1>
    </div>
    <div class="blok-lewy">
    <img src="bochy.png" alt="bochy"><br>
    <input type="button" value="zamów teraz!">
    </div>
    <div class="blok-srodkowy">
    <form action="login.php" method="post">
    <h2>Panel Logowania</h2>
        <label for="imie">Login:</label>
        <input type="text" id="login" name="login"><br><br>
        <label for="haslo">Hasło:</label>
        <input type="password" id="haslo" name="haslo"><br><br>
        <input type="reset" value="Reset">
        <input type="submit" value="Zaloguj">
        </form>
    </div>
    <div class="blok-prawy">
    
    </div>
    <div class="stopka">

    </div>

    <?php   
    

    
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    $conn = mysqli_connect("localhost", "root", "", "sklep");

    $sel = "SELECT login, haslo FROM uzytkownicy WHERE login = '.$login.' AND '.$haslo.' ";
    $zapytanie = mysqli_query($conn, $sel);
    if($wiersz['login'] = $login) {
        header('Location:login.php');
    }else{
        echo 'Nie zalogowano';}
    ?>
</body>
</html>