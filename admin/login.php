<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Login</title>
    <link rel = "icon" href ="/OnlinePizzaDelivery/img/logo.jpg" type = "image/x-icon">

<style>
   

 body {
    background-image: url(/OnlinePizzaDelivery/assets/img/image/3.jpg);
    background-size: cover;
    text-align: center;
    color: #fff;
}

.login {
    margin: 120px auto 0 auto;
}

h1 {
    font-size: 30px;
    font-weight: 700;
    text-shadow: 0 1px 4px rgba(0,0,0,.2);
}

form {
    position: relative;
    width: 350px;
    margin: 15px auto 0 auto;
    text-align: center;
}

input,select{
    width: 300px;
    height: 50px;
    margin-top: 25px;
    padding: 0 15px;
    background: rgba(45,45,45,.15);
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    border: 1px solid rgba(255,255,255,.15);
    -moz-box-shadow: 5px 5px 5px 0 rgba(11, 164, 215, 0.973) inset;
    -webkit-box-shadow: 5px 5px 5px 0 rgba(11, 164, 215, 0.973)  inset;
    box-shadow: 5px 5px 5px 0 rgba(0,0,0,.1) inset;
    font-family: 'PT Sans', Helvetica, Arial, sans-serif;
    font-size: 14px;
    color: #fff;
    text-shadow: 0 1px 2px rgba(0,0,0,.1);
    
  
}


input[type =submit] {
    cursor: pointer;
    width: 300px;
    height: 44px;
    margin-top: 25px;
    padding: 0;
    background: #ef4300;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    border: 1px solid #ff730e;
    -moz-box-shadow:
        0 15px 30px 0 rgba(255,255,255,.25) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
    -webkit-box-shadow:
        0 15px 30px 0 rgba(255,255,255,.25) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
    box-shadow:
        0 15px 30px 0 rgba(255,255,255,.25) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
    font-family: 'PT Sans', Helvetica, Arial, sans-serif;
    font-size: 14px;
    font-weight: 700;
    color: #fff;
    text-shadow: 0 1px 2px rgba(0,0,0,.1);
}


</style>
</head>
<body>
   
      
       
        <div class="login">
            <center>
            <form action="partials/_handleLogin.php" method="post">
                <div class="form-group">
                <label for="username" class="control-label"><b>Username</b></label>
                <input type="text" id="username" name="username" >
                </div>
                <div class="form-group">
                <label for="password" class="control-label"><b>Password</b></label>
                <input type="password" id="password" name="password">
                </div>
                <center><button type="submit" class="btn-sm btn-block btn-wave col-md-4 btn-dark">Login</button></center>
            </form>
            </center>   
        </div>
       
        
     


    <?php
        if(isset($_GET['loginsuccess']) && $_GET['loginsuccess']=="false"){
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Warning!</strong> Invalid Credentials
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
                </div>';
        }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>         
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
</body>
</html>