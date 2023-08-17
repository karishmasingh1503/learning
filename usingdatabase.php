<?php
	$host="localhost";
	$user="root";
	$password="";
	$database="learning";
	/* Here is how to connect to database (Database se connect karne k liye function) */
	$conn = mysqli_connect($host,$user,$password,$database) or die("Invalid credentials");
	$slug="";
	if(isset($_GET['slug']) && $_GET['slug']!=''){
		$slug=$_GET['slug'];
		$query="SELECT * FROM model WHERE status=1 AND brand_id='".$slug."' ORDER BY name";
		$result=mysqli_query($conn,$query);
		$num_of_rows=mysqli_num_rows($result);
		if($num_of_rows>0){
			while($model=mysqli_fetch_array($result)){
				?>
				<div style="width:200px;padding:5px;height:200px;display:inline-block;text-align:center;border:15px solid #efefef;border-radius:50%;">
					<img src="https://i.imgur.com/cpAeubz.jpg" style="height:100px;width:100px;margin-top:10px;"><br/>
					<h3>Sell Your <a href="usingdatabase.php?slug1=<?php echo $model['id']; ?>" style="text-decoration:none"><?php echo $model['name']; ?></a></h3>
				</div>
				<?php
			}
		}
	}
	else{
		$query="SELECT * FROM brand WHERE status=1 ORDER BY name";
		$result=mysqli_query($conn,$query);
		$num_of_rows=mysqli_num_rows($result);
		if($num_of_rows>0){
			while($brand=mysqli_fetch_array($result)){
				?>
				<a href="usingdatabase.php?slug=<?php echo $brand['id']; ?>"><?php echo $brand['name']; ?></a><br/>
				<?php
			}
		}
	}
	
?>