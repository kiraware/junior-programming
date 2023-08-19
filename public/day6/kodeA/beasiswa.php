<?php
    require 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen text-black bg-emerald-400 dark:bg-black dark:text-slate-100">
    <?php
        require 'Header.php';
    ?>

    <section class="m-auto">
        <ul class="flex flex-col gap-4">
            <?php
                $sql = "SELECT nama FROM `beasiswa`";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $nama = $row['nama'];

                        echo "<li class=\"p-2 text-lg font-normal text-center border-b dark:border-emerald-400\">$nama</li>";
                    }
                }
            ?>
        </ul>
    </section>

    <?php
        require 'Footer.php';
    ?>
</body>
</html>