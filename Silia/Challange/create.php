<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "./components/boot.php";
    require_once "./components/font-awesome.php"; ?>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <!-----------------------
        Nav - Bar
    ------------------------->
    <nav class="navbar navbar-expand-lg py-5">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Special's</a>
                    </li>
                </ul>
            </div>
            <div>
                <a class="navbar-brand" href="#">Bottega</a>
            </div>
            <div>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-square-twitter"></i>

            </div>
        </div>
    </nav>
    <!-----------------------
       Hero
    ------------------------->
    <div class="hero">
        <div class="text-light hero-text">
            <p class="fs-3 ms-5"> ___ </p>
            <h1>Add a New Dish to the Site</h1>
            <p class="fs-3 ms-5"> ___ </p>
        </div>
    </div>
    <!-----------------------
       Form
    ------------------------->

    <div class="container">

        <fieldset class="my-5">
            <legend class="h2 text-center mb-5">Upload your favourite Dish here:</legend>
            <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
                <table class="table table-borderless">
                    <tr>
                        <th>Name:</th>
                        <td><input type="text" name="name" class="w-100"></td>
                    </tr>
                    <tr>
                        <th>Price:</th>
                        <td><input type="text" name="price" class="w-100"></td>
                    </tr>
                    <tr>
                        <th>Description (optional):</th>
                        <td><input type="text" name="description" class="w-100"></td>
                    </tr>
                    <tr>
                        <th>Picture:</th>
                        <td><input type="file" name="picture"></td>
                    </tr>

                    <tr class="text-end">
                        <td colspan="2">
                            <a href="index.php"><button type="button" class="btn btn-outline-dark">Go Back</button></a>
                            <button type="submit" class="btn btn-outline-dark"><i class="fa-solid fa-arrow-up me-2"></i>Upload Dish</button>
                        </td>
                    </tr>

                </table>
            </form>


        </fieldset>
    </div>


</body>

</html>