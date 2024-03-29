<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/style.css">
    <title>Create</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $price = $_POST['price'];

        $xml = simplexml_load_file("data.xml") or die("Error");
        
        $task = $xml->addChild('plant', '');
        $task->addChild('name', $name);
        $task->addChild('price', $price);
        $task->addAttribute('id', $xml->count());

        $xml->saveXML('data.xml');
        header('location:admin.php');
    }
    ?>

    <br>
    <form method="POST" action="create.php">
        Name: <input type="text" name="name" placeholder="kukumber">
        <br>
        Price: <input type="text" name="price" placeholder="0.0">
        <br>
        <input type="submit" value="Save">

    </form>
</body>

</html>