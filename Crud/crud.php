<?php
include 'db.php';

if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
    $conn->query($sql);
}

$result = $conn->query("SELECT * FROM users");

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="crudStyle.css">
    <title>Gerenciador de Usuários</title>
</head>
<body>
    <div class="container">
        <h1></h1>

        <h2>Criação de Usuários</h2>
        <p>Insira os dados do usuário abaixo:</p>
        <form method="post">
            <input type="text" name="name" placeholder="Nome" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="tel" name="phone" placeholder="Telefone" required>
            <button type="submit" name="create">Criar Usuário</button>
        </form>

        <h2>Usuários</h2>
        <table border="1">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th></th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td>
                    <a class="edit" href="edit.php?id=<?php echo $row['id']; ?>">Editar</a>
                    <a class="delete" href="delete.php?id=<?php echo $row['id']; ?>">Deletar</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
