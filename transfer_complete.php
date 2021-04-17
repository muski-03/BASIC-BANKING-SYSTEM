<?php

include('connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <title>Transfer Complete</title>
    <link rel="stylesheet" href="style.css">

    <style>
        h1
        {
            font-family: 'Acme', sans-serif;
            color: #52D017;
        }
    
        p
        {
            font-family: 'Acme', sans-serif;
            color: #52D017;
        }

        .error
        {
            color: #E41B17;
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
<br><br><br><br><br><br><br>      
<div style="background : #FEFCFF; margin-left:7%; width:40% ;padding: 25px 32px ;  border-radius: 15px">
    <div class="container final center">
        
        <?php

            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $sender = $_POST['Sender'];
                $receiver = $_POST['Reciever'];
                $amount = $_POST['Amount'];
            }

            if( $sender != $receiver && $amount>0){
                $sender_query = "SELECT * FROM registered_users WHERE NAME ='$sender'";
                $sConn = mysqli_query($conn,$sender_query);
                $sResult=mysqli_fetch_assoc($sConn);
                $sBalance=$sResult['CURRENT_BALANCE'];
                
                if($amount<$sBalance){
                    $receiver_query = "SELECT * FROM registered_users WHERE NAME ='$receiver'";
                    $rConn = mysqli_query($conn,$receiver_query);
                    $sResult = mysqli_fetch_array($rConn);
                    $rBalance = $sResult['CURRENT_BALANCE'];

                    echo "<h1> Congratulations! Your Transaction Process was A Success!</h1><br>
                    <p>Rs $amount has been deducted from your account and successfully transfered to $receiver.</p><br>";

                    $sBalance-=$amount;
                    $rBalance+=$amount;
                    
                    $sUpdate = "UPDATE `registered_users` SET `CURRENT_BALANCE` = '$sBalance' WHERE `registered_users`.`NAME` = '$sender';";
                    $senderLogUpdate=mysqli_query($conn,$sUpdate);

                    $rUpdate = "UPDATE `registered_users` SET `CURRENT_BALANCE` = '$rBalance' WHERE `registered_users`.`NAME` = '$receiver';";
                    $recevierLogUpdate=mysqli_query($conn,$rUpdate);

                    $history_query = "INSERT INTO `transaction` (`Sender`, `Receiver`, `Amount`, `Time`) VALUES ('$sender', '$receiver', '$amount', current_timestamp())";
                    $history = mysqli_query($conn,$history_query);
                    
                }
                else echo "<h1 class='error'>Oops! Transaction Failed!</h1><br>
                <p class='error'>Insufficient CURRENT BALANCE. Please recharge your account to proceed further.</p>";
            }
            else if($sender == $receiver){
                echo "<h1 class='error'>Transaction Failed!</h1><br>
                <p class='error'>Sender and Receiver cannot be same. Please select a different user.</p>";
            }
        ?>

        <a href='http://localhost/BANK/transfer.php' class="btn btn-dark">Back To Previous Page</a><br><br>
        <a href='transaction_history.php' class="btn btn-dark">Previous Transaction Details</a>

    </div>
</div>    
</center>
</div>
</div>

</body>
</html>