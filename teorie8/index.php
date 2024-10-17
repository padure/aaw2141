<?php
    try {
        $dsn = "mysql:host=localhost;dbname=aaw_lectia8";
        $username="root";
        $password="";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        $pdo = new PDO($dsn, $username, $password, $options);
        
        $sql = "SELECT * FROM users";
        // $stmt = $pdo->query($sql);
        // $users = $stmt->fetchAll();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $users = $stmt->fetchAll();
    } catch (PDOException $e) {
        die("Eroare la conexiune. " . $e->getMessage());
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h4>Adauga un utilizator</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Nume prenume</td>
                            <td>Email</td>
                            <td>Data nasterii</td>
                            <td>Optiuni</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user): ?>
                            <tr>
                                <td><?=$user['id']?></td>
                                <td><?=$user['nume_prenume']?></td>
                                <td><?=$user['email']?></td>
                                <td><?=$user['data_nasterii']?></td>
                                <td class="d-flex gap-3">
                                    <a href="" class="text-warning">Edit</a>
                                    <a href="" class="text-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>