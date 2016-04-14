<?php

$no=$_GET["no"];

echo $no;



$link=mysqli_connect("localhost,root,123456");
$del="DELETE FROM account WHERE No=".$no;
mysqli_query($link,$del);


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


?>

