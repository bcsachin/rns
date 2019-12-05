<html>
<style>
  b{
    color:red;
  }
  td{
    background-color:orange;
  }
  table{
  
    color:black;
  }
    body{
       background-color:bisque

    }
    </style>
    <body>
<?php
$con=new mysqli('127.0.0.1','root','','hostel_management');
if(!$con)
       {
           echo "some error occured in database connectivity";
       }
else
{
     echo "<b><marquee>connection is established succesfully</marquee></b>";
echo "<br>";
      echo "<img src='s1.png'>";  

$sql="select * from roomdb;";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
    echo "<table border='4'>";
      echo "<tr>";
            echo "<td>" .'ROOM_NUMBER'. "</td>";
            echo "<td>" . 'BED_NUMBER'. "</td>";
            echo "<td>" .'AVAILABILITY'. "</td>";
         echo "</tr>";
        while($row = mysqli_fetch_array($result))
{
           if($row['ravailability']=='YES')
         {
               echo "<tr>";
            echo "<td>".$row['rroomno']."</td>";
            echo "<td>".$row['rbedno']."</td>" ;
             echo "<td>".$row['ravailability']."</td>"  ; 
           echo "</tr>";
            echo "<br>";        
          }
}
}
        ?></body>


   
    </html>