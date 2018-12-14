<?php 
include('include/controller.php');
if(isset($_SESSION['name']))
{
    header("location:main.php");
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rakan Musnah</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> <!-- Bootstrap location -->
    <link rel="stylesheet" type="text/css" href="css/main.css"> <!-- css location -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

  </head>

  <body>

    <form id="logForm" class="loginForm" method="post" 
        enctype = "multipart/form-data"> 
      <h2>LOGIN LA BODOH SEBELUM KAU JADI ANOL!</h2>
        <div class="input-group">
            <input type="text" name="name" id="name" placeholder="username" value="<?php echo $name; ?>"
            required name="name"/><?php echo $usernameErr; ?>
        </div>
        <div class="input-group">
            <input type="password" name="pass" id="pass" placeholder="password" required name="pass"/>
            <?php echo $passwordErr; ?>
        </div>
        <div class="input-group">           
            <button type='submit' name='login' id="login" class='btn btn-primary'>Enter</button>
        </div>
    </form>

  </body>
</html>