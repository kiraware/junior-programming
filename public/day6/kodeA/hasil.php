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

    <table>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Nomor HP</th>
                <th scope="col">Semester</th>
                <th scope="col">IPK</th>
                <th scope="col">Beasiswa</th>
                <th scope="col">Berkas</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT id, name, email, phone, semester, ipk, beasiswaId, berkas, status FROM `daftar`";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $semester = $row['semester'];
                        $ipk = $row['ipk'];
                        $beasiswaId = $row['beasiswaId'];
                        $berkas = $row['berkas'];
                        $status = $row['status'];

                        $sql = "SELECT nama FROM `beasiswa` WHERE id=$beasiswaId";
                        $result2 = mysqli_query($con, $sql);

                        $row = mysqli_fetch_assoc($result2);
                        $beasiswa = $row['nama'];

                        if ($result2) {
                            echo '<tr>';
                            echo "<th scope=\"row\">$id</th>";
                            echo "<td>$name</td>";
                            echo "<td>$email</td>";
                            echo "<td>$phone</td>";
                            echo "<td>$semester</td>";
                            echo "<td>$ipk</td>";
                            echo "<td>$beasiswa</td>";
                            echo "<td>$berkas</td>";
                            echo "<td>$status</td>";
                            echo '</tr>';
                        }
                    }
                }
            ?>
        </tbody>
    </table>

    <?php
        require 'Footer.php';
    ?>
</body>
</html>