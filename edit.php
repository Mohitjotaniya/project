<?php
$mainurl = "http://localhost/task/";
$baseurl = "http://localhost/task/assets/";
?>
<!DOCTYPE html>
<html>

<head>


<style>

	
	#messages {
        color: red;
	
	}

	</style>
    <style>


    </style>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/style.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/font-awesome.min.css'>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
   

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>

<!-- <link rel="stylesheet" href="jquery-validation-1.19.3/demo/css/screen.css"> -->
 
<script src="jquery-validation-1.19.3/lib/jquery.js"></script>
<script src="jquery-validation-1.19.3/dist/jquery.validate.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script>
    
    
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect	: 'none',
            closeEffect	: 'none'
        });
    });
    </script>
</head>

<script>
    
          $().ready(function() {
            $("#signupForm").validate({ 
                rules:{
                    fname: "required",
                    lname: "required",
                    em: {  
					      required: true,
					      email: true
				      },
            // pass: {
            //     required: true,
            //     minlength: 8
            //   },
            // cpass: {
            //   required: true,
            //   minlength: 5,
            //   equalTo: "#pass"
            // },
            bod: {
              required: true
            },
            mnum:{
              required: true
            },
            // ga:{
            //   required: true
            // },
            fno:{
              required: true
            },
            web:{
              required: true
            },
            add:{
              required: true
            },
            pc: {
              required: true
            },  
            app:{
              required: true
            }
                    
              
              },
                messages:{
                    fname: "Firstname is required",
                    lname: "Lastname required",
                    em: "Please enter a valid email address",
                pass :{
                  required: "Please provide a password",
                  minlength: "Your password must be at least 8 characters long"
                },
                // cpass :{
                //   required: "Please Provide Confirm Password",
                //   minlength: "Your password must be at least 5 characters long",
                //   equalTo: "Please enter the same password as above"
                // },
                bod:{
                  required: "Please Provide Brithdate"
                },
                mnum:{
                  required: "Please Provide Mobile Number"
                },
                // ga:{
                //   required: "Please Check Any Gender"
                // },
                fno:{
                  required: "Please Provide Name Of Organisations"
                },
                web:{
                  required: "Pelase Provide Website"
                },
                add:{
                  required: "Please Provide Address"
                },
               
                pc:{
                  required: "Please Provide Postcode"
                },
                app:{
                  required: "Please Provide Type Of Organisatoins"
                }
                    
                    
                }
            });
        });
    </script>
<body>
   

