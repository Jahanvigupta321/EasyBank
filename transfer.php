<?php
include "header.php";
include "navbar.php";
// connect to the MySQL database
$connect = mysqli_connect('localhost:3307', 'root', '','bank');

// If the connection did not work, display an error message
if (!$connect) 
{
    echo 'Error Code: ' . mysqli_connect_errno() . '<br>';
    echo 'Error Message: ' . mysqli_connect_error() . '<br>';
    exit;
}
if(isset($_POST['submit']))
{
    $from = $_POST['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from customers where ID=$from";
    $query = mysqli_query($connect,$sql);
    $sql1 = mysqli_fetch_array($query);

    $sql = "SELECT * from customers where ID=$to";
    $query = mysqli_query($connect,$sql);
    $sql2 = mysqli_fetch_array($query);
    //Conditions
    //For negative value
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Negative value cannot be transferred !")';
        echo '</script>';
    }
    //Insufficient balance
    else if($amount > $sql1['BALANCE']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Sorry! you have insufficient balance !")';
        echo '</script>';
    }
    //For 0 (zero) value
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Zero value cannot be transferred !')";
         echo "</script>";
     }


    else {
                $newbalance = $sql1['BALANCE'] - $amount;
                $sql = "UPDATE customers set BALANCE=$newbalance where ID=$from";
                mysqli_query($connect,$sql);
             
                $newbalance = $sql2['BALANCE'] + $amount;
                $sql = "UPDATE customers set BALANCE=$newbalance where ID=$to";
                mysqli_query($connect,$sql);
                
                $sender = $sql1['NAME'];
                $receiver = $sql2['NAME'];
                $sql = "INSERT INTO transactions(`SENDER`, `RECEIVER`, `AMOUNT`,`DATE & TIME`) VALUES ('$sender','$receiver','$amount',now())";
                $query=mysqli_query($connect,$sql);

                if($query){
                     echo "<script> alert('Transaction Successfully !');
                                     window.location='transactions.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
    }
    
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
    <link rel="stylesheet" href="css/style2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>
<body>
  <form method="post">
  <div class="form-group row">
    <label for="input1" class="col-sm-2 col-form-label">Sender:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="from_name"></input>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Id of the sender:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control"  name="id"></input>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Receiver:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="to_name"></input>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Id of the receiver:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control"  name="to"></input>
    </div>
  </div>
  <div class="form-group row">
  <label style="color : black;" class="col-sm-2 col-form-label"><strong>Amount:</strong></label>
  <div class="col-sm-10">
  <input type="number" class="form-control" name="amount" required></input> 
  </div>  
  </div>
  <br><br>
  <div class="text-center" >
                <button class="btn btn-outline-dark mb-3" name="submit" type="submit" id="myBtn" >Fill the Amount and Transfer</button>
            </div>
</form>
</body>