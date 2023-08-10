<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Sederhana</title>
</head>
<body>
    <form method="POST">
        <div>
            <label>Nama</label> <br>
            <input name="n" type="number" placeholder="Masukkan n">
        </div>
        <div>
            <button>Submit</button>
        </div>
    </form>
    <?php
        function f1($n) {
            // O(n)
            $tot = 0;
            for ($x = 1; $x <= $n; $x++) {
                $tot += $x;
            }
            return $tot;
        }
        
        function f2($n) {
            // O(1)
            return $n/2 * (2 + ($n-1));
        }

        $n = (int) @$_POST['n'];
        echo f1($n), " ", f2($n), "\n";
    ?>
</body>
</html>