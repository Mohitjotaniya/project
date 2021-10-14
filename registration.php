
<?php

if (isset($_SESSION["id"])) {
    echo "<script>
    window.location='./';
    </script>";
}
?>

<!DOCTYPE html>
<html>

<head>

    <style>
    .error {
        color: #FF0000;
    }
    </style>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/style.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/font-awesome.min.css'>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="assets/js/jquery-3.5.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <script>  
 $(document).ready(function(){
       
   $('#email').blur(function(){

     var email  = $(this).val();

     $.ajax({
        url:'check.php',

      method:"POST",
      data:{email:email,'email_check':1,    },
      success:function(data)
      {
       if(data != '0')
       {
        $('#availability').html('<span class="text-danger">email already exit</span>');
        $('#reg').attr("disabled", true);
       }
       else
       {
        $('#availability').html('<span class="text-success">email Available</span>');
        $('#reg').attr("disabled", false);
       }
      }
     })

  });
 });  
</script>
    <link rel="stylesheet" href="assets/css/gray.css" />
    <script src='assets/js/jquery.bvalidator.min.js'></script>
    <script src='assets/js/default.min.js'></script>
    <script src='assets/js/gray.js'></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {

        $("#emp").bValidator();


    });

    $(function() {
        $("#datepicker").datepicker();
    });
    </script>
    <script type="text/javascript">
    function passwordFormat(password) {
        regex = new RegExp(); // number, a-z, A-Z, min 8 chars
        if (regex.test(password))
            return true;
        return false;
    }

    function myDigitsModifier(oldValue) {
        return oldValue.replace(/[^0-9\.]/g, "") // leave only digits
    }

    function myURLModifier(oldValue) {
        if (oldValue.substring(0, 4) != 'http')
            return 'http://' + oldValue
    }
    </script>
    <script>
    $(document).ready(function() {

        $('#email').blur(function() {
            var email = $(this).val();

            $.ajax({
                url: 'check.php',
                method: "POST",
                data: {
                    email: email
                },

                success: function(data)

                {


                    if (email == '') {

                        $('#availability').html('<spam class="text-success"></spam>');
                        $('#reg').attr("disabled", false);

                    } else if (data == email) {

                        $('#availability').html(
                            '<spam class="text-danger">Email Alredy Register.</spam>');
                        $('#reg').attr("disabled", true);

                    } else if (data != email) {

                        $('#availability').html(
                            '<spam class="text-success">You Can Go With This Email.</spam>');
                        $('#reg').attr("disabled", false);

                    }

                }
            });
        });
    });
    </script> 
     <script type="text/javascript">
            function str(val) {
                $.ajax({
                    type: "POST",
                    url: "getdata.php",
                    data: "cn=" + val,

                    success: function(data) {

                        $("#st").html(data);
                    }
                });
            }
            </script>

</head>

<body>

    <div class="card" style="width: 50rem; margin-left: 20%; background-color: whitesmoke;">
        <center>
            <img src="assets/img/Brainvire-logo.png">

        </center>
        <div class="card-body">
            <h3 class="card-title">Employee Register</h3>
            <hr style="border:solid 2px">
            <!--  -->
        </div>
        <?php echo $this->error;?>
   <?php  
   
   //print_r($result);
