<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Home_1 page</title>
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
          filter: blur(10px);
          -webkit-filter: blur(10px);
  
          height: 100%; 

          background-position: center;
          background-repeat: repeat;
          background-size: cover;
        }

        .hmmm
        {
          position: absolute;
          top: 0;
          left: 0%;

        }
        
    </style> 
</head>
<body>
    <div class="bg-image"></div>

<div class="hmmm" >
    <center>
        <h1 class="textstyle">Welcome to Bandhan Bank</h1>
        <br>
<br>
<br>
<br>
        <h2 class="textstyle">Choose a service</h2>
        </center>
        
<br>
<br>
<br>
        <div class="row">
            <div class="column">
              <div class="card">
                <center>
                <img src="https://cdn.iconscout.com/icon/free/png-512/laptop-user-1-1179329.png" alt="REGISTERED USERS" style="width:50%">
                <div class="container">
                  <p><a href="http://localhost/BANK/registered_users.php"><button class="button">VIEW REGISTERED USERS</button></a></p>
                </div>
                </center>
              </div>
            </div>
          
            <div class="column">
              <div class="card">
                <center>
                <img src="https://image.flaticon.com/icons/png/512/977/977534.png" alt="MAKE TRANSACTIONS" style="width:50%">
                <div class="container">
                  <p><a href="http://localhost/BANK/select_users.php"><button class="button">MAKE TRANSACTIONS</button></a></p>
                </div>
                </center>
              </div>
            </div>
          
            <div class="column">
              <div class="card">
                <center>  
                <img src="https://image.flaticon.com/icons/png/512/2867/2867944.png" alt="TRANSACTION HISTORY" style="width:50%">
                <div class="container">
                  <p><a href="http://localhost/BANK/transaction_history.php"><button class="button">TRANSACTION HISTORY</button></a></p>
                </div>
                </center>
              </div>
            </div>
        </div>
</div>


</body>
</html>