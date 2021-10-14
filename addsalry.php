

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


   

</head>

<body>
<?php 

$this->s_insertdata()
             
                  
                  ?>
                  

<?php   $em =$_SESSION["id"];?>

<div class="col-md-12 col-xs-12 ">
        <br>
          <center>
         
         <h2><b> ADD Salary</b></h2>
           
          </center>
        
        </div>
        <form method="POST"  enctype="multipart/form-data" id="emp" >
            <div class="container">
              <br>
                <div class="row">
                    <div class="col-sm-3">
                    Month
                       <select name="month" data-bvalidator="required" class="form-control"  id="cn" onchange="return str(this.value)">
                            <option value="">Please Select</option>
                            
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>

                    
                           
                        </select><br>
                       
                        
                    </div><br>
                    <div class="row">
                    <div class="col-sm-4">
                        Add salary
                        <input type="number" style="width: 120%;"
                            value="" name="salary"
                            data-bvalidator="required" id="email" class="form-control" />
                        <span id="availability"></span>
                    </div>
                </div><br><br><br>
                <center>  <input type="submit"   name="submit" style="border-bottom:red solid 2px; height: 50px;; border:none; border-radius:0px 0px 0px 0px; width: 150px;" value="Submit" class="btn btn-info btn-lg"></center><br>


                <br><br>

           



<!-- <form method="post">
              <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-4">
                  <select name="file_type" class="form-control input-sm">
                    <option value="Xlsx">Xlsx</option>
                    <option value="Xls">Xls</option>
                    <option value="Csv">Csv</option>
                  </select>
                </div>
                <?php  $this->salary_dow()?>
                <div class="col-md-2">
                  <input type="submit" name="export" class="btn btn-primary btn-sm" value="Export" />
                 
                </div>
              </div>
            </form><br> -->
            <br>
          </div>
          <div class="panel-body">
          <div class="table-responsive">
           <table class="table table-striped table-bordered">
           <tr>
             
             <th>id</th>
             <th>name</th>
             <th>month</th>
             <th>salary</th>
            
             <th>Action</th>
          
           </tr>
               
           
  <?php 
  $result = $this->sid();
  foreach ($result as $em1) 
                    {?>

<?php 
       $this->s_delete()   
                        ?>               
            <tr>
              <td>
                <?php echo $em1["s_id"] ;?>
              </td>
              <td>
                <?php echo $em1["first_name"];?>
              </td>
              <td>
                <?php echo $em1["month"];?>
              </td>
              <td>
                <?php echo $em1["salary"];?>
              </td>
              <td><a href="<?php echo $mainurl ?>editsalry?id=<?php echo $em1["s_id"] ?>"type="button"class="btn
                  btn-success">Edit</a>|  <a href="<?php echo  $mainurl   ?>addsalry?s_del=<?php echo $em1["s_id"]
                  ?>"type="button"class="btn btn-danger ">delete</a>
                <?php  }?>
                
            </tr>
         
                     


              </table>
          </div>
          </div>
        </div>
     </div>
      <br />
      <br />
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
     <center><a href="<?php echo $mainurl ?>dwonload" class="btn btn-primary btn-lg" type="button">Download </a></center><br> 
       <!-- <button type="button" class="btn btn-primary btn-lg">Large button</button><br> -->

  </body>
</html>
  