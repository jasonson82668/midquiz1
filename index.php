<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<h2>My First Form</h2>
<form action="" method="post">
Please input your name:<input type="text" name="uName" value="Your name here"><br/>
Please input your pwd:<input type="password" name="uPWD"><br/>
請輸入你的聯絡電話(手機):<br/> 
<textarea cols="100" rows="20" name="uMessage"></br>
</textarea> 

請輸入你的email(電子郵件):<br/> 
<textarea cols="100" rows="20" name="uMail"></br>
</textarea> 


<input type="submit" value="送出資料">

<input type="reset" value="清除資料">
</form>
<?php
if(isset($_POST["uName"])){
	$name=$_POST["uName"];
	$pwd=$_POST["uPWD"];
    $mail=$_POST["uMail"];
    $time=$_POST["uTime"];
    $message=$_POST["uMessage"];
    $number=$_POST["uNumber"];
$link=mysqli_connect("localhost,root,123456")
mysqli_query($link,"set name utf8");
$add="INSERT INTO account(name,pwd,mail,time,message,number) VALUES('$uName','$uPWD','$uMail','$uTime','$uMessage','$uNumber')";
mysqli_query($link,$add);

$read="SELECT * FROM account";
$readresult=mysqli_query($link,$read);
echo "<table border='1'>;
echo "<tr><td>使用者編號</td><td>使用者姓名</td><td>使用者密碼</td><td>更新資料</td><td>刪除資料</td></tr>";
while($result=mysqli_fetch_array($readresult)){
 echo "<tr>";
 echo "<td>" .$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td>";
 echo "<td><a href='update.php?no=".$result[0]."'>更新資料</a></td>";
 echo "<td><a href='del.php?no=".$result[0]."'>刪除資料</a></td>";
 echo "</tr>";
}

 echo "</table>";
}

?>
</body>
</html>