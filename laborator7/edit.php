<?php 
    session_start();
    $user_id = htmlspecialchars($_GET['user']);
    $file = 'users.json';
    $users = [];
    if(file_exists($file)){
        $json_users = file_get_contents($file);
        $users = json_decode($json_users, true) ?? [];
    }
    $user = array_filter($users, function($user) use($user_id){
        return $user['id'] == $user_id;
    });
?>
<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editare</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Utilizatori</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Acasa</a>
                    </li>
                </ul>
                <form class="d-flex" role="search" method="get">
                    <input class="form-control me-2" type="search" name="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="row">
            <div class="col-6 m-auto">
                <h4>Editeaza utilizatorul</h4>
                <form action="update_user.php" method="post">
                    <div class="mb-3">
                        <label for="nume">Nume</label>
                        <input type="text" name="nume" id="nume" class="form-control" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="genul">Genul</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genul" id="m" value="Masculin" checked>
                            <label class="form-check-label" for="m">
                                Masculin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genul" id="f" value="Femenin">
                            <label class="form-check-label" for="f">
                                Femenin
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="localitate">Localitate</label>
                        <select name="localitate" id="localitate" class="form-control">
                            <option>Chisinau</option>
                            <option>Cahul</option>
                            <option>Balti</option>
                            <option>Soroca</option>
                            <option>Galati</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="checkbox" name="abonat" id="abonat" class="form-check-input">
                        <label for="abonat">Doresc sa ma abonez la noutati</label>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="parola">Parola</label>
                        <input type="password" name="parola" id="parola" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-dark btn-sm">Edit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>