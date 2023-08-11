<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Fetch the data before deleting for confirmation message
    $result = $conn->query("SELECT * FROM users WHERE id=$id");
    $row = $result->fetch_assoc();

    if (isset($_POST['confirm_delete'])) {
        $sql = "DELETE FROM users WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            header("Location: crud.php"); // Redireciona para a página CRUD após exclusão
            exit();
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } elseif (isset($_POST['cancel'])) {
        header("Location: crud.php"); // Redireciona para a página CRUD após cancelar
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Deletar Usuário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 400px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            text-align: center;
        }

        h1 {
            color: #333333;
        }

        p {
            color: #777777;
        }

        form {
            margin-top: 20px;
        }

        button {
            padding: 10px 15px;
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px;
            margin-right: 10px;
        }

        .cancel-button {
            background-color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Deletar Usuário</h1>
        <?php if ($row): ?>
        <p>Tem certeza de que deseja deletar o usuário "<?php echo $row['name']; ?>"?</p>
        <form method="post">
            <button type="submit" name="confirm_delete">Sim, Deletar</button>
            <button class="cancel-button" type="submit" name="cancel">Cancelar</button>
        </form>
        <?php else: ?>
        <p>Usuário não encontrado.</p>
        <?php endif; ?>
    </div>
</body>
</html>
