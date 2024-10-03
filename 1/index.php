<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discriminant of a quadratic equation</title>
</head>
<body>
    <h1>Discriminant of a quadratic equation</h1>
    <form action="" method="POST">
        <p>A <input type="number" name="a" placeholder="Value of a here" required></p>
        <p>B <input type="number" name="b" placeholder="Value of b here" required></p>
        <p>C <input type="number" name="c" placeholder="Value of c here" required></p>
        <p><input type="submit" value="Submit" name="submitBtn"></p>
    </form>

    <?php
   
    if (isset($_POST['submitBtn'])) {

        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        $discriminant = ($b * $b) - (4 * $a * $c);

        echo $discriminant;
    }
    ?>

</body>
</html>