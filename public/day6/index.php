<?php
    function luas($sisi) {
        return $sisi * $sisi;
    }

    $hasil = 0;
    if (isset($_POST['submit'])) {
        $hasil = luas($_POST['sisi']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <legend>Luas</legend>
        <fieldset>
            <label for="sisi">Sisi</label>
            <input type="number" name="sisi" placeholder="Sisi">
        </fieldset>
        <button type="submit" name="submit">Submit</button>
    </form>
    <p><?php echo $hasil;?></p>
</body>
</html>