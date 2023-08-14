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
<link rel="stylesheet" type="text/css" href="deleteStyle.css">
    <title>Deletar Usuário</title>
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
