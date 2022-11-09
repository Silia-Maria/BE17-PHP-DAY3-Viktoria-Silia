<?php 
require_once "./actions/db_connect.php";

$sql= "SELECT *from dishes";

// variable that holds the results 
$result = mysqli_query($conn,$sql);

// variable that helps to push the info into the html
$tbody="";
// var_dump_pretty($result);
if (mysqli_num_rows($result)>0) {
    while($row =mysqli_fetch_assoc($result)){
        $tbody .= " 
    <tr>
        <td><img class='img-thumbnail' src='pictures/" . $row['image'] . "'></td>
       <td>" . $row['name'] . "</td>
       <td>" . $row['price'] . "</td>
        </tr>
";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    
    <!-- inserting the doc with the bootstrap links -->
    <?php 
    require_once "components/boot.php";
    ?>

<style type="text/css">
    .manageProduct {
        margin: auto;
    }

    .img-thumbnail {
        width: 70px !important;
        height: 70px !important;
    }

    td {
        text-align: left;
        vertical-align: middle;

    }

    tr {
        text-align: center;
    }
    </style>
</head>
<body>
<div class="manageProduct w-75 mt-3">
        <!-- <div class='mb-3'>
            <a href="create.php"><button class='btn btn-primary' type="button">Add product</button></a>
        </div> -->
        <p class='h2 text-center'>Dishes of the Day</p>
       
        <table class='table table-striped'>
            <thead class='table-success'>
                <tr>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Price</th>
                </tr>
            </thead>

            <!--shows the info fron the database  -->
            <tbody>
               <?php echo $tbody;?>
            </tbody>

        </table>
    </div>
    
</body>
</html>