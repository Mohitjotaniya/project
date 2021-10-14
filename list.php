

<?php

if (!isset($_SESSION["id"])) {
    echo "<script>
    window.location='./';
    </script>";
}
?>
<?php

$mainurl="http://localhost/EmployeeManagement/";
$baseurl="http://localhost/EmployeeManagement/assets/";
//$results_per_page = 10;

// find out the number of results stored in database
//  $sql='SELECT * FROM employee'; 
//   $result = mysqli_query($connection, $sql); 
//  $number_of_results = mysqli_num_rows($result); 

// // determine number of total pages available
// $number_of_pages = ceil($number_of_results/$results_per_page);

// // determine which page number visitor is currently on
// if (!isset($_GET['page'])) {
//   $page = 1;
// } else {
//   $page = $_GET['page'];
// }

// determine the sql LIMIT starting number for the results on the displaying page
// $this_page_first_result = ($page-1)*$results_per_page;

// // retrieve selected results from database and display them on page
//  $sql='SELECT * FROM employee LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
// $result = mysqli_query($connection, $sql);
?>
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
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl?>css/bootstrap.min.css'>


</head>

<body>

  
  <center>
    <div class="card" style="width: 70rem;">

      <div class="card-header">
        <div class="col-md-12 col-xs-12 ">
          <center>
         
            <img src="assets/img/Brainvire-logo.png">
           
          </center>
          <br><br>
        </div>
        <center>
        <?php
    if (isset($_SESSION['error'])) {
    ?>
   
   
        <strong><?php echo $_SESSION['error']; ?></strong> 
    
<?php   
    }
    unset($_SESSION['error']);
?>
        <?php
if (isset($_SESSION['success'])) {
    ?>
  
   
     <strong><?php echo $_SESSION['success']; ?></strong> 
     <?php   
    }
    unset($_SESSION['success']);
