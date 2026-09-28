<?php
    require dirname(__DIR__) . '/vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
    $dotenv->load();
    $conn = mysqli_connect(
        $_ENV['DB_HOST'],
        $_ENV['DB_USER'],
        $_ENV['DB_PASS'],
        $_ENV['DB_NAME']
    );

    if (!$conn) {
        die('Błąd połączenia z bazą danych');
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Better-Chess-rejestracja</title>
    <link rel="stylesheet" href="/registration-panel/style_reg.css">
    <link rel="icon" href="/image/Better-Chess-icon.png">
</head>
<body>
    <header>
        <img id="img1" src="/image/Better-Chess-icon.png" alt="Better-Chess-icon" width="50px" height="50px">
        <p id="p1">
            <em><span id="span1">Quality over Quantity =</span><strong><span id="span2"> Better-Chess</span></strong></em>
        </p>
    </header>
    <main>
        <div id="div1">
            <strong><span id="span3">Witamy Użytkowniku!</span></strong><br>
            <span id="span4">Zarejestruj się użytkowniku</span><br><br>

            <form action="" method="post">
                <label for="email1">Podaj swój email!</label><br>
                <input type="email" id="email1" name="email1_reg" required><br><br>
                <label for="user">Podaj swoją nazwę użytkownika!</label><br>
                <input type="name" id="user" name="user_reg" required><br><br>
                <label for="pass1">Podaj swoje hasło!</label><br>
                <input type="password" id="pass1" name="pass1_reg" required><br><br>
                <label for="pass2">Powtórz swoje hasło!</label><br>
                <input type="password" id="pass2" name="pass2_reg" required><br>
                <br><br><br>

                <button type="reset" id="reset2" class="b">Wyczyść dane</button>
                <button type="submit" id="submit2" class="b" onclick="pop_up()">Wyślij dane</button>
                <button type="button" id="panel1_2" class="b" onclick="main_page()">Strona główna</button>
            </form>
        </div>
    </main>
</body>
<script src="/registration-panel/reg.js"></script>
</html>
