<?php
    require 'connect.php';

    if (isset($_POST['submit'])) {
        // ambil data file
        $namaFile = $_FILES['berkas']['name'];
        $namaSementara = $_FILES['berkas']['tmp_name'];
        
        // tentukan lokasi file akan dipindahkan
        $dirUpload = "uploads/";
        
        // pindahkan file
        $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
        
        if ($terupload) {
            // echo "Upload berhasil!<br/>";
            // echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";

            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $semester = $_POST['semester'];
            $ipk = 1.34;
            $beasiswaId = $_POST['beasiswa'];
            $berkas = $dirUpload.$namaFile;
    
            $sql = "INSERT INTO `daftar` (name, email, phone, semester, ipk, beasiswaId, berkas) VALUES('$name', '$email', '$phone', '$semester', '$ipk', '$beasiswaId', '$berkas')";
            $result = mysqli_query($con, $sql);

            if ($result) {
                // echo 'Data inserted successfully';
                header('location:hasil.php');
            } else {
                echo 'Data inserted failed';
                die(mysqli_error($con));
            }
        } else {
            echo "Upload Gagal!";
        }
    }
?>