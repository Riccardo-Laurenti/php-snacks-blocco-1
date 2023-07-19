<?php
if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    $accedi = true;

    if (strlen($name) <= 3 || !strpos($mail, '.') || !strpos($mail, '@') || !is_numeric($age)) {
        $accedi = false;
    }

    if ($accedi) {
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>snack 2</title>
    <style>
        .form {
            display: flex;

        }

        form input,
        form button {
            margin: 5px;
        }
    </style>
</head>

<body>
    <div class="container form">
        <div class="row">
            <div class="col text-center">
                <form action="" method="GET">
                    <label for="name">Nome:</label>
                    <input type="text" name="name" id="name" required>

                    <label for="mail">Email:</label>
                    <input type="email" name="mail" id="mail" required>

                    <label for="age">Età:</label>
                    <input type="number" name="age" id="age" required>

                    <button type="submit">Verifica Accesso</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>