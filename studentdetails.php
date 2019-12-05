<html>
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
$sql="select * from studentdb ";
$result=mysqli_query($con,$sql);
 $row = mysqli_fetch_assoc($result);
        echo "<table border='2'>";
      echo "<tr>";
            echo "<td>" .'STUDENT_NAME'. "</td>";
            echo "<td>" . 'STUDENT_USN' . "</td>";
            echo "<td>" .'MOBILE' . "</td>";
            echo "<td>" . 'BRANCH' . "</td>";
            echo "<td>" . 'SEMESTER' . "</td>";
	    	echo "<td>" . 'ADDRESS'. "</td>";
            echo "<td>" . 'PINCODE'. "</td>";
            echo "<td>" . 'GENDER'. "</td>";
            echo "<td>" . 'ROOM_NO'. "</td>";
            echo "<td>" . 'BED_NO'. "</td>";
            echo "<td>" . 'CHALLAN'. "</td>";
            echo "<td>" . 'PASSWORD'. "</td>";
            echo "</tr>";
    while($row = mysqli_fetch_array($result))
{
         
          echo "<tr>";
            echo  "<td>".$row['sname']."</td>";
           
            echo  "<td>".$row['susn']."</td>" ;
            
            echo  "<td>".$row['smobile']."</td>"  ;
          
            echo  "<td>".$row['sbranch']."</td>"  ;
          
            echo  "<td>".$row['ssem']."</td>" ;
           
	    	echo  "<td>".$row['saddress']."</td>";
           
            echo  "<td>".$row['spin']."</td>";
          
            echo  "<td>".$row['sgender']."</td>";
            
            echo  "<td>".$row['sroomno']."</td>";
           
            echo  "<td>".$row['sbed']."</td>";
        echo  "<td>".$row['schallan']."</td>";
        echo  "<td>".$row['spassword']."</td>";
           echo "</tr>";
            echo "<br>";
             
    }
?>
    </body>
    </html>