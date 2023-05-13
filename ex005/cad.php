<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Formulários com PHP</title>
</head>

<body>

    <header class="mt-3 mb-3">
        <h1>
            Resultado do processamento
        </h1>
    </header>

    <main>
        <pre>
        <?php
            //seta um cookie que expira em 1h
            setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

            //inicia uma sessão
            session_start();
            $_SESSION["Teste"] = "Funcionou!";

            //chama aquilo que foi enviado por GET
            echo "<h3>Superglobal \$_GET</h3>";
            var_dump($_GET);

            //chama aquilo que foi enviado por POST
            echo "<h3>Superglobal \$_POST</h3>";
            var_dump($_POST);

            //chama aquilo que foi enviado por GET e POST
            echo "<h3>Superglobal \$_REQUEST</h3>";
            var_dump($_REQUEST);

            //chama o cookie setado
            echo "<h3>Superglobal \$_COOKIE</h3>";
            var_dump($_COOKIE);

            //sessão
            echo "<h3>Superglobal \$_SESSION</h3>";
            var_dump($_SESSION);

            //mostra as variaveis do ambiente
            echo "<h3>Superglobal \$_ENV</h3>";
            var_dump($_ENV);

            //mostra as variaveis do ambiente
            echo "<h3>Superglobal \$_SERVER</h3>";
            var_dump($_SERVER);

            //mostra TODAS as variaveis das outras superglobais
            echo "<h3>Superglobal \$GLOBALS</h3>";
            var_dump($GLOBALS);
        ?>
        </pre>

    </main>

    <form action="index.php" method="get">
        <button type="submit" class="btn btn-primary mb-3" id="btn-send">Voltar</button>
    </form>

</body>

</html>