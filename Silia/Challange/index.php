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
        <div class='d-flex my-5'>
            <img src='$row[image]' alt='...' class='dishImage me-5'>
            <div class='align-self-center ms-5'>
                    <h3>$row[name]</h3> 
                    <a class='small text-secondary text-uppercase more'>More info</a>
                    <p class='hide'>$row[description]</p>
            </div>
                    <h4 class='align-self-center ms-auto me-2 '>$row[price] €</h4>    
            
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
    require_once  "./components/font-awesome.php"
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

        <?php echo $cardbody ?>
        <!-- <div class="col-12 col-md-6 col-lg-4 mt-5">
                <div class="d-flex">
                    <img src="https://images.unsplash.com/photo-1498811008858-d95a730b2ffc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" alt="..." class="dishImage">
                    <div class="ms-5 align-self-center">
                        <div class="d-flex justify-content-between border border-success cardheading">
                            <h3>Dish Name </h3>
                            <h4 class="ms-2">price</h4>
                        </div>
                        <p class="small text-secondary">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam, id! Non, ad maxime</p>
                    </div>

                </div>
                <hr>

            </div> -->



    </div>


</body>

</html>