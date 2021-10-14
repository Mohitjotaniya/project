<?php
$connect = mysqli_connect("localhost","admin","Admin@123","emp_mangement"); 
//load state while select country

if(isset($_POST["cn"]))
{
    $cn=$_POST["cn"];
    
    $sel="select * from city join country on city.cid=country.cid where  cname='$cn'";
    $query=mysqli_query($connect,$sel);
    while($result=mysqli_fetch_array($query))

    {

        ?>

<option value="<?php echo $result["city"];?>"><?php echo $result["city"];?></option>

        <?php
    }
}


//load city while select state using ajax


// if(isset($_POST["st"]))
// {
//     $st=$_POST["st"];
//     $sel="select * from tbl_city where sid='$st'";
//     $query=mysqli_query($connect,$sel);
//     while($result=mysqli_fetch_array($query))

//     {

//         ?>

// <option value="<?php echo $result["ctid"];?>"><?php echo $result["ctname"];?></option>

//         <?php
//     }
// }

?>