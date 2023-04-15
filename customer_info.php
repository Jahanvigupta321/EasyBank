<?php
// Connect to the MySQL database
$connect = mysqli_connect('localhost:3307', 'root', '','bank');

// If the connection did not work, display an error message
if (!$connect) 
{
    echo 'Error Code: ' . mysqli_connect_errno() . '<br>';
    echo 'Error Message: ' . mysqli_connect_error() . '<br>';
    exit;
}

?>
<!DOCTYPE html>
<html>
<style>
body {
  background-image: url('images/contact.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  margin-top: 250px;
}
</style>
    <head>
        <title>
            Customers Details
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
        
        <?php
        include "header.php";
        include "navbar.php";
            $sql = "SELECT * FROM customers";
            $result = mysqli_query($connect, $sql);
        ?>
        <div class="container">
            <div class="row text-center">
                <div class="col text-center">
                    <div class="table-responsive-sm">
                        <table class="table table-hover table-striped table-sm">
                            <thead style="color : black;" class="table-danger">
                                <tr>
                                    <th scope="col" class="text-center py-2">S.No.</th>
                                    <th scope="col" class="text-center py-2">Name</th>
                                    <th scope="col" class="text-center py-2">E-Mail</th>
                                    <th scope="col" class="text-center py-2">Address</th>
                                    <th scope="col" class="text-center py-2">Balance</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($rows = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr style="color : black;">
                                        <td class="text-center py-2">
                                            <?php echo $rows['ID'] ?>
                                        </td>
                                        <td class="text-center py-2">
                                            <?php echo $rows['NAME'] ?>
                                        </td>
                                        <td class="text-center py-2">
                                            <?php echo $rows['EMAIL'] ?>
                                        </td>
                                        <td class="text-center py-2">
                                            <?php echo $rows['ADDRESS'] ?>
                                        </td>
                                        <td class="text-center py-2">
                                            <?php echo $rows['BALANCE'] ?>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>