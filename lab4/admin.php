<?php

$xml = simplexml_load_file("data.xml") or die("Error");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="styles/style.css">
    <title>list of plants</title>
</head>
<body>
    <h1>Plants' list</h1>
    <a href="create.php">Create new item</a>
    <br>
    <hr>
    <a href="index.php">Check main page</a>
    <hr>
    <br>
    <?php foreach ($xml->plant as $plant) { ?>
        <div class="products_item" id=<?= $plant->del_id ?>>
                <div id="<?= $plant->photo_id ?>"></div>
                <p class="products_name"><?= $plant->name ?></p>
                <p class="products_price">$ <?= $plant->price ?></p>
            </div>
            <br>
            <a href="update.php?id=<?= $plant['id']?>">Update item</a>
            <br>
            <a href="delete.php?id=<?= $plant['id']?>" onclick="return CheckDelete(this)">Delete item</a>
        </div>
        <br>
        <hr>
        <br>
    <?php }?>
    <script type="text/javascript">
        function CheckDelete(node) {
            return confirm("K");
        }
    </script>
</body>
</html>
