<html>

<head></head>
    <body>

        <form action="http://localhost" method="post">
            <div class="container">
                <h1>Форма регистрации</h1>
                <p>Пожалуйста, заполните эту форму, чтобы создать учетную запись.</p>
                <hr>

                <label for="name"><b>Name</b></label>
                <input type="text" placeholder="Введите ваше имя" name="name" required>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Введите вашу почту" name="email" required>

                 <label for="psw"><b>Пароль</b></label>
                <input type="password" placeholder="Введите пароль" name="psw" required>

                <label for="psw-repeat"><b>Повторить пароль</b></label>
                 <input type="password" placeholder="Повторите пароль" name="psw-repeat" required>

                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Запомнить меня
                </label>

                 <div class="clearfix">

                        <button type="submit" class="signupbtn">Регистрация</button>
                 </div>
            </div>
        </form>
    </body>
</html>


<?php

print_r($_POST);

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['psw'];

$pdo = new PDO("pgsql:host=db, dbname=dbname", "dbuser", "dbpwd");
$pdo->exec("INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')");