?>


        </center>
        <div class="row">
          <div class="col-sm-4">
            <h3> EMPLOYEE LIST </h3>
          </div>
          <div class="col-sm-4"></div>

        </div>
     
        <?php $this->userid11()?>

        <form method="get">
          <br>

          show
          <select name="page">
            <option value="5"  selected <?php if (!empty($_SESSION['page'])) { echo $this->limit=='5'?'selected':'';} ?>>5</option>
            <option value="10" <?php if (!empty($_SESSION['page'])) { echo $this->limit=='10'?'selected':'';} ?>>10</option>
            <option value="20"  <?php if (!empty($_SESSION['page'])) { echo $this->limit=='20'?'selected':'';} ?>>20</option>
            <option value="50"  <?php if (!empty($_SESSION['page'])) { echo $this->limit=='50'?'selected':'';} ?>>50</option>
          </select>entries  
          
         <!-- <input type="submit" name="submit" />  -->
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          
         

          <select name="city">
          <option value="">--Select City--</option>
            <option value="rajkot" <?php if (!empty($_SESSION['city'])) { echo $this->city=='rajkot'?'selected':''; }?>>rajkot</option>
            <option value="surat" <?php if (!empty($_SESSION['city'])) { echo $this->city=='surat'?'selected':''; }?>>surat</option>
            <option value="bhavangar" <?php if (!empty($_SESSION['city'])) { echo $this->city=='bhavangar'?'selected':''; }?>>bhavangar</option>
          </select>&nbsp;&nbsp;&nbsp;&nbsp;
          <!-- <input type="submit" name="submit1"   style="display:none;"/> -->


          <select name="cou">
          <option value=""> --Select Country--</option>
            <option value="gujrat" <?php if (!empty($_SESSION['cou'])) { echo $this->cou=='gujrat'?'selected':''; }?>>gujrat</option>
            <option value="mumbai" <?php if (!empty($_SESSION['cou'])) { echo $this->cou=='mumbai'?'selected':''; }?>>mumbai</option>
            <option value="up" <?php if (!empty($_SESSION['cou'])) { echo $this->cou=='up'?'selected':''; }?>>up</option>
          </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <!-- <input type="submit" name="submit2"  /> -->
          <input type="text" name="search" placeholder="Search for names.." value="<?php if (!empty($_SESSION['search'])) {
                                                                echo $_SESSION['search'];
                                                            } ?>" title="Type in a name">
          <input type="submit" name="submit" style="display:none" ; />

        
        <br>
        <br>
        <table id="myTable" class="display" style="width:100%">
          <thead>
            <tr>



           

              <tr>
            <th><a href="list?search=<?php echo $this->search;?>&city=<?php echo $this->search1;?>&cou=<?php echo $this->search2;?>&page=<?php echo $this->limit;?>&column=id&order=<?php echo $this->asc_or_desc; ?>">iD&nbsp;<i class="fas fa-sort<?php echo $column == 'id' ? '-' . $up_or_down : ''; ?>"></i></a></th>
                
                <th><a href="list?search=<?php echo $this->search;?>&city=<?php echo $this->search1;?>&cou=<?php echo $this->search2;?>&page=<?php echo $this->limit;?>&page12=<?php echo $this->page;?>&column=first_name&order=<?php echo $this->asc_or_desc; ?>">first_name&nbsp;<i class="fas fa-sort<?php echo $column == 'first_name' ? '-' . $up_or_down : ''; ?>"></i></a></th>
                <th><a href="list?search=<?php echo $this->search;?>&city=<?php echo $this->search1;?>&cou=<?php echo $this->search2;?>&page=<?php echo $this->limit;?>&page12=<?php echo $this->page;?>&column=last_name&order=<?php echo $this->asc_or_desc; ?>">last_name&nbsp;<i class="fas fa-sort<?php echo $column == 'last_name' ? '-' . $up_or_down : ''; ?>"></i></a></th>

                <th><a href="list?search=<?php echo $this->search;?>&city=<?php echo $this->search1;?>&cou=<?php echo $this->search2;?>&page=<?php echo $this->limit;?>&page12=<?php echo $this->page;?>&column=email&order=<?php echo $this->asc_or_desc; ?>">email<i class="fas fa-sort<?php echo $column == 'email' ? '-' . $up_or_down : ''; ?>"></i></a></th>
               
                <th><a href="list?search=<?php echo $this->search;?>&city=<?php echo $this->search1;?>&cou=<?php echo $this->search2;?>&page=<?php echo $this->limit;?>&page12=<?php echo $this->page;?>&column=bod&order=<?php echo $this->asc_or_desc; ?>">bod&nbsp;<i class="fas fa-sort<?php echo $column == 'bod' ? '-' . $up_or_down : ''; ?>"></i></a></th>
                <th> City</th>
              <th> country</th>
                
                <th><a href="list?search=<?php echo $this->search;?>&city=<?php echo $this->search1;?>&cou=<?php echo $this->search2;?>&page=<?php echo $this->limit;?>&page12=<?php echo $this->page;?>&column=language&order=<?php echo $this->asc_or_desc; ?>">Language&nbsp;<i class="fas fa-sort<?php echo $column == 'language' ? '-' . $up_or_down : ''; ?>"></i></a></th>
                <th>Action</th>
            </tr>
          </tr>
          </thead>
          <tbody>
       
  <?php 
  $result = $this->userid11();
  foreach ($result as $em1) 
                    {?>
                   
            <tr>
              <td>
                <?php echo $em1["id"];?>
              </td>
              <td>
                <?php echo $em1["first_name"];?>
              </td>
              <td>
                <?php echo $em1["last_name"];?>
              </td>
              <td>
                <?php echo $em1["email"];?>
              </td>
              <td>
                <?php echo $em1["bod"];?>
              </td>
              <td>
                <?php echo $em1["city"];?>
              </td>
              <td>
                <?php echo $em1["county"];?>
              </td>
             
              <td>
                <?php echo $em1["language"];?>
              </td>
              <td><a href="<?php echo $mainurl ?>edit?id=<?php echo $em1["id"] ?>"type="button"class="btn
                  btn-success">Edit</a>| <?php 
       $this->deldata()   
                        ?> <a href="<?php echo  $mainurl   ?>list?delui=<?php echo $em1["id"]
                  ?>"type="button"class="btn btn-danger ">delete</a>
                <?php  }?>
                
            </tr>
           

                     

           
          </tbody>
          <tfoot>
            <tr>
              <th>id</th>
              <th>fname</th>
              <th>lname</th>
              <th>email</th>
              <th> bod</th>
              <th> City</th>
              <th> country</th>

              

              <th>Language</th>
              <th>Action</th>
            </tr>
          </tfoot>

        </table>
       
        <?php



?>
<br>
<!-- <a href="#" style="text-decoration: none;
  display: inline-block;
  padding: 8px 16px;" class="previous">&laquo; Previous</a>
  <a class='button'  href="list?&page12=".(i-1).">Previous</a> -->

 <?php 

$pagLink = "<ul class='pagination'>";  
$pagLink .= "<li class='active'><a href='list?page=5&search=".$this->search."&city=".$this->search1."&cou=".$this->search2."&page12=".$this->Previous."'>'
'Previous'</a></li>";
  

for ($this->i=1;$i<=$this->model->total_pages; $i++) 
{


  if (!isset($_GET['page'])) {

   
    
      $pagLink .= "<li class='active'><a href='list?page=5&search=".$this->search."&city=".$this->search1."&cou=".$this->search2."&page12=".$i."'>".$i."</a></li>";
  }            
  else  {
      $pagLink .= "<li><a  href='list?column=".($_GET['column'])."&order=".$asc_or_desc."&page=".$this->limit."&search=".$this->search."&city=".$this->search1."&cou=".$this->search2."&page12=".$i."'>".$i."</a></li>";  
  }
  
};  
   
    $pagLink .= "<li class='active'><a href='list?page=5&search=".$this->search."&city=".$this->search1."&cou=".$this->search2."&page12=".$this->NEXT."'>'
    'NEXT'</a></li>";
  

  
 
  


 echo $pagLink . "</ul>";
 
?> 
<!-- 
  $pagLink .= "<li class='active'><a href='list?page=5&search=".$this->search."&city=".$this->search1."&cou=".$this->search2."&page12=".$this->NEXT ."'>'
  'NEXT'</a></li>"; -->


</li>

      </div>
    </div>

  </center>
  </form>
</body>

</html>