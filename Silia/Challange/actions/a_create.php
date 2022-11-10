<?php
require_once "db_connect.php";
require_once "file_upload.php";

if ($_POST) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $uploadError = "";
    $image = file_upload($_FILES['picture']);

    $sql = "Insert into dishes (image, name, price, description) values ('$image->fileName', '$name', $price, '$description')";

    if (mysqli_query($connect, $sql) == true) {
        $class = "success";
        $message = "Your dish below was successfully uploaded and insertet, have a look at the homepage! <br> <table class='table w-50'>
<tr>$name</tr>
<tr>$price</tr>
<tr>$description</tr>
</table> <hr>";
        $uploadError = ($image->error != 0) ? $image->ErrorMessage : '';
    } else {
        $class = "danger";
        $message = "Error while creating record. Please try again. " . $connect->error;
        $uploadError = ($image->error != 0) ? $image->ErrorMessage : '';
    }
    mysqli_close($connect);
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
    <?php require_once "../components/boot.php" ?>
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Create request response</h1>
        </div>
        <div class="alert alert-<?= $class; ?>" role="alert">
            <p><?php echo ($message) ?? ''; ?></p>
            <p><?php echo ($uploadError) ?? ''; ?></p>
            <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
        </div>

</body>

</html>