    
    <?php

        include "../Database/create_server.php";
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Shop</title>
        <link rel="stylesheet" href="../CSS/bootstrap.min.css">
        <script src="../JS/bootstrap.bundle.js"></script>
    </head>
    <body>
        <nav class="nav-bar mb-3" style=" height:55px; background-color: lightgreen; text-align:center; color:white;">
            <h1 >My Shop Management System</h1>
        </nav>
        <div class="container my-5">
            <h2>New Client</h2>

                <?php
                if (!empty( $errormessage)) {
                    echo "
                    
                    <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>$errormessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>

                </div>

                    
                    ";
                }
                
                ?>

            <form method="POST">
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-6">
                        <input type="text" name="name" class="form-control" value="<?php echo $name?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-6">
                        <input type="email" name="email" class="form-control" value="<?php echo $email?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Phone</label>
                    <div class="col-sm-6">
                        <input type="text" name="phone" class="form-control" value="<?php echo $phone?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Address</label>
                    <div class="col-sm-6">
                        <input type="text" name="address" class="form-control" value="<?php echo $address?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">CreatedAt</label>
                    <div class="col-sm-6">
                        <input type="date" name="createdat" class="form-control" value="<?php echo $createdat?>">
                    </div>
                </div>

                <?php
                if (!empty( $successMessage)) {
                    echo "
                <div class ='row mb-3'>
                <div class='offset-sm-3 col-sm-6'>
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>$successMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
                </div>
                </div>
                </div>
                    ";
                }
                
                ?>

                <div class="row mb-3">
                    <div class="offset-sm-3 col-sm-3 d-grid">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    <div class=" col-sm-3 d-grid">
                        <a class="btn btn-outline-primary" href="../Client/index.php" role="button">Close</a>
                    </div>
                </div>
            </form>

        </div>
        
    </body>
    </html>