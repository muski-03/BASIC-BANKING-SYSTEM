<?php

include('connection.php');

//selecting data to show
$sql = "SELECT * FROM `registered_users`";
$result = mysqli_query($conn, $sql);
// mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <title>Sender's Details</title>
    <link rel="stylesheet" href="style.css">

    <style>
        .textstyle_1
         {
            font-family: 'Acme', sans-serif;
         } 
         body, html 
         {
          height: 100%;
          margin: 0;
         }

        .bg-image
        {
          background-image: url("https://png.pngtree.com/thumb_back/fh260/background/20190221/ourmid/pngtree-power-bank-contrast-color-shared-banner-image_19531.jpg") ;
            /* position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%; */
          filter: blur(0px);
          -webkit-filter: blur(0px);
  
          height: 100%; 

          background-position: center;
          background-repeat: repeat;
          background-size: cover;
        }
    </style>    
</head>
<body>

<div class="bg-image">

<div>
<center>
<div style="background : margin-left:7%; width:40% ;padding: 10px 12px ;  border-radius: 10px">
<div class="boxdis">

        <?php
        session_start();
            if($_SERVER['REQUEST_METHOD']=="POST")
            {
                $sender = $_POST['NAME'];
                $_SESSION["NAME"] = $sender;
                $query = "SELECT * FROM registered_users WHERE NAME ='$sender' ";
			            $result = mysqli_query($conn,$query);
			            $registered_users = mysqli_fetch_assoc($result);        
                echo "<br><br><h1 class='textstyle_1'>SENDER'S DETAILS</h1><br><br><br>
                <h2 class='textstyle_1'> Name: " .$sender. "</h2><br><br>
                <h2 class='textstyle_1'> Email: " .$registered_users['EMAIL']. "</h2><br><br>
                <h2 class='textstyle_1'> Current Balance: " .$registered_users['CURRENT_BALANCE']. "</h2><br>";
            }
        ?>

        <br><br>
        <div class="container center">
		    <a href="transfer.php" class="btn btn-dark">Transfer to &rarr;</a><br><br>
		    <a href="select_users.php" class="btn btn-dark">Back To Previous Page</a>
	    </div>

    </div>
    </div>
</center>
</div>
</div>
</body>
</html>