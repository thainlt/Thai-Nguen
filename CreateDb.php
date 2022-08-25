<?php 

/**
 * 
 */
class CreateDb
{
	public $servername;
	public $username;
	public $password;
	public $dbname;
	public $tablename;
	public $con;
	public function __construct(
		$dbname="Newdb",
		$tablename="Productdb",
		$servername="localhost",
		$username="root",
		$password=""	
	)
	{
		$this->dbname=$dbname;
		$this->tablename=$tablename;
		$this->servername=$servername;
		$this->username=$username;
		$this->password=$password;
		$this->con=mysqli_connect($servername,$username,$password);
		if (!$this->con) {
			die("Connection failed:".mysqli_connect_error());
		}
		$sql = "Create database if not exists $dbname";
		if(mysqli_query($this ->con,$sql)){
			$this->con = mysqli_connect($servername,$username,$password,$dbname);
			$sql = "create table if not exists $tablename
			(id INT(11) not null auto_increment primary key,
			product_name varchar(25) not null,
			product_price float,
			product_image varchar(100)
			);";
			if (!mysqli_query($this->con,$sql)) {
				echo"Error creating table:".mysqli_connect($this->con);
			}
		}else{
			return false;
		}
	}
	// public function getData(){
	// 	$sql = "select*from $this->tablename";
	// 	$result = mysqli_query($this->con,$sql);
	// 	if(mysqli_num_rows($result)>0){
	// 		return $result;
	// 	}
	// }
}
?>