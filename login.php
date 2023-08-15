<!DOCTYPE html>
<!-- 参考链接：https://www.runoob.com/php/php-mysql-where.html -->
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
		$file_path = "info.txt";
		if(file_exists($file_path)){
			$fp = fopen($file_path, "w");
			$str = $_POST["id"] . PHP_EOL . $_POST["password"];
			echo(id);
			fwrite($fp, $str);
			
		}
		fclose($fp);
	?>
	<?php
			$mydbhost = "sql102.byetcluster.com";
			$mydbuser = "fr3a_33768145_li";
			$mydbpass = 'lili123123';
			$dbname = "fr3a_33768145_users";

			$conn = mysqli_connect($mydbhost, $mydbuser, $mydbpass ,$dbname);
			if(! $conn){
				die("连接失败: " . mysqli_error($conn));
			}
			 else
			{ 
				/*里面可以不写内容*/
			}
			$sql="SELECT  id,password FROM information WHERE id = $_POST[id] AND password = '$_POST[password]'";			
			$result = mysqli_query($conn, $sql);
			
			
			if($row = mysqli_fetch_array($result))
			{
				//echo $row['id'] . " " . $row['password'];
				//echo "<br>";
				$url='https://li1023.nndx.ml/';
				echo "<script>location.href='$url'</script>";
			}else{
					$url = 'http://test.nndx.ml/login/login.html';
					echo "<script> alert('账户或密码输入有误！'); </script>"; 
					echo "<meta http-equiv='Refresh' content='0;URL=$url'>";  
			}		
			
			mysqli_close($conn);
		?>
</body>
</html>
