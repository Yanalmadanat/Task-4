<!DOCTYPE html>
<html>
<body>
<h1>Task 4</h1>
<?php
echo "Q1) Create a script using a for loop to add all the integers between 0 and 30 and display the total?"."<br>";
echo "<br>";
echo "Total =";
for($x=1;$x<=30;$x++){
if($x<30){
	echo "$x+"; 
}
else{
	echo "$x =";
}
}
$sum = 0;
for($x=1; $x<=30; $x++)
{
$sum +=$x;
}
echo "The sum of the numbers 0 to 30 is $sum";
echo "<br>"."<br>"."<hr>"."<br>";
echo "Q2) Create a script to construct the star pattern,using nested for loop?"."<br>"."<br>";
for($x=1;$x<=5;$x++)
{
   for ($y=1;$y<=$x;$y++)
    {
	 echo "*";
	 if($y< $x)
		 {
		   echo " ";
		 }
     }
 echo "<br>";
}
echo "<br>"."<hr>"."<br>";
?>
<p>Q3) Write a program to calculate and print the factorial of a number using a for loop ?</p>
<form method="post">
	<input type="number" name="number" id="number">
	<input type="submit" name="submit" value="submit">
	</form>
<br>
<br>
<?php   
 if ($_POST) {
   	$factorial = 1;
   	$number = $_POST['number'];
   	echo "The factorial of $number ="." ";
for($x=$number;$x>=1;$x--){
 $factorial *= $x;
 if ($x>1) {
  echo "$x*";
 }
 else{
 	echo  "$x=".""."$factorial";
 }
}
}
echo "<br>"."<hr>"."<br>";
?>
<table align="left" border="4" cellpadding="6" cellspacing="0" style="color: red;font-weight:bold;">
<?php
echo "Q4) Write a PHP script that creates table using for loops ?"."<br>"."<br>"; 
for($x=1;$x<=6;$x++)
{
echo "<tr>";
for ($y=1;$y<=5;$y++)
  {
  echo "<td>$x * $y = ".$x*$y."</td>";
  }
  echo "</tr>";
  }
?>
</table>
</body>
</html>