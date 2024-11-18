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
            Edit book
        </div>
        <div class="row">
            <div class="col-md-6 m-auto">
                <form action="/update/<?=$book->id?>" method="post">
                    <input type="hidden" name="_METHOD" value="PUT"/>
                    <div class="mb-3">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="<?=$book->title?>">
                    </div>
                    <div class="mb-3">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control"><?=$book->description?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="pages">Pages</label>
                        <input type="number" name="pages" id="pages" class="form-control" value="<?=$book->pages?>">
                    </div>
                    <div class="mb-3">
                        <label for="price">Price</label>
                        <input type="number" name="price" id="price" class="form-control" value="<?=$book->price?>">
                    </div>
                    <div class="mb-3">
                        <label for="author">Author</label>
                        <input type="text" name="author" id="author" class="form-control" value="<?=$book->author?>">
                    </div>
                    <button type="submit" class="btn btn-dark btn-sm">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>