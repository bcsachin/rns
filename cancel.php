<html>
<style>
body{
            background-image: url("searbed.jpg");
      background-repeat: no-repeat;
      background-size: 1600px 900px ;
      text-align: center;
      color:bisque;
        }
        

    h3{ text-align: center;
      color:bisque;

    }   

        </style>

    <body>
    <?php
$con=new mysqli('localhost','root','','hostel_management');
if(!$con)
       {
           $str="<b> some error occured in database connectivity<b>";
       }
else
{
    echo "<b><marquee>connection is established succesfully</marquee></b>";
}
$name=$_POST['sname'];
$usn=$_POST['musn'];
$mobile=$_POST['mmobile'];
$room=$_POST['rnum'];
$bed=$_POST['bedno'];
$password=$_POST['spassword'];
/*
$sql=
*/



$sql="delete from studentdb where susn='$usn' and spassword='$password' and sroomno=$room and sbed=$bed";
if(mysqli_query($con,$sql))
{

echo "<h1><marquee>DELETED </marquee></h1>";

}

$sql="update roomdb set ravailability='YES' where rroomno=$room and rbedno=$bed";
if(mysqli_query($con,$sql))
       {
           echo "<b><marquee> update succesfully</marquee></b>";
       }
  

    
?>
</body>

</html>