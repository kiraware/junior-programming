<?php
    function f2($n) {
        return ($n * $n + $n) / 2;
    }

    $hasil = 0;
    if (isset($_POST['submit'])) {
        $hasil = f2($_POST['n']);
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
        <legend>Func 1</legend>
        <fieldset>
            <label for="n">n</label>
            <input type="number" name="n" placeholder="n">
        </fieldset>
        <button type="submit" name="submit">Submit</button>
    </form>
    <p><?php echo $hasil;?></p>
</body>
</html>