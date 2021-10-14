<?php  
//check.php  
$connect = mysqli_connect("localhost","admin","Admin@123","emp_mangement"); 
if(isset($_POST["email"]))
{
 $email = mysqli_real_escape_string($connect, $_POST["email"]);
 $query = "SELECT * FROM employee WHERE email = '".$email."'"; 
 $result = mysqli_query($connect, $query);
 //echo mysqli_num_rows($email);
 while($result1 = mysqli_fetch_array($result)){
echo $result1['email'];
}

}
?>
