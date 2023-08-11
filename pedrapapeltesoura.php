<?php
session_start();

$opcoes = ['Pedra', 'Papel', 'Tesoura'];
$computador = $opcoes[array_rand($opcoes)];
$resultado = '';

if (isset($_POST['escolha'])) {
    $escolha = $_POST['escolha'];
    
    if ($escolha === $computador) {
        $resultado = 'Empate!';
    } elseif (($escolha === 'Pedra' && $computador === 'Tesoura') ||
              ($escolha === 'Papel' && $computador === 'Pedra') ||
              ($escolha === 'Tesoura' && $computador === 'Papel')) {
        $resultado = 'Você venceu!';
    } else {
        $resultado = 'Computador venceu!';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Jogo Pedra, Papel e Tesoura</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f7f7f7;
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
        select {
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
        .resultado {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Jogo Pedra, Papel e Tesoura</h1>
    <p>Escolha uma opção:</p>

    <form method="post">
        <select name="escolha">
            <option value="Pedra">Pedra</option>
            <option value="Papel">Papel</option>
            <option value="Tesoura">Tesoura</option>
        </select>
        <button type="submit">Jogar</button>
    </form>

    <p>Computador escolheu: <?php echo $computador; ?></p>
    <p class="resultado"><?php echo $resultado; ?></p>
</body>
</html>
