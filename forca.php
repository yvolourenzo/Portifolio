<?php
session_start();

$palavras = array("elefante", "computador", "banana", "programacao", "girafa");
$limiteTentativas = 6;

if (!isset($_SESSION['palavra_secreta']) || !isset($_SESSION['palavra_mostrada']) || !isset($_SESSION['tentativas'])) {
    $_SESSION['palavra_secreta'] = $palavras[array_rand($palavras)];
    $_SESSION['palavra_mostrada'] = str_repeat("_", strlen($_SESSION['palavra_secreta']));
    $_SESSION['tentativas'] = 0;
}

$mensagem = '';

if (isset($_POST['letra'])) {
    $letra = $_POST['letra'];

    if (strpos($_SESSION['palavra_secreta'], $letra) !== false) {
        for ($i = 0; $i < strlen($_SESSION['palavra_secreta']); $i++) {
            if ($_SESSION['palavra_secreta'][$i] === $letra) {
                $_SESSION['palavra_mostrada'][$i] = $letra;
            }
        }
        if ($_SESSION['palavra_mostrada'] === $_SESSION['palavra_secreta']) {
            $mensagem = 'Parabéns! Você acertou a palavra!';
            session_destroy();
        }
    } else {
        $_SESSION['tentativas']++;
        if ($_SESSION['tentativas'] >= $limiteTentativas) {
            $mensagem = 'Você perdeu! A palavra era: ' . $_SESSION['palavra_secreta'];
            session_destroy();
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Jogo da Forca</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px; /* Aumenta a largura máxima para maior tamanho no celular */
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h1 {
            margin-top: 10px;
            color: #333;
        }

        p {
            color: #555;
        }

        form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="text"] {
            padding: 10px; /* Aumenta o tamanho do padding */
            font-size: 18px; /* Aumenta o tamanho da fonte */
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            max-width: 300px; /* Ajusta a largura máxima */
            margin-bottom: 10px;
        }

        button {
            padding: 12px 24px; /* Aumenta o tamanho do padding */
            font-size: 18px; /* Aumenta o tamanho da fonte */
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            max-width: 300px; /* Ajusta a largura máxima */
        }

        button:hover {
            background-color: #0056b3;
        }

        .palavra-mostrada {
            margin-top: 20px;
            font-size: 28px; /* Aumenta o tamanho da fonte */
            color: #333;
            font-weight: bold;
        }

        .mensagem {
            margin-top: 10px;
            font-size: 20px; /* Aumenta o tamanho da fonte */
            color: #d9534f;
            font-weight: bold;
        }

        @media (max-width: 480px) {
            .container {
                max-width: 100%;
                border-radius: 0;
            }
        }
    </style>
</head>
<body>
    <h1>Jogo da Forca</h1>
    <p>Descubra a palavra secreta:</p>

    <div class="palavra-mostrada">
        <?php echo $_SESSION['palavra_mostrada']; ?>
    </div>

    <form method="post">
        <input type="text" name="letra" maxlength="1" style="text-transform: uppercase;">
        <button type="submit">Chutar</button>
    </form>

    <p class="mensagem"><?php echo $mensagem; ?></p>
</body>
</html>
