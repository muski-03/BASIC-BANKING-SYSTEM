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
    <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->

    <style>
        h1
        {
          font-size: 3rem;
        }

        h2
        {
          font-size: 3rem; 
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
  
          height: 200%; 

          background-position: center;
          background-repeat: repeat;
          background-size: cover;
        }

    </style>  

    <title>Transaction History</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="bg-image">

<div>
<center>
<br><br>

<center><h1 class="textstyle">TRANSACTION HISTORY</h1></center> 
<br><br>

    <section>
        
        <div class="container">
			<div class="wrap-table100">
				<div class="table100">  
                    <table>
                        <thead>
                            <tr class="table100-head">
                            <th scope="col" class="column1">Sno</th>
                            <th scope="col" class="column2">Sender</th>
                            <th scope="col" class="column3">Reciever</th>
                            <th scope="col" class="column4">Amount</th>
                            <th scope="col" class="column6">Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $sql = "SELECT * FROM transaction";
                                $result = mysqli_query($conn, $sql);
                                $nums=mysqli_num_rows($result);
                                $SNO = 0;
                                while($row=mysqli_fetch_array($result))
                                {

                                    $SNO = $SNO + 1;
                                    echo "<tr>
                                    <th class='column1' scope='row'>". $SNO . "</th>
                                    <td class='column2'>". $row['Sender'] . "</td>
                                    <td class='column3'>". $row['Receiver'] . "</td>
                                    <td class='column4'>". $row['Amount'] . "</td>
                                    <td class='column6'>". $row['Time'] . "</td>
                                    </tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <br><br>
            <a href='http://localhost/BANK/Home_1.php' class="btn btn-dark">Back To Home Page</a><br><br>

        </div>
	</section>
</div>
</div>
<br><br><br>

</center>
</div>
</div>

</body>
</html>