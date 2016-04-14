<?php
$name=$_POST["uName"];
$pwd=$_POST["uPWD"];
$mail=$_POST["uMail"];
$time=$_POST["uTime"];
$message=$_POST["uMessage"];
$number=$_POST["uNumber"];
//MYSQL函數

if(@mysql_connect("localhost","root","123456")){
	echo "Connection Success";
}else{
	echo "Connection Failed";
}
mysql_select_db("jason850826");
$sql="INSERT INTO account (name,pwd,mail,time,message,number) VALUES('$name','$pwd','$city''$uMail','$uTime','$uMessage','$uNumber');"
mysql_query($sql);

echo "<br/>";

$sql2="SELECT * FROM account";
$sql2_ex=mysql_query($sql2);

while($result=mysql_fetch_row($sql2_ex)){
echo $result[0];
echo "-";
echo $result[1];
echo "-";
echo $result[2];
echo "<br/>";
}

