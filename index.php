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
        <header class="nav-bar mb-3" style=" height:55px; background-color: lightgreen; 
        text-align:center; color:white; position:relative; width:100%;">
            <h1 >My Shop Management System</h1>
        </header>
   <div class="container my-5">
    <h2>List of Clients</h2>
    <a href="../Client/create.php" class="btn btn-primary" role="button">New Client</a><br>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>CreatedAt</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
       include "../Database/Server.php";
    // read all row from database
        $sql = "SELECT  * FROM Clients";
        $result = $link ->query($sql);
        if (!$result) {
            die("Invalid Query:" .$link ->error);
        }
    // read data of each row
        while ($row = $result->fetch_assoc()) {

            echo "
            <tr>
                <td>$row[Id]</td>
                <td>$row[Name]</td>
                <td>$row[Email]</td>
                <td>$row[Phone]</td>
                <td>$row[Address]</td>
                <td>$row[CreatedAt]</td>
                <td>
                 <a class='btn btn-primary btn-sm' href='../Client/update.php?Id=$row[Id]'>Edit</a>
                 <a class='btn btn-danger btn-sm' href='../Client/delete.php?Id=$row[Id]'>Delete</a>
                </td>
            </tr>
            ";
        }

    ?>
            
        </tbody>
    </table>

   </div>
</body>
</html>