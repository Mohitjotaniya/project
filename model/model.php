<?php
class model 
{
    public $connection ="";
    public function __construct()
    {
        session_start();
        try {

            $this->connection=new mysqli("localhost","admin","Admin@123","emp_mangement");
			

			if($this->connection->connect_error){
				   new Exception("Failed to connect to MySQL".$this->connection->connect_error);
			}
		}
		catch(Exception $e){
			echo 'Message: ' .$e->getMessage();
		}
      
     
    }
   
//select datatable

public function userid11($table,$search,$search1,$search2,$column,$sort_order,$offset,$limit)
{
   
    try{
        
       
             $select="SELECT * ,(select count(*) from $table)FROM $table WHERE first_name LIKE '%$search%' AND city LIKE '%$search1%' AND county LIKE '%$search2%' ORDER BY  $column $sort_order limit $offset,$limit "; 
    
                       
           $selectcount="select *,(select count(*) from $table) from $table where first_name LIKE '%$search%' AND city LIKE '%$search1%' AND county LIKE '%$search2%'ORDER BY  $column $sort_order  ";
	
    $this->result=mysqli_query($this->connection,$selectcount);
      $this->row = mysqli_num_rows($this->result);
   $this->total_pages = ceil($this->row/ $limit); 
                
            
           
              $query=mysqli_query($this->connection,$select); 
           // $query1=mysqli_query($this->connection,$selectcount);

    while($result=mysqli_fetch_array($query))
    {
        $arr[]=$result;

    }
   
    if(!$query){
        throw new Exception("fail to select data".$this->connection->error_list);
    }
    
            return $arr;
           
}catch (Exception $e) {
    echo ("Error File name :- ".$e->getFile()).'<br>';
    echo ("Error Code Line :- ".$e->getLine()).'<br>';
    
}	}

public function selalldata($table)
{
   try{ 
  $select="select * from $table";
  $query=mysqli_query($this->connection,$select);
  while($result=mysqli_fetch_array($query))
  {
    $arr[]=$result;
  }
  if(!$query){
   throw new Exception("fail to select data".$this->connection->error_list);
}
    return $arr;
}catch (Exception $e) {
   echo ("Error File name :- ".$e->getFile()).'<br>';
   echo ("Error Code Line :- ".$e->getLine()).'<br>';
   
}	}   

public function insertalldata($table,$data) 
{
   
    $k=array_keys($data);
    $kk=implode(",",$k);

    $v=array_values($data);
    $vv=implode("','",$v);
    
   try {
         $insert="insert into $table($kk) values('$vv')";  
			$query=mysqli_query($this->connection,$insert); 
                   $this->last_id = $this->connection->insert_id; 
           // echo $this->last_id; exit;    
           
			//	$result=$this->connection->query($query);
               
   


           if(!$query){
               throw new Exception("fail to Insert data".$this->connection->error_list);
           }
           return $query;	

   } catch (Exception $e) {
       echo ("Error File name :- ".$e->getFile()).'<br>';
       echo ("Error Code Line :- ".$e->getLine()).'<br>';
       
   }		 
}

public function insertimage($table,$filepath,$id) 
{
   
   
   try {
         $insert="insert into $table SET img='$filepath',ida='$id'";   
           $query=mysqli_query($this->connection,$insert); 
       

          $result=$this->connection->query($query);

           if(!$query){
               throw new Exception("fail to Insert data".$this->connection->error_list);
           }
           return $query;	

   } catch (Exception $e) {
       echo ("Error File name :- ".$e->getFile()).'<br>';
       echo ("Error Code Line :- ".$e->getLine()).'<br>';
       
   }		 
}

public function check_mime($mimetype,$file_size,$countimg) {
			
    $this->limit_img= (3);
    $this->maxsize =  2 * 1024 * 1024;;
    $this->allowedfileExtensions = array('image/png');


    if (!in_array($mimetype, $this->allowedfileExtensions)){
        return 1;
        }else {
            return 0;
        }	
        if ($file_size < $this->maxsize) {
            return 1;
        }else {
            return 0;
        }

        if ($countimg < $this->limit_img) {
            return 1;
        }else {
            return 0;
        }
    }
   
    
//user login

public function userlogin($table,$em,$encryptpass)
{
    try {

         $select="select * from $table where status='1' and email='$em' and pass='$encryptpass' "; 

      $query=mysqli_query($this->connection,$select); 
      
     $result=mysqli_fetch_array($query); 
    $no=mysqli_num_rows($query);
    if($no==1)
    {
       
        $_SESSION["id"]=$result["id"];
        $_SESSION["em"]=$result["email"];
        
        if(!$query){
            throw new Exception("fail to Insert data".$this->connection->error_list);
        }
        
        return true;
    }

    else
    {
        return false;
    }

   } catch (Exception $e) {
    echo ("Error File name :- ".$e->getFile()).'<br>';
    echo ("Error Code Line :- ".$e->getLine()).'<br>';
    
}   
    
}

//login
public function logout()
	  {
		  unset($_SESSION["id"]);
		  unset($_SESSION["em"]);
		
		  session_destroy();
		  return true;
	  }


