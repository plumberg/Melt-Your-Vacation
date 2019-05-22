<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="сcs/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/slick/slick.css"/>
        <link rel="stylesheet" href="css/slick/slick-theme.css"/>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


	<title>Beach Tours - Melt Your Vacation</title>
</head>
<body>
        <?php include 'header.php';?>

        <div class="sl">
            <div class="sl__slide">
                <img src="img/trips/beach1.jpg" alt ="slider image"
                class="rounded mx-auto d-block" width="450" height="270">
            </div>
            <div class="sl__slide">
                <img src="img/trips/beach2.jpg" alt ="slider image"
                class="rounded mx-auto d-block" width="450" height="270">
            </div>
            <div class="sl__slide">
                <img src="img/trips/beach3.jpg" alt ="slider image"
                class="rounded mx-auto d-block" width="450" height="270">
            </div>
            <div class="sl__slide">
                <img src="img/trips/beach4.jpg" alt ="slider image"
                class="rounded mx-auto d-block" width="450" height="270">
            </div>
        </div>



<h3>

<?php
         require('config/db_conn.php');
         $query = 'SELECT T_name, T_price, T_desc FROM trip where T_category_id_fk="1"';
         $result = $conn->query($query)or die("Last error: {$conn->error}\n");
?>


<div class = "container mt-5">
<div class ="d-flex flex-wrap">
    <h3 class = "mb-3">Select your trip:</h3>
    <?php
    while($row=$result->fetch_array(MYSQLI_ASSOC)){?>

        <div class="list-group">
          <a href="cart.php" class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
              <h3 class="mb-1"><?php echo $row['T_name']?></h3>
              <small>$<?php echo $row['T_price']?></small>
            </div>
            <p class="mb-1"><?php echo $row['T_desc']?></p>
          </a>

        </div>

<?php
    }?>
</div>
</div>

    </h3>



<!--footer-->
        <hr>
        <center>
        <p>Welcome to your next vacation spot.</p>
        <p>Please for any questions contact us<br />
        <a href="mailto:anja.rzk@hotmail.com">here</a></p>
        <div id="logo">
                <p>Find your adventure now...
                <IMG SRC="img/logo.png" ALT="logo" WIDTH=140 HEIGHT=140>
                    </p>
        </div>
        </center>


<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js" type= "text/javascript"></script>
<script src="js/slick.js"></script>
<script src="js/slider.js"></script>
</body>
</html>
