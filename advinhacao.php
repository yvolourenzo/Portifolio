<?php
session_start();

if (!isset($_SESSION['numero_secreto'])) {
    $_SESSION['numero_secreto'] = rand(1, 100);
}

$mensagem = '';

if (isset($_POST['guess'])) {
    $palpite = $_POST['guess'];

    if ($palpite > $_SESSION['numero_secreto']) {
        $mensagem = 'Tente um número menor!';
    } elseif ($palpite < $_SESSION['numero_secreto']) {
        $mensagem = 'Tente um número maior!';
    } else {
        $mensagem = 'Parabéns! Você acertou!';
        unset($_SESSION['numero_secreto']);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Jogo de Adivinhação</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: skyblue;
        }
        h1 {
            margin-top: 30px;
            color: #333;
        }
        p {
            color: #555;
        }
        form {
            margin-top: 20px;
        }
        input[type="number"] {
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .mensagem {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Jogo de Adivinhação</h1>
    <p>Tente adivinhar o número entre 1 e 100:</p>

    <form method="post">
        <input type="number" name="guess" min="1" max="100">
        <button type="submit">Adivinhar</button>
    </form>

    <p class="mensagem"><?php echo $mensagem; ?></p>
</body>
</html>
