
<!DOCTYPE html>
<html>
   <head>
     <title>Export Data From Mysql to Excel using PHPSpreadsheet</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   </head>
   <body>
     <div class="container">
      <br />
      <h3 align="center">Export Data From Mysql to Excel using PHPSpreadsheet</h3>
      <br />
        <div class="panel panel-default">
          <div class="panel-heading">
            <form method="post">
              <div class="row">
                <div class="col-md-6">User Data</div>
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
            </form>
            <br>
          </div>
          <div class="panel-body">
          <div class="table-responsive">
           <table class="table table-striped table-bordered">
                <tr>
                  <th>id</th>
                  <th>Name</th>
                  <th>email</th>
                  <th>salry</th>
                 
                </tr>
                <?php

                foreach($this->salry() as $row)
                {
                  echo '
                  <tr>
                    <td>'.$row["id"].'</td>
                    <td>'.$row["first_name"].'</td>
                    <td>'.$row["email"].'</td>
                    <td>'.$row["salary"].'</td>
                   
                  </tr>
                  ';
                }
                ?>

              </table>
          </div>
          </div>
        </div>
     </div>
      <br />
      <br />
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  </body>
</html>