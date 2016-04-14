<?php
$no=$_GET["no"];
$link=mysqli_connect("localhost,jasonson82668,jason850826");

$read="SELECT * FROM account WHERE No=".$no;
$readresult=mysqli_query($link,$read);
$result=mysqli_fetch_array($readresult);

echo "<form action='updateresult.php' method='post'>";
echo "編號:".result[0]."<br/>";
echo "<input type='hidden' name='no' value='".$result[0]."'>";
echo "使用者名稱:<input type='text' name='uName' value='".$result[1]."'><br/>";
echo "使用者密碼:<input type='password' name='uPWD' value='".$result[2]."'><br/>";
echo  "<br/> 
    <textarea cols="100" rows="20" name="uMessage"></br>
  </textarea> "
echo "<br/> 
<textarea cols="100" rows="20" name="uMail"></br>
</textarea> "

echo "<input type='submit' value='更新'>";
echo "<input type='reset'>";
echo "</form>";

?>

