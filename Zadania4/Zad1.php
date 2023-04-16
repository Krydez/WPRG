<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zad1</title>
</head>
<body>
<h1>Formularz daty urodzenia</h1>
        <form method="GET">
            <label for="data_urodzenia">Podaj datę urodzenia:</label>
            <input type="date" name="data_urodzenia" id="data_urodzenia">
            <br><br>
            <input type="submit" value="Wyślij">
        </form>
<?php
    function dzien_tygodnia($data) {
        $dzien_tygodnia = date('N', strtotime($data));
        switch ($dzien_tygodnia) {
            case 1:
                return "Poniedziałek";
                break;
            case 2:
                return "Wtorek";
                break;
            case 3:
                return "Środa";
                break;
            case 4:
                return "Czwartek";
                break;
            case 5:
                return "Piątek";
                break;
            case 6:
                return "Sobota";
                break;
            case 7:
                return "Niedziela";
                break;
        }
    }

    function lata($data) {
        $today = date("Y-m-d");
        $roznica = date_diff(date_create($data), date_create($today));
        return $roznica->y;
    }

    function dni_do_urodzin($data) {
        $today = date("Y-m-d");
        $urodziny = date("Y") . "-" . date("m-d", strtotime($data));
        if (strtotime($urodziny) < strtotime($today)) {
            $urodziny = (date("Y") + 1) . "-" . date("m-d", strtotime($data));
        }
        $roznica = date_diff(date_create($today), date_create($urodziny));
        return $roznica->days;
    }

    if (isset($_GET['data_urodzenia'])) {
        $data_urodzenia = $_GET['data_urodzenia'];
        echo "<p>Urodziłeś się w " . dzien_tygodnia($data_urodzenia) . "</p>";
        echo "<p>Ukończyłeś/aś " . lata($data_urodzenia) . " lat/a</p>";
        echo "<p>Do Twoich następnych urodzin pozostało " . dni_do_urodzin($data_urodzenia) . " dni</p>";
    }
    ?>
</body>
</html>