      //update data 

public function upddata($table,$path,$fname,$lname,$em,$encryptpass,$bod ,$code,$mnum,$g,$fno,$web,$add,$city,$cou,$pc,$app,$lan,$id)
{
    try {
    session_start();
    $_SESSION['msg'] = 1;
    $upd="update $table set first_name='$fname',last_name='$lname',email='$em',pass='$encryptpass',bod='$bod',code='$code',mobile='$mnum',gender='$g',organisation='$fno',website='$web',address='$add',city='$city',county='$cou',postcade='$pc',application='$app',language='$lan',img='$path'where id='$id'";   
     $query=mysqli_query($this->connection,$upd); 

     $result=$this->connection->query($query);

     if(!$result){
         throw new Exception("fail to update data".$this->connection->error_list);
     }
    return $query;
}catch (Exception $e) {
    echo ("Error File name :- ".$e->getFile()).'<br>';
    echo ("Error Code Line :- ".$e->getLine()).'<br>';
    
}	}   

//update data 
public function upddata1($table,$fname,$lname,$em,$bod,$code,$mnum,$g,$fno,$web,$add,$city,$cou,$pc,$app,$lan,$id)
{
    try {
    session_start();
    $_SESSION['msg'] = 1;
     $upd="update $table set first_name='$fname',last_name='$lname',email='$em',bod='$bod',code='$code',mobile='$mnum',gender='$g',organisation='$fno',website='$web',address='$add',city='$city',county='$cou',postcade='$pc',application='$app',language='$lan' where id='$id'"; 
    $query=mysqli_query($this->connection,$upd);
    $result=$this->connection->query($query);
    if(!$result){
        throw new Exception("fail to update data".$this->connection->error_list);
    }
    return $query;
    

}catch (Exception $e) {
    echo ("Error File name :- ".$e->getFile()).'<br>';
    echo ("Error Code Line :- ".$e->getLine()).'<br>';
    
}	} 


public function updatesal($table,$salary,$sid)
{
    try {
    session_start();
    $_SESSION['msg'] = 1;
     $upd="update $table set salary='$salary'where s_id='$sid'";
    $query=mysqli_query($this->connection,$upd);
    $result=$this->connection->query($query);
    if(!$result){
        throw new Exception("fail to update data".$this->connection->error_list);
    }
    return $query;
    

}catch (Exception $e) {
    echo ("Error File name :- ".$e->getFile()).'<br>';
    echo ("Error Code Line :- ".$e->getLine()).'<br>';
    
}	} 


//select user id
    
public function userid($table,$id)
{
    try{  
     $select="select * from $table where id = '".$id."' ";
    $query=mysqli_query($this->connection,$select);
    while($result=mysqli_fetch_array($query))
    {
        $arr[]=$result;
    }
    if(!$query){
        throw new Exception("fail to select data".$this->connection->error_list);
    }
            return $arr;
}catch (Exception $e) {
    echo ("Error File name :- ".$e->getFile()).'<br>';
    echo ("Error Code Line :- ".$e->getLine()).'<br>';
    
}	}

public function ssalary($table,$id)
{
    try{  
      $select="select * from $table where ids = '".$id."' "; 
    $query=mysqli_query($this->connection,$select);
    while($result=mysqli_fetch_array($query))
    {
        $arr[]=$result;
    }
    if(!$query){
        throw new Exception("fail to select data".$this->connection->error_list);
    }
            return $arr;
}catch (Exception $e) {
    echo ("Error File name :- ".$e->getFile()).'<br>';
    echo ("Error Code Line :- ".$e->getLine()).'<br>';
    
}	}

public function s_salary($table,$id)
{
    try{  
      $select="select * from $table where s_id = '".$id."' "; 
    $query=mysqli_query($this->connection,$select);
    while($result=mysqli_fetch_array($query))
    {
        $arr[]=$result;
    }
    if(!$query){
        throw new Exception("fail to select data".$this->connection->error_list);
    }
            return $arr;
}catch (Exception $e) {
    echo ("Error File name :- ".$e->getFile()).'<br>';
    echo ("Error Code Line :- ".$e->getLine()).'<br>';
    
}	}

    
public function simage($table,$table1,$where,$clmname,$id)
{
    try{  
            $select="select * from $table join $table1 on $where where $clmname='$id'"; 
    $query=mysqli_query($this->connection,$select);
    while($result=mysqli_fetch_array($query))
    {
        $arr[]=$result;
    }
    if(!$query){
        throw new Exception("fail to select data".$this->connection->error_list);
    }
            return $arr;
}catch (Exception $e) {
    echo ("Error File name :- ".$e->getFile()).'<br>';
    echo ("Error Code Line :- ".$e->getLine()).'<br>';
    
}	}

public function salry($table,$table1,$where)
{
    try{  
         $select="select * from $table join $table1 on $where "; 
    $query=mysqli_query($this->connection,$select);
    while($result=mysqli_fetch_array($query))
    {
        $arr[]=$result;
    }
    if(!$query){
        throw new Exception("fail to select data".$this->connection->error_list);
    }
            return $arr;
}catch (Exception $e) {
    echo ("Error File name :- ".$e->getFile()).'<br>';
    echo ("Error Code Line :- ".$e->getLine()).'<br>';
    
}	}


public function deldata($table,$id)
    {
        $k=array_keys($id);
        $fielid=implode(",",$k);
        $v=array_values($id);
        $id=implode("','",$v);

        // session_start();
        // $_SESSION['msg2'] = 1;
          $delete="delete from $table where $fielid='$id'"; 
        $query=mysqli_query($this->connection,$delete);
        
        return $query;
    }

   
}
    ?>