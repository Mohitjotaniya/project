<!DOCTYPE html>
<html>
<head>
<link href="selectExample.css" rel="stylesheet">

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  
  width: 60%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style>

</head>
<body>
<br><br>
<center>
<form method="post">
              <div class="row">
                <div class="col-md-6">  
                <!-- <label for="html">Export Data From Mysql to Excel using PHPSpreadsheet</label><br> -->
                  <select name="file_type" class="form-select" style="width: 20%;">
                    <option value="Xlsx">Xlsx</option>
                    <option value="Xls">Xls</option>
                    <option value="Csv">Csv</option>
                  </select>
                
                <?php  $this->salary_dow()?>
                <?php echo  $this->pdf()?>

                  <input type="submit" name="export" class="btn btn-primary btn-sm" value="Export" />
                  <input type="submit" name="pdf" class="btn btn-primary btn-sm" value="Export" />

              </div>
            </form><br></center>
            <br>
          </div>
         
           <table class="table table-striped table-bordered" >
           <tr>
             
             <th>id</th>
             <th>name</th>
             <th>month</th>
             <th>salary</th>
            
            
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
              
                <?php  }?>
                
            </tr>
         
                     


              </table>
              <?php echo  $this->pdf()?>
              <input type="submit" name="pdf" class="btn btn-primary btn-sm" value="Export" />
</body>
</html>
