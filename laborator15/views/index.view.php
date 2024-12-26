<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include '../views/partials/nav.php'; ?>

    <div class="container py-4">
        <h5>Lista masinelor</h5>
        <?php foreach($cars as $car): ?>
            <div class="border p-2 bg-light d-flex mb-2 justify-content-between">
                <div>
                    <?= $car->name; ?>
                    <?= $car->model; ?>
                    <?= $car->year; ?>
                    <?= $car->engine_type; ?>
                </div>
                <div class="d-flex gap-2">
                    <a href="/cars/<?=$car->id?>/edit" class="text-warning">Edit</a>
                    <a href="/cars/<?=$car->id?>" class="text-dark">Show</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>