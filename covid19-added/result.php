<?php
if(isset($_POST['submit'])){
	$connection=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($connection,'covid19');

	$temp=$_POST['temp'];
if ($temp>99)    //2
	$point1=2;
else
	$point1=0;
	
if(!empty($_POST['sick'])){
	$point2=2;

foreach ($_POST['sick'] as $key=>$values) {  //10
	$point2=$point2+5;
}
}
else
	$point2=0;

if(!empty($_POST['addsick']))   //16+8=24
{
	$point3=0;

foreach ($_POST['addsick'] as $key=>$values) { //sick for severe symptoms and add sick for additional
	$point3=$point3+2;
}
}
else
	$point3=0;


$result=$point1+$point2+$point3;

if($result<12)  //5->7
{	
	$score="Negative";
	header("Location: result1.html");
}
elseif ($result==12)   //5->7
{
	$score="Can be positive";  //low chance
	header("Location: result2.html");
}
elseif ($result>12 && $result<20)     //5-7
{
	$score="can be Positive";   //moderate chance
	header("Location: result3.html");
}
else          //high chance  //greater than 10
{
	$score="Positive:high chance";
	header("Location: result4.html");
}

$age=$_POST['age'];
$sex=$_POST['sex'];
$temp=$_POST['temp'];


$query="INSERT INTO covid_result (age,sex,temp,result,score) values('$age','$sex','$temp','$result','$score')";
$query_run=mysqli_query($connection,$query);

if($query_run){
	echo '<script type="text/javascript"> alert("Data saved") </script>';
}
	else{
		echo '<script type="text/javascript"> alert("Data save Error") </script>';
	}


}


?>