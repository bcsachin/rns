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

$usn=$_POST['musn'];
$mobile=$_POST['ddd'];

/*
$sql=
*/





$sql="update complaintdb set csolved='YES' where cusn='$usn' and cdate='$mobile'";
if(mysqli_query($con,$sql))
       {
           echo "<b><marquee> update succesfully</marquee></b>";
       }
  

    
?>
</body>

</html>