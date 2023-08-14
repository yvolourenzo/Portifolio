<!DOCTYPE html>
<html>
<head>
    <title>Quiz Disney</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
        function showResult(result) {
            var resultBox = document.getElementById("result-box");
            resultBox.innerHTML = "Parabéns, você é o personagem: " + result + "!";
            resultBox.style.display = "show";
        }

        function resetQuiz() {
        var radios = document.querySelectorAll("input[type='radio']");
        for (var i = 0; i < radios.length; i++) {
            radios[i].checked = false;
        }
        var resultBox = document.getElementById("result-box");
        resultBox.style.display = "none";
    }
    </script>
</head>
<body>
    
    <?php include 'header.php'; ?>
    <h1>Quiz Disney - Qual personagem você é?</h1>

    
    <div class="container">
    <form method="POST" action="">
            <label>Qual estação do ano você mais gosta?</label>
            <label><input type="radio" name="season" value="primavera"> Primavera</label>
            <label><input type="radio" name="season" value="verao"> Verão</label>
            <label><input type="radio" name="season" value="outono"> Outono</label>
            <label><input type="radio" name="season" value="inverno"> Inverno</label>

            <label>O que você prefere fazer em um dia livre?</label>
            <label><input type="radio" name="answer1" value="passear"> Passear</label>
            <label><input type="radio" name="answer1" value="ficar em casa"> Ficar em casa</label>

            <label>Qual a sua comida favorita?</label>
            <label><input type="radio" name="answer2" value="sorvete"> Sorvete</label>
            <label><input type="radio" name="answer2" value="pizza"> Pizza</label>

            <label>O que você gosta de fazer com os amigos?</label>
            <label><input type="radio" name="answer3" value="fazer festa"> Fazer festa</label>
            <label><input type="radio" name="answer3" value="assistir filmes"> Assistir filmes</label>

            <input type="submit" value="Descobrir personagem">
        </form>
        <div id="result-box" class="result-box"></div>
        <button class="reset-button" onclick="resetQuiz()">Refazer Teste</button>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["season"]) && isset($_POST["answer1"]) && isset($_POST["answer2"]) && isset($_POST["answer3"])) {
                $season = $_POST["season"];
                $answer1 = $_POST["answer1"];
                $answer2 = $_POST["answer2"];
                $answer3 = $_POST["answer3"];

                $result = "";

                if ($season == "primavera") {
                    if ($answer1 == "passear") {
                        $result = "Branca de Neve";
                    } else {
                        $result = "Bambi";
                    }
                } elseif ($season == "verao") {
                    if ($answer2 == "sorvete") {
                        $result = "Olaf";
                    } else {
                        $result = "Moana";
                    }
                } elseif ($season == "outono") {
                    if ($answer3 == "fazer festa") {
                        $result = "Tigger";
                    } else {
                        $result = "Rapunzel";
                    }
                } elseif ($season == "inverno") {
                    if ($answer1 == "ficar em casa") {
                        $result = "Winnie the Pooh";
                    } else {
                        $result = "Elsa";
                    }
                }

                echo "<h2>Parabéns, você é o personagem: $result!</h2>";
            } else {
                echo "<h2>Por favor, preencha todas as respostas do quiz.</h2>";
            }
        } else {
        ?>
        
        <?php
        }
        ?>
        
    </div>
</body>
</html>
