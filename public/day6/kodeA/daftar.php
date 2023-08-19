<?php
    require 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kampusku Aja</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex flex-col min-h-screen text-black bg-emerald-400 dark:bg-black dark:text-slate-100 justify-center">
    <?php
        require 'Header.php';
    ?>

    <main class="flex flex-col gap-4 items-center m-auto">
        <form class="border rounded-lg border-slate-100 dark:border-emerald-400 p-4 flex flex-col gap-4 w-fit" action="upload.php" method="post" enctype="multipart/form-data">
            <legend class="text-2xl font-bold text-center">Registrasi Beasiswa</legend>
            <fieldset class="flex flex-col gap-4">
                <p class="flex flex-row justify-between">
                    <label class="text-xl font-normal" for="name">Masukkan Nama</label>
                    <input class="w-max text-black" type="text" name="name" id="name" required>
                </p>
                <p class="flex flex-row justify-between">
                    <label class="text-xl font-normal" for="email">Masukkan Email</label>
                    <input class="w-max text-black" type="email" name="email" id="email" required>
                </p>
                <p class="flex flex-row justify-between">
                    <label class="text-xl font-normal" for="phone">Nomor HP</label>
                    <input class="w-max text-black" type="text" name="phone" id="phone" pattern="[0-9]*" required>
                </p>
                <p class="flex flex-row justify-between">
                    <label class="text-xl font-normal" for="semester">Semester saat ini</label>
                    <select class="w-max text-black" name="semester" id="semester">
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
                <p class="flex flex-row justify-between">
                    <label class="text-xl font-normal" for="ipk">IPK terakhir</label>
                    <input class="text-black" type="number" name="ipk" id="ipk" disabled value="1.34">
                </p>
                <p class="flex flex-row justify-between gap-4">
                    <label class="text-xl font-normal" for="beasiswa">Pilih Beasiswa</label>
                    <select class="text-black" name="beasiswa" id="beasiswa">
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
                <p class="flex flex-row justify-between">
                    <label class="text-xl font-normal" for="berkas">Upload Berkas Syarat</label>
                    <input type="file" name="berkas" id="berkas">
                </p>
            </fieldset>
            <section class="flex flex-col sm:flex-row gap-4 justify-end">
                <button class="text-lg font-bold rounded-lg bg-slate-100 dark:bg-emerald-400 px-4 py-2" type="submit" name="submit">Daftar</button>
                <button class="text-lg font-bold border border-slate-100 dark:border-emerald-400 rounded-lg px-4 py-2" type="reset">Batal</button>
            </section>
        </form>
    </main>

    <?php
        require 'Footer.php';
    ?>
</body>

</html>