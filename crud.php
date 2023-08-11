<?php
include 'db.php';

// CREATE
if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
    $conn->query($sql);
}

// READ
$result = $conn->query("SELECT * FROM users");

// UPDATE and DELETE actions are handled in separate files (edit.php and delete.php) for better organization
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gerenciador de Usuários</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333333;
        }

        h2 {
            color: #333333;
        }

        p {
            color: #777777;
        }

        form {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        form input {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 3px;
        }

        form button {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #dddddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            margin-right: 10px;
            color: #333333;
        }

        a.edit {
            color: #007bff;
        }

        a.delete {
            color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1></h1>

        <!-- CREATE -->
        <h2>Criação de Usuários</h2>
        <p>Insira os dados do usuário abaixo:</p>
        <form method="post">
            <input type="text" name="name" placeholder="Nome" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="tel" name="phone" placeholder="Telefone" required>
            <button type="submit" name="create">Criar Usuário</button>
        </form>

        <!-- READ -->
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
