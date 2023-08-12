<?php
    require 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <button><a href="user.php">Add User</a></button>
    <table>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Password</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT id, name, email, mobile, password FROM `crud`";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];

                        echo '<tr>';
                        echo "<th scope=\"row\">$id</th>";
                        echo "<td>$name</td>";
                        echo "<td>$email</td>";
                        echo "<td>$mobile</td>";
                        echo '<td>'.$password.'</td>'.
                        '<td>
                        <button><a href="update.php?userId='.$id.'">Update</a></button>
                        <button><a href="delete.php?userId='.$id.'">Delete</a></button>
                        </td>'.
                        '</tr>';
                    }
                }
            ?>
        </tbody>
    </table>
</body>

</html>