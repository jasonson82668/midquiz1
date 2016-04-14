<html>
<form action="index.php" method="post">
Please input your name:<input type="text" name="name"><br/>
Please input your path:<input type="text" name="path"><br/>
<input type="submit" value="送出資料">
<input type="reset"  value="清除資料">
</form>
</html>

<?php
if(isset($_POST["name"])){
	$name=$_POST["name"];
	$path=$_POST["path"];
	$short=$_POST["short"];
	$time=$_POST["time"];
    $number=$_POST["number"];

$link=mysqli_connect("localhost,root,012345678")
$add="INSERT INTO(name,path,short,time,number) VALUES('$name','$path','$short','$time','$number')";
mysql_query($link,$add);

$read="SELECT * FROM uploadurl";
echo "<table border='1'>;
while($result=mysql_fetch_array($read)){
 echo "<tr>";
 echo "<td>" .$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td>";
 echo "</tr>";

}

 echo "</table>";
}

?>
</body>
</html>