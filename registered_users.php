<?php 

include('connection.php');

//selecting data to show
$sql = "SELECT * FROM `registered_users`";
$result = mysqli_query($conn,$sql);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <title>Registered Users</title>
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
    <link rel="stylesheet" href="style.css">
    
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
  
          height: 150%; 

          background-position: center;
          background-repeat: repeat;
          background-size: cover;
        }

    </style>    

</head>
<body>

<div class="bg-image">

<div>
    <br><br><br>
    <div class="container">
        <center><h1 class="textstyle">USER LIST</h1></center>
        <br><br><br><br>
            <!-- <div class="row"> -->
                <!-- <div class="col"> -->
                    <center>
                    <!-- <div class="table-responsive-sm"> -->
                
			<div class="wrap-table100">
				<div class="table100">    
                    <table>
                        <thead>
                            <tr class="table100-head">
                            <th scope="col" class="column1">Sno.</th>
                            <th scope="col" class="column2">Name</th>
                            <th scope="col" class="column3">E-mail</th>
                            <th scope="col" class="column6">Current Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                    $SNO = 0;
                    while($row = mysqli_fetch_assoc($result)){
                        $SNO = $SNO + 1;
                        echo "<tr>
                        <td class='column1' scope='row'>". $SNO . "</td>
                        <td class='column2'>". $row['NAME'] . "</td>
                        <td class='column3'>". $row['EMAIL'] . "</td>
                        <td class='column6'>". $row['CURRENT_BALANCE'] . "</td>
                        </tr>";
                    }
                ?> 
                </tbody>        
                    </table>
                </div>
                </div>
            
                    <!-- <div> -->
                    </center> 
                    <br>
                    <br>
                     <a href="select_users.php" class="btn btn-dark">Select User</a>
                     <a href="https://localhost/BANK/home_1.php" class="btn btn-dark">Back</a>
                      <br> <br>
                    <!-- </div>
                    </div> -->
                </div>
            </div> 
        </div>
</div>
</div>        
</body>
</html>