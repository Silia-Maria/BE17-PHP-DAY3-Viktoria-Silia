<?php
require_once "./actions/db_connect.php";

if ($_GET['id']) {
    $id = $_GET['id'];
    # ['id'] because in index line 25 we say in href =?id!!
    $sql = "SELECT * From dishes Where dishId = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $name = $data['name'];
        $description = $data['description'];
        $price = $data['price'];
        $picture = $data['image'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "./components/boot.php" ?>
    <title>Document</title>
</head>

<body>

    <!-----------------------
       Form
    ------------------------->

    <div class="container">

        <fieldset class="my-5">
            <legend class="h2 text-center mb-5">Update this Dish here:
                <img class='img-thumbnail rounded-circle' src="pictures/<?php echo $picture ?>">
            </legend>
            <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
                <table class="table table-borderless">
                    <tr>
                        <th>Name:</th>
                        <td><input type="text" name="name" class="w-100" value="<?php echo $name ?>"></td>
                    </tr>
                    <tr>
                        <th>Price:</th>
                        <td><input type="text" name="price" class="w-100" value="<?php echo $price ?>"></td>
                    </tr>
                    <tr>
                        <th>Description (optional):</th>
                        <td><input type="text" name="description" class="w-100" value="<?php echo $description ?>"></td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input type="file" name="picture" /></td>
                    </tr>


                    <tr class="text-end">
                        <td colspan="2">
                            <a href="index.php"><button type="button" class="btn btn-outline-dark">Go Back</button></a>
                            <button type="submit" class="btn btn-outline-dark"><i class="fa-solid fa-arrow-up me-2"></i>Save Changes</button>
                        </td>
                    </tr>

                </table>
            </form>


        </fieldset>
    </div>

</body>

</html>