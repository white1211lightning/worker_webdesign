<!DOCTYPE HTML>
<html debug="true" >
<head>
	<meta charset="utf-8" />
	<style>
		table {
			
			overflow: scroll;
		}
	</style>
</head>
<body>
	<?php
	$db_host = "localhost" ;
	$db_name = "test" ;
	$db_user = "root" ;
	$db_password = "" ;

	$dsn = "mysql:host=$db_host;dbname=$db_name";

	try {
    	$dbh = new PDO($dsn, $db_user, $db_password);
    	$dbh->exec("set names utf8");
	}catch(PDOException $s) {
		echo 'Error!: ' . $e->getMessage() . '<br />';
	}

	$sql = "SELECT name, location FROM users";
	$sth = $dbh->prepare($sql);
	 
	$sth->execute();
	 
	
	
	
	/*
    if(isset($_POST["name"]) & isset($_POST["location"])){
    	@$name = $_POST["name"];
		@$location = $_POST["location"];
    	$sql = "INSERT INTO users (name, location) VALUE(?,?)";
		$sth = $dbh->prepare($sql);
		$sth->execute(array($name,$location));
		
    }*/


       
 	//echo $result["name"] . $result["location"];
 
    //$dbh = NULL;


	?>
	<!--
	<form method="post">
		<label>姓名</label><input type="text" name="name" /><br />
		<label>地址</label><input type="text" name="location" /><br />
		<input type="submit" value="新增" />
	</form> -->

	<table align="center" cellpadding="5" cellspacing="10" frame="border" rules="all" >
		
		<thead>
			<tr>
				<th>帳號</th>
				<th>姓名</th>
				<th>生日</th>
				<th>性別</th>
				
				<th>地址</th>

				<th></th>
			</tr>

		</thead>
		<tbody>
			<?php  
				while($result = $sth->fetch(PDO::FETCH_OBJ)){
	    			echo "<tr>" ."<td>" . $result->name . "</td>" . "<td>" . "</td>" . "<td>" . "</td>". "<td>" . "</td>"  . "<td>" . $result->location ."</td>" .
	    			"<td><button>編輯</button><button>刪除</button></td>" .
	    			 "</tr>";
				}
			?>
		</tbody>
		<tfoot>


		</tfoot>

	</table>
	<div align="center">
		<input type="image" value="新增" style="background: green;" />&nbsp;
		<input type="image" value="離開" style="background: pink;"/> 
	</div>
</body>
</html>