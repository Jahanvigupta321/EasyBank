<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyBank</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        .nav-link {

            color: orange;

        }
        .navbar-brand {

            color: white;

        }
        a:hover{
          color: white;
        }
    </style>
    <link rel="icon" href="/images/tsf.png" type="image/x-icon"/>
    <link rel="stylesheet" href="home_style.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">EasyBank</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="customer_info.php">Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transactions.php">Transactions</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="flex-container-background">
        <div class="flex-container">
            <div class="flex-item-0">
                <h1 id="form_header">Your Bank at Your Fingertips.</h1>
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-1">
                
                    <div class="flex-item-login">
                        <h2 style="text-align:center;">Welcome</h2>
                    </div>

                    <div class="flex-item">
                        <form method="get" action="transfer.php">
                           <button type="submit" style="float:right;width:470px;">Money Transfer</button>
                        </form>
                    </div>

                    <div class="flex-item">
					    <form method="get" action="transactions.php">
                           <button type="submit" style="float: right;width:475px;">Transaction History</button>
						</form>
                    </div>

                    
                    </div>
                </form>
            </div>
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


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

