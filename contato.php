<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            background-color: #444;
            padding: 10px;
        }
        nav ul li {
            margin-right: 20px;
        }
        nav ul li:last-child {
            margin-right: 0;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
        }
        .conteudo {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .contato-info {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }
        .mapa {
            text-align: center;
        }
        .formulario {
            text-align: center;
            margin-top: 30px;
        }
        .formulario textarea {
            width: 100%;
            height: 100px;
            margin-top: 10px;
        }
        .formulario input[type="submit"] {
            padding: 10px 20px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .formulario input[type="submit"]:hover {
            background-color: #555;
        }
        @media (max-width: 768px) {
            .contato-info {
                margin-bottom: 10px;
            }
            .mapa {
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>
<?php include 'header.php'; ?>
    <div class="conteudo">
        <h2>Contato</h2>
        <div class="contato-info">
            <h3>Informações de Contato</h3>
            <p>Telefone: 11 98453 4452</p>
            <p>Email Pessoal: yvolorenzo@gmail.com</p>
            <p>Email Institucional: yvo.castro@fatec.sp.gov.br</p>
            <p>Residência: São Paulo, SP</p>
        </div>
        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58513.98345483196!2d-46.646786860213794!3d-23.56399082203688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5944544318af%3A0x69468e8f7a2f29d6!2sMooca%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1691707898940!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="formulario">
            <h3>Envie uma Mensagem</h3>
            <form action="processar_formulario.php" method="POST">
                <textarea name="mensagem" placeholder="Digite sua mensagem aqui"></textarea>
                <br>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
