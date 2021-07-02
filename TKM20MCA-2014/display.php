<html>
<head><title>display details</title></head>
<body>
<?php
include("DBConnections.php");
 
$SEARCH = $_REQUEST["SEARCH"];
 
$query = "select USERNAME,NAMEPM,DISTRICT from category_details where USERNAME like '%$SEARCH%'"; 
$result = mysqli_query($db,$query)
 
<?php while($row = mysqli_fetch_assoc($result))
{
?>
WELCOME <?php echo $row["USERNAME"];?>,Lets hold together for our future generation to make our
<?php echo $row["NAMEPM"];?>,<?php echo $row["DISTRICT"];?></td> plastic free
if(mysqli_num_rows($result)>0)
 
{
?>
<form action="success.php" method="post">
 
<table border="2" align="center" cellpadding="5" cellspacing="5">
 
<tr>
<th> ENTER YOUR ADDRESS  </th>
<td><input type="text" name="text"></td></tr>
<tr><th> ADDRESS </th>
<td><input type="text" name="text"><td></tr>
<tr><th>PHONE NUMBER</th>
<td><input type="number" name="num"></td></tr>
<th> KIND OF WASTE MATERIALS:</th>
<td><input type="radio" name="radio" value="plastic">plastic
<input type="radio" name="radio" value="other">other
</td>
</tr>
<tr>
<td>KG OF PLASTIC DEPOSITED</td>
<td><input type="number" name="kg">
</td>
</tr>
 
$action=$_POST["radio"];
$wt=$_POST["kg"];
<?php
if($action=="other")
{
    echo"we regret for our inconvinence”;
 
else if($wt<"1")
{
    echo'alert( "atlest 1 kg")';
}
else
echo "<center>details entered correctly</center>" ;
?>
