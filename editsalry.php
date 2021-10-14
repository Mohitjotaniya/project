

<!DOCTYPE html>
<html>

<head>

<style>
			/* html {
				font-family: Tahoma, Geneva, sans-serif;
				padding: 20px;
				background-color: #F8F9F9;
			} */
			table {
				border-collapse: collapse;
				width: 500px;
			}
			td, th {
				padding: 10px;
			}
			th {
				background-color: #54585d;
				color: #ffffff;
				font-weight: bold;
				font-size: 13px;
				border: 1px solid #54585d;
			}
			td {
				color: #636363;
				border: 1px solid #dddfe1;
			}
			tr {
				background-color: #f9fafb;
			}
			tr:nth-child(odd) {
				background-color: #ffffff;
			}
			.pagination {
				list-style-type: none;
				padding: 10px 0;
				display: inline-flex;
				justify-content: space-between;
				box-sizing: border-box;
			}
			.pagination li {
				box-sizing: border-box;
				padding-right: 10px;
			}
			.pagination li a {
				box-sizing: border-box;
				background-color: #e2e6e6;
				padding: 8px;
				text-decoration: none;
				font-size: 12px;
				font-weight: bold;
				color: #616872;
				border-radius: 4px;
			}
			.pagination li a:hover {
				background-color: #d4dada;
			}
			.pagination .next a, .pagination .prev a {
				text-transform: uppercase;
				font-size: 12px;
			}
			.pagination .currentpage a {
				background-color: #518acb;
				color: #fff;
			}
			.pagination .currentpage a:hover {
				background-color: #518acb;
			}
			</style>

  <style>
    a {
      color: red;

    }
  </style>
  <style>


.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #04AA6D;
  color: white;
}



  </style>
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


   

        <div class="col-md-12 col-xs-12 ">
        <br>
          <center>
         
         <h2><b> Update Salary
           
          </center>

        </div>
 <?php foreach ($this->s_salary() as $userid1) {
            
            ?> 
       <?php  $this->s_upddata() ?>
       
 
    
<form method="POST"  enctype="multipart/form-data"  >
            <div class="container">
              <br>
              <input type="text" name="s_id" value="<?php echo $userid1['s_id'];?>" style="display: none;" >

                    <div class="row">
                    <div class="col-sm-4">
                        Month
                        <input type="text" style="width: 120%;" name="month" value="<?php echo $userid1['month'];?>"   class="form-control" readonly>

                
                        <span id="availability"></span>
                    </div>
                </div><br>
            
                    <div class="row">
                    <div class="col-sm-4">
                        Edit salary
                        <input type="number" style="width: 120%;" name="salary" value="<?php echo $userid1['salary'];?>"   class="form-control" >

                
                        <span id="availability"></span>
                    </div>
                </div><br><br><br>

                <center>  <input type="submit"   name="s_update" style="border-bottom:red solid 2px; height: 50px;; border:none; border-radius:0px 0px 0px 0px; width: 150px;" value="Submit" class="btn btn-info btn-lg"></center><br>

               
    </div>
    </form>
    <?php
    }
    ?>

    </body>

</html>

  