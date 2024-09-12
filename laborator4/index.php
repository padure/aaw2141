<?php
    $continut = scandir('public');
    $continut = array_diff($continut, [".", ".."]);  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fisiere</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-5 m-auto">
                <h3 class="my-4">Adauga un fisier pe server</h3>
                <form action="fisiere.php" method="POST">
                    <div class="mb-3">
                        <label for="nume">Nume</label>
                        <input type="text" name="nume"class="form-control" placeholder="Nume" required>
                    </div>
                    <div class="mb-3">
                        <label for="continut">Continut</label>
                        <textarea type="text" name="continut" id="continut" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark">Adauga</button>
                </form>
            </div>
        </div>
        <h3>Lista fisierelor existente</h3>
        <div class="row">
            <?php foreach($continut as $fisier):?>
                <div class="border p-2">
                    <a href="public/<?=$fisier?>">
                        <?= $fisier ?>
                    </a> 
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>