<br>

    <div class="card" style="width: 50rem; margin-left: 20%; background-color: whitesmoke;">
        <center>
            <img src="assets/img/Brainvire-logo.png">
        </center>
        <div class="card-body">
            <h3 class="card-title">Employee Update</h3>
           
            <?php $em =$_SESSION["id"];?>
            <hr style="border:solid 2px">
        </div>

        <?php  $this->delimg()?>
        <?php foreach ($this->userid() as $userid1) {
            
            ?>
 
<?php 

$this->upddata()
             
                  
                  ?>
                  
                 
                 <?php echo  $this->error?>
        <form method="POST" enctype="multipart/form-data" id="signupForm">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    Name
                </div>
            </div>
            <input type="text" name="eid" value="<?php echo $userid1['id'];?>" style="display: none;" >
            <div class="row">
                <div class="col-sm-4">
                    <input type="text" name="fname" value="<?php echo $userid1['first_name'];?>"  >
                    fistname
                </div>
                <div class="col-sm-3">
                    <input type="text" name="lname" value="<?php echo $userid1['last_name'];?>" >
                    lastname
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm-4">
                    Email<input type="email" style="width: 120%;" name="em"value="<?php echo $userid1['email'];?>">
                </div>
            </div><br>

            <div class="row">
                <div class="col-sm-4">
                    Password<input type="password" style="width: 120%;" name="pass" id="new_pass1" >
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm-4">
                    Confirm Password<input type="password" style="width: 120%;" name="cpass" id="new_pass2"    >
                </div>
            </div><br>

            <div class="row">
                <div class="col-sm-4">
                
                    Birthdate<br><input type="date" style="width: 120%;" id="min" name="bod" value="<?php echo $userid1['bod'];?>" >
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm-4" >
                    Mobail Number
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1">
                    <input type="text" style="width: 130%;" name="code" value="<?php echo $userid1['code'];?>"><br>
                   code
                   
                </div>
                <div class="col-sm-6">
                    <input type="number" style="width: 80%;" name="mnum" value="<?php echo $userid1['mobile']; ?>"  data-bvalidator="required,minlen[10],maxlen[10],digit"><br>
                     Mobail Number
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm-4">
                <?php 


$laug=explode(",", $userid1['gender']); 

?>
                    <br><input type="radio"  name="ga" value="male" data-bvalidator="required" data-bvalidator-msg="Select one field"  <?php foreach ($laug as $value){ if($value == "male"){ echo "checked"; }} ?>>male<br>
                    <input type="radio"  name="ga" value="female" <?php foreach ($laug as $value){ if($value == "female"){ echo "checked"; }} ?>>Female
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm-4">
                    Full Nmae Organisation<br><input type="text" style="width: 220%;" name="fno"  value="<?php echo $userid1['organisation'];?>"  data-bvalidator="required">
                </div>
            </div><br>
            <?php
            if ($em === $userid1['id'] ){
        ?>
          <?php foreach (  $this->ssalary() as $key ) {
              # code...
          }?>
          <input type="text" name="sid" value="<?php echo $key['sid'];?>" style="display: none;" >
            <div class="row">
                <div class="col-sm-4">
                    Add Salary<br><input type="number" style="width: 220%;" name="sal"  value="<?php echo $key['salary'];?>"  data-bvalidator="required">
                </div>
            </div><br>
            <?php }else
         {
        ?>
           
            <?php  } 
       ?>
        <?php ucfirst($_SESSION["id"]);?>
        <div class="row">
            <div class="col-sm-4">
                Website<br><input type="url" style="width: 220%;" name="web" value="<?php echo $userid1['website'];?>" data-bvalidator="required" >
            </div>
        </div><br>


        <div class="row">
            <div class="col-sm-4">
                Address<input type="text" style="width: 120%;" name="add" value="<?php echo $userid1['address'];?>" data-bvalidator="required">address
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-2">
                
                <select name="city"  >
                    <option value="<?php echo $userid1['city'];?>"><?php echo $userid1['city'];?></option>
                    <option  value="rajkot" data-bvalidator="required">rajkot</option>
                    <option  value="surat">surat</option>
                    <option  value="bhavangar">bhavangar</option>
                  </select>
                  city

               
            </div>
            <div class="col-sm-3">
                <select name="cou" >
                    <option value="<?php echo $userid1['county'];?>"><?php echo $userid1['county'];?></option>
                    <option  value="gujrat" data-bvalidator="required">gujrat</option>
                    <option  value="mumbai">mumbai</option>
                    <option  value="up">up</option>
                  </select><br>
                  Country
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-4">
                <input type="number" style="width: 120%;" name=pc value="<?php echo $userid1['postcade'];?>" data-bvalidator="required"><br>
                Post Code
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-12">
                Type of Organisation? Please also Provide Companies House Reg Number if Application<br><input type="taxt" name="app" style="width: 80%;" value="<?php echo $userid1['application'];?>" data-bvalidator="required"><br>
                Eg. PLC, limited company LLP,other Partnreship sole trades or other
            </div>
        </div><br>

         <div class="row">
            <div class="col-sm-4">
                Language Proficiency<br>

                <?php 


 $laug=explode(",", $userid1['language']); 

?>
                <input    type="checkbox" name="ck[]" value="Php" <?php foreach ($laug as $value){ if($value == "Php"){ echo "checked"; }} ?> data-bvalidator="required">
                <label  for="vehicle1">Php</label><br>
                <input    type="checkbox" name="ck[]" value="java"  <?php foreach ($laug as $value){ if($value == "java"){ echo "checked"; }} ?>>
                <label for="vehicle2"> java</label><br>
                <input    type="checkbox"  name="ck[]" value="Net" <?php foreach ($laug as $value){ if($value == "Net"){ echo "checked"; }} ?>>
                <label for="vehicle3"> .Net</label><br>
                <input   type="checkbox"name="ck[]" value="Python" <?php foreach ($laug as $value){ if($value == "Python"){ echo "checked"; }} ?> >
                <label for="vehicle3"> Python</label><br>
                <input   type="checkbox"  name="ck[] " value="Other" <?php foreach ($laug as $value){ if($value == "Other"){ echo "checked"; }} ?> >
                <label for="vehicle3"> Other</label><br>
            </div>
            <?php foreach ($this->simage() as $userid1) {
            
            ?>
            <div class="row">
                <div class="col-sm-8">
                <input type="text" name="name" value="<?php echo $userid1['ida'];?>" style="display: none;" >
                    
               <center> <a class="fancybox" name="img[]"  href="<?php echo $userid1['img'];?>" title="Twilight Memories (doraartem)">
        <img src=<?php echo $userid1['img'];?>  style="width: 150px; height: 150px;"alt="" /> 
       
        <a href="edit?delimg=<?php echo $userid1["idimage"]
                  ?>"type="button"class="btn btn-danger ">delete</a>
    </a>  </center>
    <?php
    }
    ?>
        
                   Profile Picture (.PNG, up to 1 MB) <input type="file" style="width: 120%;" name="img[]"><br>
                   </div>
                </div>
           <br>
   
           <center>  <input type="submit"   name="update" style="border-bottom:red solid 2px; height: 50px;; border:none; border-radius:0px 0px 0px 0px; width: 150px;" value="Upadate" class="btn btn-info btn-lg"></center><br>
           <br>
            </div>
            </div>
            </div>
            </div>
            </div>
        </div>
        </form>
        <?php } ?>
        </div>
    </body>
    
    </html>
