<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagini</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h4 class="my-4">Incarca o imagine</h4>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="file">File</label>
                <input type="file" name="file" id="file" class="form-control">
            </div>
            <button type="submit" class="btn btn-dark">Save</button>
        </form>
    </div>
    <div class="col-10 my-4 m-auto">
        <h4>Lista imaginilor din sistem</h4>
        <?php
        $imagini = scandir('uploads');
        $imagini = array_diff($imagini, [".", ".."]);
        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Imagine</td>
                    <td>Optiuni</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($imagini as $imagine): ?>
                    <tr>
                        <td>
                            <img src="uploads/<?= $imagine; ?>" alt="Imagine" class="col-1 m-0">
                        </td>
                        <td>
                            <a  href="download.php?file=<?=$imagine?>"
                                class="text-success">Descarca</a>
                            <a  href="delete.php?file=<?=$imagine?>"
                                class="text-danger"
                                onclick="return confirm('Sigur doriti sa stergeti aceasta imagine?');">Sterge</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>