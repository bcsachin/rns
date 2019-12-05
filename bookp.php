
<?php
$con=new mysqli("localhost","root","","hostel_management");
       if(!$con)
       {
           $str="<b> some error occured in database connectivity<b>";
       }
$user=$_POST['username'];
$us=$_POST['usn'];
$mob=$_POST['mobile'];
$bra=$_POST['branch'];
$sem=$_POST['sem'];
$add=$_POST['address'];
$pi=$_POST['pin'];
$room=$_POST['roomno'];
$bed=$_POST['bedno'];
$cha=$_POST['challan'];
$pass=$_POST['password'];
    $sql="insert into studentdb values ('$user','$us','$mob','bra',$sem,'$add','$pi','male',$room,$bed,$cha,'$pass')";
mysqli_query($con,$sql);
   if(mysqli_query($con,$sql))
       {
           echo "<b><marquee>data is inserted succesfully</marquee></b>";
       }
echo $user;
echo $us;
echo $mob;
 echo "inserted";
       mysqli_close($con);

 ?>



    