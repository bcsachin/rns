<html>
<style>
body{
            background-image: url("searbed.jpg");
      background-repeat: no-repeat;
      background-size: 1600px 900px ;
      text-align: center;
      color:bisque;
        }
        </style><body><?php
$con=new mysqli('127.0.0.1','root','','hostel_management');
if(!$con)
echo "helo";



$daytype1=$_POST['daytype'];
$foodtype1=$_POST['foodtype'];
$food1=$_POST['food1'];
$food2=$_POST['food2'];
$food3=$_POST['food3'];
$food4=$_POST['food4'];
$food5=$_POST['food5'];
$food6=$_POST['food6'];
$food7=$_POST['food7'];
$food8=$_POST['food8'];


$sql="insert into foodmenu values('$daytype1','$foodtype1','$food1','$food2','$food3','$food4',
'$food5','$food6','$food7','$food8')";
if(mysqli_query($con,$sql)){
echo "<img src='a.gif' >";
echo "<h1>" ;
echo "<br>" ;
echo "inserted";
echo "</h1>"; 
mysqli_close($con);
}
?>
</body>

</html>