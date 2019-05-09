<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!--    Old Bootstrap:
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>Services</title>
</head>
<body>
        <?php include 'header.php';?>
    <h3>

    <?php
             require('config/db_conn.php');
             $query = "SELECT TC_desc, TC_min_price FROM trip_categories";
             $result = $conn->query($query);
    ?>

<div class = "container mt-5">
    <h3>Our trip categories:</h3>
    <div class ="d-flex flex-wrap">
        <?php  while($row=$result->fetch_array(MYSQLI_ASSOC)){?>
            <!-- The code of cards was taken from free bootstrap samples -->
            <div class="card mb-4 shadow-sm">
              <div class="card-header">
                <h4 class="my-0 font-weight-normal">Price starting from:</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">$ <?php echo $row['TC_min_price']?></h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <?php echo $row['TC_desc']?>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-outline-primary">Select</button>
              </div>
            </div><?php
        }?>
    </div>
</div>

<!-- Old form:
    <form>
    <label>Choose your trip type: </label>
    <select name = TC_desc>
        <?php while($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
            <option value=<?php echo $row['TC_desc']?>>
            <?php echo $row['TC_desc']?></option>
            <?php }
        ?>
    </select>
</form>
-->
        </h3>
    </body>
</html>
