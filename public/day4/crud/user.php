<?php
    require 'connect.php';

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];

        $sql = "INSERT INTO `crud` (name,email,mobile,password) VALUES('$name', '$email', '$mobile', '$password')";
        $result = mysqli_query($con, $sql);

        if ($result) {
            // echo 'Data inserted successfully';
            header('location:display.php');
        } else {
            echo 'Data inserted failed';
            die(mysqli_error($con));
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <p>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" placeholder="your name" required>
            </p>
            <p>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="your email" required>
            </p>
            <p>
                <label for="mobile">Mobile:</label>
                <input type="text" name="mobile" id="mobile" placeholder="your mobile number" required>
            </p>
            <p>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="your password" required>
            </p>
        </fieldset>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>