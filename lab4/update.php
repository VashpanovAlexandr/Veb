<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/style.css">
    <title>Update</title>
</head>

<body>
    <?php
    $id = 0;
    $name = '';
    $price = '';

    $xml = simplexml_load_file("data.xml") or die("Error");

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $id = $_GET['id'];

        foreach ($xml->plant as $plant)
            if ($plant['id'] == $id) {
                $name = $plant->name;
                $price = $plant->price;
                $node = $plant;
                break;
            }
    } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        foreach ($xml->plant as $plant)
            if ($plant['id'] == $id) {

                $plant->name = $_POST['name'];
                $plant->price = $_POST['price'];

                break;
            }
        $xml->saveXML('data.xml');
        header('location:admin.php');
    }
    ?>

    <form method="POST" action="update.php?id=<?= $id ?>">
        <br>
        Name: <input type="text" name="name" value="<?= $name ?>">
        <br>
        Price: <input type="text" name="price" value="<?= $price ?>">
        <br>
        <input type="hidden" value="<?= $id ?>" name="id"/>
        <input type="submit" value="Save" />
    </form>
</body>

</html>
