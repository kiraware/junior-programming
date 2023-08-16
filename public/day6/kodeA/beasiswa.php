<?php
    require 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require 'Header.php';
    ?>

    <ul>
        <?php
            $sql = "SELECT nama FROM `beasiswa`";
            $result = mysqli_query($con, $sql);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $nama = $row['nama'];

                    echo "<li>$nama</li>";
                }
            }
        ?>
    </ul>

    <?php
        require 'Footer.php';
    ?>
</body>
</html>