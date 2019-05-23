<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>Sign Up - Melt Your Vacation</title>
</head>
<body>
        <?php include 'header.php';?>

        <div class="container">
            <br>
            <form class="form-signin" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="text-center mb-4">
                    <h1 class="h3 mb-3 font-weight-bold">Create a new account:</h1>
                </div>

                <div class="form-label-group mb-3">
                    <label>Username</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Username">
                </div>

                <div class="form-label-group mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password">
                </div>
                <div class="form-label-group mb-3">
                    <label>First Name</label>
                    <input type="text" name="FName" class="form-control" placeholder="First Name">
                </div>

                <div class="form-label-group mb-3">
                    <label>Last Name</label>
                    <input type="text" name="LName" class="form-control" placeholder="Last Name">
                </div>

                <div class="form-label-group mb-3">
                    <label>Phone number</label>
                    <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                </div>

                <?php
                         require('config/db_conn.php');
                         $query = 'SELECT * FROM paymentmethods';
                         $result = $conn->query($query)or die("Last error: {$conn->error}\n");
                ?>
                <div class="form-label-group mb-3">
                    <label>Payment method</label>
                    <select class="custom-select custom-select-sm">
                    <?php while($row=$result->fetch_array(MYSQLI_ASSOC)):?>
                            <option value="<?php $row['PM_id']?>"><?php echo $row['PM_desc']?></option>
                    <?php endwhile?>
                    </select>
                </div>

                <button class="btn btn-primary" formaction="response_to_user_register.php"
                type="submit" name="submit" value="Enter">Sign Up</button>


                <p class="mt-5 mb-3 text-muted text-center">© MeltYourVacation, 2019</p>
            </form>

        </div>



    <div class="page-footer">
        <?php include 'footer.php';?>
    </div>
