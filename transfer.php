<?php
session_start();
$sender=$_SESSION["NAME"];

include('connection.php');
//selecting data to show
$sql = "SELECT * FROM `registered_users`";
$result = mysqli_query($conn, $sql);
$customers = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
    <title>Transfer</title>
    <link rel="stylesheet" href="style.css">
    <style>
  
        input[type=text] 
        {
            padding: 10px 15px;
            margin: 8px 0;
            border: 2px solid black;
            border-radius: 15px;
        }  
        select 
        {
            padding: 8px 8px;
            border: none;
            border-radius: 4px;
            background-color:#343a40 ;
            color:#fff;
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
    
    <section class="container transfer">
        <form action="transfer_complete.php" method="POST">
            <br><br><br><br>
            <label for="Sender"><h1 class= "textstyle">SENDER</h1></label><br><br>
            <select name="Sender" id="Sender">
                <option value="<?php echo $sender;?>" selected><?php echo $sender;?>
                </option>
            </select>
            <br><br>

            <label for="Reciever"><h1 class= "textstyle">Select a user to start transaction :</h1></label><br><br>
            <select name="Reciever" id="Reciever">
                <option value="" disabled selected>Select Reciever</option><br><br><br><br>
                <?php
                    $query = "SELECT * FROM `registered_users` ORDER BY `registered_users`.`NAME` ASC";
                    $query_run = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($query_run)) {
                        echo "<option value='".$row['NAME']."'>".$row['NAME']."</option>";
                    }
                    mysqli_close($conn);
                ?>
            </select><br><br>

            <label for="Amount"><h1 class= "textstyle">Enter the amount to transfer :</h1></label><br><br>
            <input type="number" name="Amount" id="Amount" placeholder="Amount">
            
                <button class="btn btn-dark" type="submit" id="Amount_value">Submit</button><br><br>
                <a href="select_users.php" class="btn btn-dark">Back</a>
        </form>
    </section>

</div>
</div>        
</center>    
</div>
</div>

</body>
</html>