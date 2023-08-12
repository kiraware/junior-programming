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
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex flex-col items-center bg-gray-300 dark:bg-gray-900 py-2 sm:py-16 md:py-32 lg:py-64">
    <form method="post" class="flex flex-col items-center px-8 py-4 shadow-lg rounded-lg gap-4 bg-gray-400 dark:bg-gray-700">
        <legend class="text-2xl font-bold text-white">User</legend>
        <fieldset class="flex flex-col gap-2">
            <p class="flex flex-col sm:flex-row gap-2 justify-between">
                <label for="name" class="font-bold text-xl text-white">Name</label>
                <input type="text" name="name" id="name" placeholder="your name" required class="text-base font-normal rounded-lg px-4 py-2">
            </p>
            <p class="flex flex-col sm:flex-row gap-2 justify-between">
                <label for="email" class="font-bold text-xl text-white">Email</label>
                <input type="email" name="email" id="email" placeholder="your email" required class="text-base font-normal rounded-lg px-4 py-2">
            </p>
            <p class="flex flex-col sm:flex-row gap-2 justify-between">
                <label for="mobile" class="font-bold text-xl text-white">Mobile</label>
                <input type="text" name="mobile" id="mobile" placeholder="your mobile number" required class="text-base font-normal rounded-lg px-4 py-2">
            </p>
            <p class="flex flex-col sm:flex-row gap-2 justify-between">
                <label for="password" class="font-bold text-xl text-white">Password</label>
                <input type="password" name="password" id="password" placeholder="your password" required class="text-base font-normal rounded-lg px-4 py-2">
            </p>
        </fieldset>
        <button type="submit" name="submit" class="bg-teal-500 rounded-lg w-fit px-4 py-2 font-semibold text-base text-white">Submit</button>
    </form>
</body>

</html>