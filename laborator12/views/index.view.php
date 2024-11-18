<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include '../views/nav.view.php'; ?>
    <div class="container">
        <div class="row py-2 justify-content-center h5">
            List all books
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Title</td>
                            <td>Description</td>
                            <td>Pages</td>
                            <td>Price</td>
                            <td>Author</td>
                            <td>Options</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($books->count() > 0): ?>
                            <?php foreach($books as $book): ?>
                                <tr>
                                    <td><?= $book->id ?></td>
                                    <td><?= $book->title ?></td>
                                    <td><?= $book->description ?></td>
                                    <td><?= $book->pages ?></td>
                                    <td><?= $book->price ?></td>
                                    <td><?= $book->author ?></td>
                                    <td>
                                        <a href="/edit/<?=$book->id?>" class="btn btn-warning btn-sm">Edit</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7">There are not the books</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>