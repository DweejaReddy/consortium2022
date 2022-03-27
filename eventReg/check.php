<?php
//index.php

//Include Configuration File
// include('config.php');

// $login_button = '';


// if(isset($_GET["code"]))
// {

//  $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


//  if(!isset($token['error']))
//  {
 
//   $google_client->setAccessToken($token['access_token']);

 
//   $_SESSION['access_token'] = $token['access_token'];


//   $google_service = new Google_Service_Oauth2($google_client);

 
//   $data = $google_service->userinfo->get();

 
//   if(!empty($data['given_name']))
//   {
//    $_SESSION['user_first_name'] = $data['given_name'];
//   }

//   if(!empty($data['family_name']))
//   {
//    $_SESSION['user_last_name'] = $data['family_name'];
//   }

//   if(!empty($data['email']))
//   {
//    $_SESSION['user_email_address'] = $data['email'];
//   }

//   if(!empty($data['gender']))
//   {
//    $_SESSION['user_gender'] = $data['gender'];
//   }

//   if(!empty($data['picture']))
//   {
//    $_SESSION['user_image'] = $data['picture'];
//   }
//  }
// }


// if(!isset($_SESSION['access_token']))
// {

//  $login_button = '<a href="'.$google_client->createAuthUrl().'">Login With Google</a>';
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | Consortium '22 | E-CELL, VNIT</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- local css -->
    <link rel="stylesheet" href="./css/check.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../img/favicon_io/site.webmanifest">
</head>
<body>
    <div class="track track-1">
        <div class="track-inner">
          <div class="plane-wrapper">
            <div class="plane">
              <div class="plane-tail"></div>
            </div>
          </div>
        </div>
      </div>

    
    <!-- <div class="container">
        <div class="row">
        <main class="text-center my-3 text-white">
            <h1>Sign In</h1>
            <form method="post" action="verify.php">
                <label for="email">Enter Your Registered Email ID</label><br>
                <input class="my-3 text-center" type="email" name="email" placeholder="abc@gmail.com" required><br>
                <Button id="submit" type="submit" class="btn btnth" name="submit">Sign In</Button>
            <form>
        </main>
        </div>
    </div> -->

    
    <form class="login" method="post" action="verify.php" style="max-width: 90%;">
        <h1 style="color: #d5242a;">Sign In</h1>
        <label for="email">Enter Your Registered Email ID</label><br>
        <input class="my-3 text-center" style="border: 2px solid #3a3a3a;" type="email" name="email" placeholder="abc@gmail.com" required><br>
        <div class="text-center">
        <Button style="background-color: #d5242a;" id="submit" type="submit" class="btn btnth my-3" name="submit">Sign In</Button>
        <!-- <Button style="background-color: #d5242a;margin-left:20px;font-size:16px;width:200px;" id="submit" type="submit" class="btn btnth py-2" name="submit">Sign In with Google</Button> -->
        <div class="panel panel-default">
          <?php
          // if($login_button == '')
          // {
          //   header('location:veri.php');

          // }
          // else
          // {
          //  echo '<div align="center">'.$login_button . '</div>';
          // }
          ?>
          </div>
      </div>
      </form>
    

</body>
</html>