$this->insertalldata()
                        
                        
                        ?>
                      <?php echo $this->error;?>
        <form method="POST"  enctype="multipart/form-data" id="emp" >
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        Name
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <input type="text" name="fname"
                            value="<?php if(!empty($_SESSION['fname'])) { echo $_SESSION['fname']; } ?>"
                            data-bvalidator="required,alpha, minlen[1],maxlen[10]" class="form-control" id="fname">
                        fistname
                    </div>
                    <div class="col-sm-3">
                        <input type="text" name="lname"
                            value="<?php if(!empty($_SESSION['lname'])) { echo $_SESSION['lname']; } ?>"
                            data-bvalidator="required,alpha, minlen[1],maxlen[10]" id="lname" class="form-control">
                        lastname
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-sm-4">
                        Email
                        <input type="email" style="width: 120%;"
                            value="<?php if(!empty($_SESSION['em'])) { echo $_SESSION['em']; } ?>" name="em"
                            data-bvalidator="required" id="email" class="form-control" />
                        <span id="availability"></span>
                    </div>
                </div><br>

                <div class="row">
                    <div class="col-sm-4">
                        Password<input type="password" style="width: 120%;" id="new_pass1" name="pass"
                            data-bvalidator="passwordFormat,required"
                            data-bvalidator-msg="Min 8 characters including a number, letters a-z, A-Z"
                            class="form-control">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-sm-4">
                        Confirm Password<input type="password" style="width: 120%;" id="new_pass2" name="cpass"
                            data-bvalidator="equal[new_pass1],required"
                            data-bvalidator-msg-equal="Please enter the same password again" class="form-control">
                    </div>
                </div><br>

                <div class="row">
                    <div class="col-sm-4">
                        Birthdate<br><input type="text" style="width: 120%;" name="bod"
                            value="<?php if(!empty($_SESSION['bod'])) { echo $_SESSION['bod']; } ?>" id="datepicker"
                            data-bvalidator="required" class="form-control">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-sm-4">
                        Mobail Number
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-1">
                        <input type="text" style="width: 130%;" value=+91 name="code" class="form-control">
                        code

                    </div>
                    <div class="col-sm-5">
                        <input type="number" style="width: 80%;"
                            value="<?php if(!empty($_SESSION['mnum'])) { echo $_SESSION['mnum']; } ?>" name="mnum"
                            id="phone" data-bvalidator="required,minlen[10],maxlen[10],digit" class="form-control">
                        Mobail Number
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <br><input type="radio" value="male"
                            value="<?php if(empty($_SESSION['g'])) { if($_SESSION['g'] == 'male'){ echo 'checked';  } }  ?> /> "
                            name="g" id="mg" data-bvalidator="required" data-bvalidator-msg="Select one field">Male<br>
                        <input type="radio" value="female"
                            value="<?php if(empty($_SESSION['g'])) { if($_SESSION['g'] == 'female'){ echo 'checked';  } } ?> />"
                            name="g" id="fg">Female

                        </td>
                    </div>
                </div><br>
                
                <div class="row">
                    <div class="col-sm-4">
                        Full Nmae Organisation<br><input type="taxt" style="width: 220%;"
                            value="<?php if(!empty($_SESSION['fno'])) { echo $_SESSION['fno']; } ?>" name="fno" id="fno"
                            data-bvalidator="required" class="form-control">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-sm-4">
                        Add Salary<br><input type="number" style="width: 220%;"
                            value="" name="sal" id="sal"
                            data-bvalidator="required" class="form-control">
                    </div>
                </div><br>


                <div class="row">
                    <div class="col-sm-4">
                        Website<br><input type="url" style="width: 220%;"
                            value="<?php if(!empty($_SESSION['web'])) { echo $_SESSION['web']; } ?>" name="web" id="web"
                            data-bvalidator="required" data-bvalidator-modifier="myURLModifier" class="form-control">
                    </div>
                </div><br>


                <div class="row">
                    <div class="col-sm-4">
                        Address<input type="text"
                            value="<?php if(!empty($_SESSION['add'])) { echo $_SESSION['add']; } ?>"
                            style="width: 120%;" id="address" name="add" data-bvalidator="required"
                            class="form-control">address
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-sm-3">
                       <select name="cou" data-bvalidator="required" class="form-control"  id="cn" onchange="return str(this.value)">
                            <option value="">Please Select</option>
                            <?php foreach ( $this->selallcon() as $key ) {
         ?>
                            <option value="<?php echo $key["cname"];?>"><?php echo $key["cname"];?></option>
                     <?php   }?>
                           
                        </select>
                        Country
                    </div>
                    <div class="col-sm-3">
                       <select name="city" id="st" class="form-control">
                            <option value="">-Select state-</option>
                           
                            </option>
                        </select>
                        city



                    </div>
               
        </select>
                </div><br>
                <div class="row">
                    <div class="col-sm-4">
                        <input type="number" style="width: 120%;" name=pc id="pc"
                            value="<?php if(!empty($_SESSION['pc'])) { echo $_SESSION['pc']; } ?>"
                            data-bvalidator="min[1],required" data-bvalidator-msg="Select at least one Post Code"
                            class="form-control"><br>
                        Post Code
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-sm-12">
                        Type of Organisation? Please also Provide Companies House Reg Number if Application<br><input
                            type="taxt" value="<?php if(!empty($_SESSION['app'])) { echo $_SESSION['app']; } ?>"
                            name="app" id="app" style="width: 80%;" data-bvalidator="required" class="form-control"><br>
                        Eg. PLC, limited company LLP,other Partnreship sole trades or other
                    </div>
                </div><br>

                <div class="row">
                    <div class="col-sm-4">
                        Language Proficiency<br>
                        <input type="checkbox" name="ck[]" id="php" value="Php" data-bvalidator="required">
                        <label for="vehicle1">Php</label><br>
                        <input type="checkbox" name="ck[]" id="java" value="java">
                        <label for="vehicle2"> java</label><br>
                        <input type="checkbox" name="ck[]" id="net" value="Net">
                        <label for="vehicle3"> .Net</label><br>
                        <input type="checkbox" name="ck[]" id="python" value="Python">
                        <label for="vehicle3"> Python</label><br>
                        <input type="checkbox" name="ck[] " id="other" value="Other">
                        <label for="vehicle3"> Other</label><br>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-sm-8">
                        Profile Picture (.PNG, up to 1 MB) <input type="file" style="width: 120%;" name="img[]" id="img"
                            data-bvalidator="extension[png],required" data-bvalidator-msg="select file of png"
                            multiple><br>

                    </div>
                </div><br>


                <center> <input type="submit" name="reg"
                        style="border-bottom:red solid 2px; height: 50px;; border:none; border-radius:0px 0px 0px 0px; width: 150px;"
                        value="Register" class="btn btn-info btn-lg" class="form-control"></center><br>

            </div>

    </div>
    </form>
    </div>
</body>

</html>

<script>
    $("#datepicker").datepicker({
        dateFormat: 'yy-mm-dd',
        maxDate: '0'
    });

    $("#from").datepicker({
        dateFormat: 'yy-mm-dd'
    }).bind("change", function() {
        var minValue = $(this).val();
        minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
        minValue.setDate(minValue.getDate() + 1);
        $("#to").datepicker("option", "minDate", minValue);
    })
</script>