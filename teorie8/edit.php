<?php
    try {
        require_once './connect.php';
        $id = htmlspecialchars($_GET['id']);
        $sql = "SELECT * FROM users WHERE id=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        $user = $stmt->fetch();
        $pdo = null;
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
                <h4>Editeaza utilizatorul</h4>
                <form method="post">
                    <div class="mb-3">
                        <label for="nume_prenume">Nume Prenume</label>
                        <input type="text" name="nume_prenume" id="nume_prenume" class="form-control" value="<?=$user['nume_prenume']?>">
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
    </div>
</body>
</html>