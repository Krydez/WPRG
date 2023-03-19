<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="formkontakt.php" method="post">
    <ul>
        <li>
            <label for="imie">Imię i nazwisko</label>
            <input type="text" name="imie" placeholder="Twoje imie i nazwisko"><br>
        </li>
        <li>
            <label for="email">Adres e-mail</label>
            <input type="text" name="email" placeholder="twoj adres email np lol123@mail.com"><br>
        </li>
        <li>
            <label for="numer">Telefon komorkowy</label>
            <input type="number" name="numer"><br>
        </li>
        <li>
            <label for="temat">Wybierz temat</label>
            <select name="temat">
                <option value="Wykonanie strony internetowej">Wykonanie strony internetowej</option>
                <option value="Wykonanie projektu">Wykonanie projektu</option>
                <option value="Sprawy biznesowe">Sprawy biznesowe</option>
            </select>
        </li>
        <li>
            <label for="tresc">Tresc wiadomosci</label>
            <input type="text" name="tresc" placeholder="wpisz tutaj tresc swojej wiadomosci">
        </li>
        <li>
            <label for="kontakt">Preferowana forma kontaktu</label><br>
            <input type="checkbox" name="checkemail" placeholder="email">
            <label for="checkemail">Email</label><br>
            <input type="checkbox" name="checktel" placeholder="telefon">
            <label for="checktel">Telefon</label>
        </li>
        <li>
            <label for="www">Posiadasz juz strone www?</label><br>
            <input type="radio" name="yes" placeholder="tak">
            <label for="yes">Tak</label><br>
            <input type="radio" name="no" placeholder="nie">
            <label for="no">Nie</label>
        </li>
        <li>
            <label for="zalacznik">Zalaczniki:</label><br>
            <input type="file" name="zalacznik"><br>
        </li>
    </ul>
    <input type="submit" placeholder="Wyslij formularz">
</form>
<?php
    $imie = isset($_POST['imie']) ? $_POST['imie'] : 'error';
    $email = isset($_POST['email']) ? $_POST['email'] : 'error';
    $numer = isset($_POST['numer']) ? $_POST['numer'] : 'error';
    $temat = isset($_POST['temat']) ? $_POST['temat'] : 'error';
    $tresc = isset($_POST['tresc']) ? $_POST['tresc'] : 'error';
    $preferowanaFormaKontaktu = '';
    $posiadaszJuzStroneWWW = '';       
    if (isset($_POST['checkemail'])) {
        $preferowanaFormaKontaktu .= 'Email, ';
    }
    if (isset($_POST['checktel'])) {
        $preferowanaFormaKontaktu .= 'Telefon, ';
    }
    $preferowanaFormaKontaktu = rtrim($preferowanaFormaKontaktu, ', ');    
    if (isset($_POST['yes'])) {
        $posiadaszJuzStroneWWW = 'Tak';
    }
    if (isset($_POST['no'])) {
        $posiadaszJuzStroneWWW = 'Nie';
    }      
    echo '<ul>';
    echo '<li>Imię i nazwisko: ' . $imie . '</li>';
    echo '<li>Adres e-mail: ' . $email . '</li>';
    echo '<li>Telefon komórkowy: ' . $numer . '</li>';
    echo '<li>Wybrany temat: ' . $temat . '</li>';
    echo '<li>Treść wiadomości: ' . $tresc . '</li>';
    echo '<li>Preferowana forma kontaktu: ' . $preferowanaFormaKontaktu . '</li>';
    echo '<li>Posiadasz już stronę www: ' . $posiadaszJuzStroneWWW . '</li>';
    echo '</ul>';
?>
</body>
</html>