<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Category</h1>
        <form action="/category/save" method="post">
            <label>
                <input type="text" name="title">
            </label>
            <label>
                <input type="text" name="description">
            </label>
            <button type="submit">Save</button>
            <button type="reset">Cansel</button>
        </form>
        <div>
            <ul>
                <?php foreach ($res as $key => $value) : ?>
                    <li>
                        <form action="/category/delete" method="post">
                            <label>
                                <input type="text" style="display: none" name="id" value="<?php echo $value['id'] ?>">
                            </label>
                            <?php echo $value['title'] ?> => <?php echo $value['description']?>
                            <button name="id" value="<?php echo $value['id'] ?>">Delete</button>
                        </form>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </body>
</html>
