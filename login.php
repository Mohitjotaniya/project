
<?php

if (isset($_SESSION["id"])) {
    echo "<script>
    window.location='./';
    </script>";
}
?>
<?php

require_once("header.php");
require_once("controller/controller.php");

?>
<br>
<html>

<head>

    
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/style.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/font-awesome.min.css'>



</head>

<body>

    <div class="card" style="width: 50rem; margin-left: 20%; background-color: whitesmoke;"><br>
        <center>
            <img src="assets/img/Brainvire-logo.png">
            <?php echo ucfirst($_SESSION["em"]);?>

            <?php
    if (isset($_SESSION['ragistor'])) {
    ?>
   
   
        <strong><?php echo $_SESSION['ragistor']; ?></strong> 
    
<?php   
    }
    unset($_SESSION['ragistor']);
?>
 
            <?php
    if (isset($_SESSION['error'])) {
    ?>
   
   
        <strong><?php echo $_SESSION['error']; ?></strong> 
    
<?php   
    }
    unset($_SESSION['error']);
?>
 
        </center>
        <div class="card-body">
            <h3 class="card-title">Login form</h3>
            <hr style="border:solid 2px">
            <!--  -->
        </div>
        <span class="text-danger">
            <?php echo $error; ?>
        </span>
           <?php
    if (isset($_SESSION['logout'])) {
    ?>
   
   
        <strong><?php echo $_SESSION['logout']; ?></strong> 
    
<?php   
    }
    unset($_SESSION['logout']);
?>
        <?php  
   
   //print_r($result);
  foreach ($this->userlogin() as $em1) 
                    {}
                        
                        
                        ?>
                                <?php echo $this->error;?>

        <form method="POST"   enctype="multipart/form-data" id="emp">

            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        Email
                        <input type="text" style="width: 120%;" name="em" class="form-control" value="<?php if(isset($_COOKIE["em"])) { echo $_COOKIE["em"]; } ?>" />
                        <span id="availability"></span>
                    </div>
                </div><br>

                <div class="row">
                    <div class="col-sm-4">
                        password
                        <input type="password" style="width: 120%;" name="pass" class="form-control" value="<?php if(isset($_COOKIE["pass"])) { echo $_COOKIE["pass"]; } ?>" />
                        <span id="availability"></span>
                    </div>
                </div><br>
               
                <div class="field-group">
                    <div><input type="checkbox" name="remember" id="remember"  />
                        <label for="remember-me">Remember me</label>
                    </div>

                </div><br>
                
                <div class="wrap-input100 validate-input">
                   
                        <img src="captcha.php" style="width: 16%;" >
                </div><br>

                <div class="row">
                    <div class="col-sm-6">

                        <input type="number" name="captcha" placeholder="Enter Captcha" style="width: 120%;"  class="form-control" />

                    </div>
                </div><br>

               
                <center> <input type="submit" name="log"
                        style="border-bottom:red solid 2px; height: 50px;; border:none; border-radius:0px 0px 0px 0px; width: 150px;"
                        value="Login" class="btn btn-info btn-lg" class="form-control"></center><br>

            </div>

    </div>
    </form>
    </div>
</body>

</html><br>
<?php 
require_once("footer.php");
?>