<?php
    session_start();
    $file = "users.json";
    $users = [];
    if(file_exists($file)){
        $json_users = file_get_contents($file);
        $users = json_decode($json_users, true) ?? [];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilizatori</title>
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
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Acasa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main -->
    <div class="container my-4">
        <div class="row">
            <button class="btn btn-dark btn-sm col-1" data-bs-toggle="modal" data-bs-target="#userModal">
                Adauga
            </button>
        </div>
        <div class="row mt-4">
            <?php if(isset($_SESSION['errors'])): ?>
                <div class="alert alert-danger" role="alert">
                    <ul>
                        <?php foreach( $_SESSION['errors'] as $error ): ?>
                            <li><?=$error?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <?php session_unset(); ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nume</th>
                        <th>Gen</th>
                        <th>Localitate</th>
                        <th>Email</th>
                        <th>Abonat</th>
                        <th>Optiuni</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user): ?>
                        <tr>
                            <td><?= htmlspecialchars($user['nume']) ?></td>
                            <td><?= htmlspecialchars($user['genul']) ?></td>
                            <td><?= htmlspecialchars($user['localitate']) ?></td>
                            <td><?= htmlspecialchars($user['email']) ?></td>
                            <td><?= htmlspecialchars($user['abonat']) ?></td>
                            <td>
                                <a href="sterge.php?user=<?=$user['id']?>" class="btn btn-danger btn-sm">Sterge</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End Main -->
    <!-- Modal -->
    <div class="modal fade" id="userModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Inregistreaza un utilizator</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="save_user.php" method="post">
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
                        <button type="submit" class="btn btn-dark btn-sm">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>