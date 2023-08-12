<?php
    require 'connect.php';

    $id = $_GET['userId'];

    $sql = "SELECT id, name, email, mobile, password FROM `crud` WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $password = $row['password'];

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];

        $sql = "UPDATE `crud` SET id='$id', name='$name', email='$email', mobile='$mobile', password='$password' WHERE id='$id'";
        $result = mysqli_query($con, $sql);

        if ($result) {
            echo 'Updated Successfully';
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
                <input type="text" name="name" id="name" placeholder="your name" value=<?php echo $name;?> required>
            </p>
            <p>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="your email" value=<?php echo $email;?> required>
            </p>
            <p>
                <label for="mobile">Mobile:</label>
                <input type="text" name="mobile" id="mobile" placeholder="your mobile number" value=<?php echo $mobile;?> required>
            </p>
            <p>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="your password" value=<?php echo $password;?> required>
            </p>
        </fieldset>
        <button type="submit" name="submit">Update</button>
    </form>
</body>

</html>