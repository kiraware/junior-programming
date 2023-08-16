<?php
    require 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kampusku Aja</title>
</head>

<body>
    <?php
        require 'Header.php';
    ?>

    <main>
        <h1>Daftar Beasiswa</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <legend>Registrasi Beasiswa</legend>
            <fieldset>
                <p>
                    <label for="name">Masukkan Nama</label>
                    <input type="text" name="name" id="name" required>
                </p>
                <p>
                    <label for="email">Masukkan Email</label>
                    <input type="email" name="email" id="email" required>
                </p>
                <p>
                    <label for="phone">Nomor HP</label>
                    <input type="text" name="phone" id="phone" pattern="[0-9]*" required>
                </p>
                <p>
                    <label for="semester">Semester saat ini</label>
                    <select name="semester" id="semester">
                        <option value="" disabled selected>Pilih</option>
                        <option value=1>Semester 1</option>
                        <option value=2>Semester 2</option>
                        <option value=3>Semester 3</option>
                        <option value=4>Semester 4</option>
                        <option value=5>Semester 5</option>
                        <option value=6>Semester 6</option>
                        <option value=7>Semester 7</option>
                        <option value=8>Semester 8</option>
                    </select>
                </p>
                <p>
                    <label for="ipk">IPK terakhir</label>
                    <input type="number" name="ipk" id="ipk" disabled value="1.34">
                </p>
                <p>
                    <label for="beasiswa">Pilih Beasiswa</label>
                    <select name="beasiswa" id="beasiswa">
                        <option value="" disabled selected>Pilih Beasiswa</option>
                        <?php
                            $sql = "SELECT id, nama FROM `beasiswa`";
                            $result = mysqli_query($con, $sql);
                            
                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $id = $row['id'];
                                    $nama = $row['nama'];
                                    
                                    echo "<option value=$id>$nama</option>";
                                }
                            }
                            ?>
                    </select>
                </p>
                <p>
                    <label for="berkas">Upload Berkas Syarat</label>
                    <input type="file" name="berkas" id="berkas">
                </p>
            </fieldset>
            <button type="submit" name="submit">Daftar</button>
            <button type="reset">Batal</button>
        </form>
    </main>

    <?php
        require 'Footer.php';
    ?>
</body>

</html>