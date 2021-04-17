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
    <title>Select Users</title>
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
           color: #fff;
           background-color: #343a40;
           border-color: #343a40;  
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
<center>
<br>
<div style="background : margin-left:7%; width:40% ;padding: 10px 12px ;  border-radius: 10px">
<div class="boxdis">

<center><h1 class="textstyle">USER LIST</h1></center>  

<br><br>

<table cellpadding="10" cellspacing="10">
    <section class="container">
        <form action="single_user.php" method="POST">
          <section>

            <div class="container">
			<div class="wrap-table100">
				<div class="table100">    
                    <table>
                        <thead>
                            <tr class="table100-head">
                            <th scope="col" class="column1">Sno.</th>
                            <th scope="col" class="column2">Name</th>
                            <th scope="col" class="column3">Current Balance</th>
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
                                <td class='column3'>". $row['CURRENT_BALANCE'] . "</td>
                                </tr>";
                            }
                                
                        ?>
                        </tbody>  
                    </table>       
                </div>
            </div>

          </section>
          
            <section class="container drop-down">
            <br><br>
                <label for="NAME"><h2 style="text-shadow: 2px 2px 3px #30352cf5;" class="textstyle">Select the User from whom to Start Transaction : </h2></label><br><br>
                <select name="NAME" id="NAME">
                    <option value="" disabled selected>Select User</option><br><br><br><br>
                    <?php
                        $query = "SELECT * FROM `registered_users` ORDER BY `registered_users`.`NAME` ASC";
                        $query_run = mysqli_query($conn, $query);
            
                        while ($row = mysqli_fetch_assoc($query_run)) {
                            echo "<option value='".$row['NAME']."'>".$row['NAME']."</option>";
                        }
                        mysqli_close($conn);
                    ?>
                </select><br><br>

                <div class="container">
                    <button  class="btn btn-dark">Submit</button>
                    <br><br>
                    <a href="home_1.php" class="btn btn-dark">Back To Home</a>
                </div>
            </section>
        </form>
    </section>
    </table>
            </div> 
            </div> 
                <br>
</center>
</div>
</div>
</body>
</html>