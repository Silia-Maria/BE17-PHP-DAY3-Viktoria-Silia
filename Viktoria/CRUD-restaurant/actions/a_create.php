<?php
require_once "./db_connect.php";
require_once "./file_upload.php";

if ($_POST) {
    $name = $_POST['name'];
    $price = $_POST['price'];

    // $files comes from the create.php from the type file
    $picture = file_upload($_FILES['picture']);
    // var_dump_pretty($_FILES['picture']);
    // echo "<br>";
    // var_dump_pretty($picture);
    $uploadError = '';
    $sql = "INSERT into dishes (name, price, image) VALUES('$name', $price, '$picture->fileName')";
    echo $sql;
    if (mysqli_query($conn, $sql)) {
        $class = "success";
        $message = "The entry below was successfully created <br>
    <table class='table w-50'><tr>
    <td> $name </td>
    <td> $price </td>
    </tr></table><hr>";
        $uploadError = ($picture->error != 0) ? $picture->ErrorMessage : '';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $conn->error;
        $uploadError = ($picture->error != 0) ? $picture->ErrorMessage : '';
    }
} else {
    header("location: ../error.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <?php require_once "../components/boot.php"; ?>
</head>

<body>
    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Create request response</h1>
        </div>
        <div class="alert alert-<?= $class; ?>" role="alert">
            <p><?= $message; ?></p>
            <p><?= $uploadError; ?></p>
            <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
        </div>
    </div>

</body>

</html>