<?php

require 'classroom-data.php';

$ClassData = getClass();

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Osztálynapló</title>
</head>
<body>

    <h1>Osztálynapló</h1>

    <select id="classes">

        <option value="">
            Válassz osztályt
        </option>

        <?php foreach (($ClassData) as $class): ?>

            <option value="<?= $class ?>">
                <?= $class ?>
            </option>

        <?php endforeach; ?>

    </select>
    
    <br>

    <script src="app.js"></script>

</body>
</html>