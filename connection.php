<?php 
if($conn = mysqli_connect("localhost","root",""));

if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
  else
  {
	//echo "hiii";
  }

if(mysqli_select_db($conn,"bitlwyhd_bitlit_flow"))
{
	//echo "connection successfull";
}
else
{
	//echo "connection not successfull";
}
?>