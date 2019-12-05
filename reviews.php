<html>
<style>
    body{
            background-image: url("sd.jpg");
      background-repeat: no-repeat;
      background-size: 1600px 900px ;
      text-align: center;
      color:bisque;
        }
        </style>
    <body>
        <?php
$con=new mysqli('127.0.0.1','root','','hostel_management');
if(!$con)
       {
           $str="<b> some error occured in database connectivity<b>";
       }
else
{
    echo "<b><marquee>connection is established succesfully</marquee></b>";
}
$rno=$_POST['roomnu'];
$rnum=$_POST['roomn'];
$rnums=$_POST['roomns'];

    $sql="insert into review values('$rno',$rnum,'$rnums')";


 if(mysqli_query($con,$sql))
    {
        echo "<img src='a.gif' >";
   echo "<h1>" ;
   echo "<br>" ;
   echo "THANK YOU";
   echo "</h1>"; 
        
    }
    


?>
</body>


</html>