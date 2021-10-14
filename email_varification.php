<?php
 $connect = mysqli_connect("localhost","admin","Admin@123","emp_mangement"); 

if(!empty($_GET['code']) && isset($_GET['code']))
{
 $code=$_GET['code']; 
   $query = "SELECT * FROM employee WHERE activationcode='$code'";  
 $sql = mysqli_query($connect, $query);
$num=mysqli_fetch_array($sql);
if($num>0)
{
$st=0;
 $query ="SELECT id FROM employee WHERE activationcode='$code' and status='$st'";
$result = mysqli_query($connect, $query);
$result4=mysqli_fetch_array($result);
if($result4>0)
 {
$st=1;
 $result1="UPDATE employee  SET status='$st' WHERE activationcode='$code'";
$result = mysqli_query($connect, $result1);
"Your account is activated";
}
else
{
$this->msg ="Your account is already active, no need to activate again";
}
}
else
{
    $this->msg  ="Wrong activation code.";
}
}
?>
"Your account is activated"
