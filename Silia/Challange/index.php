<!--PHP-->
<link rel="stylesheet" href="style.css">
<?php
require_once "./actions/db_connect.php";
$sql = "select * From dishes";
$result = mysqli_query($connect, $sql);
$cardbody = "";

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $cardbody .= "
        <div class='d-flex mt-4'>
            <img src='./pictures/$row[image]' alt='...' class='dishImage me-5'>
            <div class='align-self-center ms-5 dishText'>
                    <h3>$row[name]</h3> 
                    <a class='small text-secondary text-uppercase'>More info</a>
                    <p>$row[description]</p>
            </div>
                    <h4 class='align-self-center ms-auto me-2 '>$row[price] €</h4>    
            
        </div>
        <div class='text-end mb-3'>

        <a href='update.php?id=$row[dishId]'><button class='actionBtn me-2'>Update Dish</button></a>
       <a href='delete.php?id=$row[dishId]'> <button class='actionBtn'>Delete Dish</button></a>
        </div>
    <hr>    

    ";
    };
} else {
    $cardbody = 'sorry';
}

?>

<!--HTML-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "./components/boot.php";
    require_once  "./components/font-awesome.php";
    ?>
    <title>Restaurant</title>
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
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
        <div class="text-light hero-text text-center">
            <p class="fs-3"> ___ </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus voluptatum ipsa in laboriosam incidunt perspiciatis exercitationem, voluptatem officiis sed animi quidem totam, repudiandae iusto libero obcaecati molestias quibusdam sit provident at veniam nostrum. Ea facere ipsum atque reprehenderit repudiandae error est possimus dolores quam repellat. Asperiores rem mollitia veniam qui.</p>
            <p class="fs-3"> ___ </p>
        </div>
    </div>

    <!-----------------------
      Dishes Content
    ------------------------->
    <div class="container mt-5">
        <div class="d-flex justify-content-between">
            <h3>Specialties</h3>
            <a href="create.php"><button type="button" class="btn btn-outline-dark">Add new Dish</button></a>

        </div>

        <?php echo $cardbody ?>


    </div>


</body>

</html>