
<html>
<style>
body{
            background-image: url("abc.jpg");
      background-repeat: no-repeat;
      background-size: 1600px 900px ;
      text-align: center;
      color:bisque;
        }
        </style>
    
    
    
    <body><?php
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
$sql="select * from roomdb where rroomno=$room and rbedno=$bed ";
   # $sql="select ravailibility from roomdb where rroomno=$room and rbedno=$bed";
$result=mysqli_query($con,$sql);
 $row = mysqli_fetch_assoc($result);
if($row['ravailability']!='YES')
         {
             echo "YOU CAN'T BOOK THIS ROOM :THIS ROOM IS ALREADY BOOKED BY OTHER STUDENTS";
              exit();
         }  
$sql="insert into studentdb values ('$user','$us','$mob','$bra',$sem,'$add','$pi','male',$room,$bed,$cha,'$pass')";
 if(mysqli_query($con,$sql))
       {
           echo "<b><marquee>data is inserted succesfully</marquee></b>";
       }
$sql="update roomdb set ravailability='NO' where rroomno=$room and rbedno=$bed";
if(mysqli_query($con,$sql))
       {
           echo "<b><marquee> update succesfully</marquee></b>";
           echo "<img src='a.gif' >";
           echo "<h1>" ;
           echo "<br>" ;
           echo "<i>REMEMBER THIS FOR ANY QUERY</i>";
           echo "<br>" ;
           echo "NAME:" ;

           echo $user;
           echo "<br>" ;
           echo "USN:" ;
           echo $us ;
           echo "<br>" ;
           echo "ROOM:" ;
           echo $room;
           echo "<br>" ;
           echo "BED:" ;
           echo $bed;
           echo "<br>" ;
           echo "PASSWORD:" ;
           echo $pass;
           echo "<br>" ;
           echo "<br>" ;
           echo "</h1>"; 
       }
       mysqli_close($con);

 ?>
<body>



    </html>


    