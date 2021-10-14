<?php
class db 
{
    public $connection ="";
    protected function __construct()
    {
        session_start();
        try {

            $this->connection=new mysqli("localhost","admin","Admin@123","emp_mangement");
			

			if($this->connection->connect_error){
				throw new Exception("Failed to connect to MySQL".$this->connection->connect_error);
			}
		}
		catch(Exception $e){
			echo 'Message: ' .$e->getMessage();
		}
      
     
    }
}?>