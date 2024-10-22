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
            <div class="col-md-6 m-auto mt-5">
                <h4>Adauga un utilizator</h4>
                <form method="post">
                    <div class="mb-3">
                        <label for="nume_prenume">Nume Prenume</label>
                        <input type="text" name="nume_prenume" id="nume_prenume" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password">Parola</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="data_nasterii">Data nasterii</label>
                        <input type="date" name="data_nasterii" id="data_nasterii" class="form-control">
                    </div>
                    <button class="btn btn-dark btn-sm" type="submit">Save</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 my-4">
                <h4>Lista utilizatorilor</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <td class="fw-bold">#</td>
                            <td class="fw-bold">Nume prenume</td>
                            <td class="fw-bold">Email</td>
                            <td class="fw-bold">Data nasterii</td>
                            <td class="fw-bold">Optiuni</td>
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