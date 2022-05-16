<?php
    require_once __DIR__ . '/databaseConnection.php';
    /** @var $conn mysqli */
    /** @var $db mysqli */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="ajax.js"></script>
    </head>
    <body>
        <div id="container">
            <form action="/actionAjaxFormProducts.php" method="POST" id="products" style="margin: auto;width: 700px;">
                <div class="input-group mb-3">
                    <label for="productName" class="input-group-text">Product:</label>
                    <input name="productName" class="form-control" type="text" >
                    <label for="sort" class="input-group-text">Sort:</label>
                    <select name="sort" id="sort" class="form-select">
                        <option value="price">Price</option>
                        <option value="qty">Quality</option>
                    </select>
                    <button type="submit" class="btn btn-outline-primary">Apply</button>
                </div>
            </form>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quality</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $queryResult = $db->select('products');
                    foreach($queryResult as $product) {
                    ?>
                        <tr class="productTable">
                            <th scope="row"><?= $product['id']; ?></th>
                            <td><?= $product['name']; ?></td>
                            <td><?= $product['price']; ?></td>
                            <td><?= $product['qty']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        <div>
    </body>
</html>
