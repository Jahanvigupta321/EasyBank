<?php 
include "header.php";
include "navbar.php";
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
<!doctype html>
<html lang="en">
<style>
body {
  background-image: url('images/contact.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>GRIP BANK</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<h4>
    <strong >Transaction History</strong>
</h4>
<!-- Table -->
<div class="table-responsive-sm">
    <table class="table table-hover table-striped">
        <thead style="color : black;" class="table-danger">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

$sql ="SELECT * FROM transactions";

$query =mysqli_query($connect, $sql);

while($rows = mysqli_fetch_assoc($query))
{
?>
<tr style="color : black;">
            <td class="text-center py-2"><?php echo $rows['S.no.']; ?></td>
            <td class="text-center py-2"><?php echo $rows['SENDER']; ?></td>
            <td class="text-center py-2"><?php echo $rows['RECEIVER']; ?></td>
            <td class="text-center py-2"><?php echo $rows['AMOUNT']; ?> </td>
            <td class="text-center py-2"><?php echo $rows['DATE & TIME']; ?> </td>
                
        <?php
}

        ?>
        </tbody>
    </table>

    </div>
</div>
<!-- footer -->

<div class="foot">
        <footer class="bg-light text-center text-lg-start">
            <div class="text-center p-3" style="background-color: grey;text-align:center;color:white;">
                Made by <strong>JAHANVI GUPTA</strong> :
                <a class="text-dark" href="https://www.thesparksfoundationsingapore.org/" target="_blank" style="color:white;"> The Sparks
                    Foundation </a>
            </div>
        </footer>
</body>