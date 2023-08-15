<?php
    require 'connect.php';

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $semester = $_POST['semester'];
        $ipk = $_POST['ipk'];
        $beasiswa = $_POST['beasiswa'];
        $berkas = $_POST['berkas'];

        $sql = "INSERT INTO `crud` (name,email,phone,semester,ipk,beasiswa,berkas) VALUES('$name', '$email', '$phone', '$semester', '$ipk', '$beasiswa', '$berkas')";
        $result = mysqli_query($con, $sql);

        if ($result) {
            // echo 'Data inserted successfully';
            header('location:display.php');
        } else {
            echo 'Data inserted failed';
            die(mysqli_error($con));
        }
    }

    // ambil data file
    $namaFile = $_FILES['berkas']['name'];
    $namaSementara = $_FILES['berkas']['tmp_name'];

    // tentukan lokasi file akan dipindahkan
    $dirUpload = "uploads/";

    // pindahkan file
    $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

    if ($terupload) {
        echo "Upload berhasil!<br/>";
        echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
    } else {
        echo "Upload Gagal!";
    }
?>