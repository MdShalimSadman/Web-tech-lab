<?php
$isPost=false;
$username="";

if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["uname"]!="")
		$username=$_POST["uname"];
	//echo "button clicked";
}
$password="";
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["pass"]!="")
		$password=$_POST["pass"];
	//echo "button clicked";
}

$radio="";
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["gender"]!="")
		$radio=$_POST["gender"];
	//echo "button clicked";
}
?>
<div >
    <center><img src="agri.jpg" height=200 width=1300  ></center>
    <br>
   <center> <h1 style="color:rgb(70,60,180)">Welcome Agriculturist</center>
   <center><p style="color:rgb(70,60,120)">Welcome to agri assistance. Help farmers to solve their problems. Please fill your informations properly </center>
   
</div>
<center>
<form action="#" method="post">
Username:<input type="text" id="uname" name="uname">
<?php
if($isPost==true && $password=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br><br>
Password:<input type="password" id="pass" name="pass">
<?php
if($isPost==true && $username=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br><br>
Gender:<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Others">Others
<?php
if($isPost==true && $radio=="")
 echo "<span style='color:red;'>Select one</span>";
?>
<br><br>

Expertizes :<input type="checkbox" name="sectors[]" value="Veterinary">Veterinary
<input type="checkbox" name="sectors[]" value="Fisheries ">Fisheries
<input type="checkbox" name="sectors[]" value="Agriculture">Agriculture
<br><br>
Institution:<select name="institute">
<option value="uniuon agriculture center">uniuon agriculture center</option>
<option value="national agriculture institute">national agriculture institute"></option>
<option value="veterinary institute">veterinary institute</option>
</select><br><br>
Address:<textarea name="address" rowspan="3" colspan="30"></textarea>
<br><br>
Bio:<textarea name="bio" rowspan="3" colspan="30"></textarea>
<br><br>
<input type="submit" value="Click" name="btnClick">
</form>
</center>