	<?php
	
	include ('dbconnect.php');
	
	class ProductCRUD
	{
		private $msg = "";
		
		public function getMsg()
		{
			return $this->msg;
		}
		
		public function readProducts()
		{
			$data = array();
			try
			{
				global $connString;
				$conn = pg_connect($connString);
				if( $conn === false)
				{
					$this->msg = "Unable to connect PostgreSQL server.";
					return $data;
				}
				
				$query = 'select * from "products"';
				$result = pg_query($conn,$query);
					while ($row = pg_fetch_row($result))
					{
						array_push($data, array("id"=>$row[0], "name"=>$row[1], "price"=>$row[2], "image"=>$row[3], "details"=>$row[4]));
					}
					pg_close($conn);
				
			} 
			catch (Exception $e)
			{
				$this->msg = $e->getMessage();
			}
			
			return $data;
		}
		public function createProduct ($id,$name,$price,$image,$details){
			$succcess = -1;
			try {
				global $connString;
				$conn = pg_connect($connString);
				if ($conn === false) {
					$this->msg = "Unable to connect PostgreSQL Server.";
					return $succcess;
				}
					$query = 'insert into "products"(id,name,price,image,details) values($1,$2,$3,$4,$5,$6,$7,$8) returning id ';
					$params = array (&$id,&$name,&$price,&$image,&$details);
					$res = pg_query_params($conn,$query,$params);
					$row = pg_fetch_row($res);
					$succcess = $row[0];
					pg_close($conn);
					
			}catch(Exception $e) {
				$this -> msg =$e->getMessage();
				$succcess= -1;
			}
		}
		
		public function deleteProduct($id){
			$success = -1;
			try {
				global $connString;
				$conn = pg_connect($connString);
				if ( $conn === false ){
					$this->msg="Unable to connect PostqreSQL Sever.";
					return $success;
				}
				$query = 'delete from "products" where id = $1';
				$params = array (&$id);
				$res = pg_query_params($conn, $query, $params);
				if($res===FALSE) {
				 $this->msg = "Error in executing query.";
				 return $success;
				}
				$num_rows=pg_affected_rows($res);
				$success=$num_rows;
				$this->msg="";
				pg_close($conn);
			} catch(Exception $e){
				$this->msg = $e->getMessage();
				$success = -1;
			}
		}
		
		public function updateProduct($id,$name,$price,$image,$details){
			$success = -1;
			try {
				global $connString;
				$conn = pg_connect($connString);
				if ( $conn === false ){
					$this->msg="Unable to connect PostqreSQL Sever.";
					return $success;
				}
				$query = 'update "products" set name=$2, price=$3, image=$4, details=$5 where id=$1';
				$params = array (&$id,&$name,&$price,$image,$details);
				$res = pg_query_params($conn, $query, $params);
				$row= pg_fetch_row($row);
				if($res===FALSE) {
				 $this->msg= "Error in executing query.";
				 return $success;
				}
				$num_rows=pg_affected_rows($res);
				$success=$num_rows;
				$this->msg="";
				pg_close($conn);
			} catch(Exception $e){
				$this->msg = $e->getMessage();
				$success = -1;
			}
			return $success;
		}
	}
	
	?>