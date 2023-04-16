<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <title>Zad3</title>
</head>
<body>
    <h1>Obsługa katalogów</h1>
    <form method="post" action="">
        Ścieżka: <input type="text" name="path"><br>
        Nazwa katalogu: <input type="text" name="dirname"><br>
        Operacja:
        <select name="operation">
            <option value="read">Odczytaj</option>
            <option value="delete">Usuń</option>
            <option value="create">Stwórz</option>
        </select>
        <br>
        <input type="submit" value="Wykonaj">
    </form>

    <?php
    function handle_directory($path, $dirname, $operation = "read") {
        $path = rtrim($path, '/') . '/';
        if (!is_dir($path . $dirname)) {
            if ($operation === "create") {
                if (mkdir($path . $dirname)) {
                    echo "Utworzono katalog: $dirname";
                } else {
                    echo "Nie udało się utworzyć katalogu.";
                }
            } else {
                echo "Katalog nie istnieje.";
            }
        } else {
            if ($operation === "delete") {
                if (is_dir_empty($path . $dirname)) {
                    if (rmdir($path . $dirname)) {
                        echo "Usunięto katalog: $dirname";
                    } else {
                        echo "Nie udało się usunąć katalogu.";
                    }
                } else {
                    echo "Katalog nie jest pusty.";
                }
            } else {
                $files = scandir($path . $dirname);
                echo "Elementy w katalogu $dirname: <ul>";
                foreach ($files as $file) {
                    if ($file != "." && $file != "..") {
                        echo "<li>$file</li>";
                    }
                }
                echo "</ul>";
            }
        }
    }

    function is_dir_empty($dir) {
        return count(glob($dir . "/*")) === 0;
    }

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $path = $_POST['path'];
        $dirname = $_POST['dirname'];
        $operation = isset($_POST['operation']) ? $_POST['operation'] : "read";
        handle_directory($path, $dirname, $operation);
    }
    ?>
</body>
</html>