<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TYvo Lourenzo de Castro</title>
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
            max-width: 800px;
            margin: 0 auto;
        }
        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
        }
        /* Adicione estilos para responsividade */
        @media screen and (max-width: 768px) {
            nav ul {
                flex-direction: column;
            }
            nav ul li {
                margin-right: 0;
                margin-bottom: 10px;
            }
            .conteudo {
                padding: 20px;
                max-width: 90%;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="conteudo">
    <img src="Scripts_Php/img_eu.jpg" alt="Minha Imagem" style="display: block; margin: 0 auto; max-width: 40%; height: auto;">
    
    <h2>Bem-vindo ao meu portfólio!</h2>
    <p>Aqui você encontrará informações sobre mim e meus projetos.</p>
    
    <h3>Experiência</h3>
    <p>Minha experiência nas seguintes tecnologias:</p>
    
    <div class="habilidade">
        <p>PHP</p>
        <div class="progress">
            <div class="bar" style="width: 80%;"></div>
        </div>
    </div>
    
    <div class="habilidade">
        <p>HTML</p>
        <div class="progress">
            <div class="bar" style="width: 90%;"></div>
        </div>
    </div>
    
    <div class="habilidade">
        <p>C#</p>
        <div class="progress">
            <div class="bar" style="width: 70%;"></div>
        </div>
    </div>

    <div class="habilidade">
        <p>React Native</p>
        <div class="progress">
            <div class="bar" style="width: 80%;"></div>
        </div>
    </div>

    <div class="habilidade">
        <p>JavaScript</p>
        <div class="progress">
            <div class="bar" style="width: 70%;"></div>
        </div>
    </div>

    <div class="habilidade">
        <p>Node.js</p>
        <div class="progress">
            <div class="bar" style="width: 80%;"></div>
        </div>
    </div>

    <div class="habilidade">
        <p>C</p>
        <div class="progress">
            <div class="bar" style="width: 80%;"></div>
        </div>
    </div>

    <div class="habilidade">
        <p>.NET & Framework</p>
        <div class="progress">
            <div class="bar" style="width: 75%;"></div>
        </div>
    </div>

    <div class="habilidade">
        <p>jQuery</p>
        <div class="progress">
            <div class="bar" style="width: 85%;"></div>
        </div>
    </div>

    <div class="habilidade">
        <p>Xamarin</p>
        <div class="progress">
            <div class="bar" style="width: 80%;"></div>
        </div>
    </div>

    <h3>Formação Acadêmica</h3>
    <ul class="formacao">
        <li><strong>FATEC São Paulo</strong> - Análise e Desenvolvimento de Sistemas (Cursando)</li>
        <li><strong>ETEC Adolpho Berezin</strong> - Análise e Desenvolvimento de Sistemas (Curso Técnico Concluído)</li>
        <li><strong>Centro de Línguas e Conversação (CEL)</strong> - Curso de Conversação de Línguas Estrangeiras (Inglês)</li>
    </ul>
</div>

</div>

<style>
    .progress {
        width: 100%;
        background-color: #ccc;
        border-radius: 5px;
    }
    .bar {
        height: 20px;
        background-color: #483D8B;
        border-radius: 5px;
    }
    .habilidade {
        margin-bottom: 10px;
    }
    .formacao {
        list-style-type: none;
        padding: 0;
        text-align: center;
    }

    .formacao li {
        margin-bottom: 10px;
        text-align: justify;
    }
</style>

<?php include 'footer.php'; ?>

</body>
</html>
