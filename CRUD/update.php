<?php
include "config.php";
if (isset($_POST['update'])) {
    $userid = $_GET['id'];
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE `users` SET `firstname`='$first_name ',`lastname`='$last_name ',`email`='$email',`password`='$password' WHERE `id`='$userid'";
    $result = $conn->query($sql);
    if ($result == TRUE) {
        echo "Record updated succesfully";
        header('Location:view.php');
    } else
        echo "Erorr" . $sql . "<br>" . $conn->error;
}
if (isset($_GET['id'])) {
    $userid = $_GET['id'];
    $sql = "SELECT * FROM `users` WHERE `id`='$userid'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $first_name = $row['firstname'];
            $last_name = $row['lastname'];
            $email = $row['email'];
            $password  = $row['password'];
            $id = $row['id'];
        }
?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- CSS only -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
            <title>Document</title>
        </head>

        <body>
            <div class="container">
                <table class="table">
                    <h1 class="my-5">Add Record</h1>
                    <form method="POST">
                        <tr>
                            <td><label>
                                    <h5>FirstName:</h5>
                                </label></td>
                            <td><input type="text" name="firstname" style="border-radius:5px;" value="<?php echo $first_name; ?>"></td>
                            <input type="hidden" name="user_id" value="<?php echo $id; ?>">
                        </tr>
                        <tr>
                            <td><label>
                                    <h5>LastName:</h5>
                                </label></td>
                            <td><input type="text" name="lastname" style="border-radius:5px;" value="<?php echo $last_name; ?>"></td>
                        </tr>
                        <tr>
                            <td><label>
                                    <h5>Email:</h5>
                                </label></td>
                            <td><input type="email" name="email" style="border-radius:5px;" value="<?php echo $email; ?>"></td>
                        </tr>
                        <tr>
                            <td><label>
                                    <h5>Password:</h5>
                                </label></td>
                            <td><input type="password" name="password" style="border-radius:5px;" value="<?php echo $password; ?>"></td>
                        </tr>
                </table>
                <input type="submit" name="update" value="update" class="btn btn-success">
                </form>
            </div>
        </body>

        </html>
<?php
    }
}
?>
