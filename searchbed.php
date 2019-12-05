<html><body><?php
$var=$_POST['entr'];
$con= mysqli_connect("localhost","root","","hostel_management");
$sql="CALL pro($var);";
if($r=mysqli_query($con,$sql))
{
    echo "<table border='2'>";
    echo "<tr>";
          echo "<td>" .'ROOM_NUMBER'. "</td>";
          echo "<td>" . 'BED_NUMBER'. "</td>";
          echo "<td>" .'AVAILABILITY'. "</td>";
       echo "</tr>";
    while($row=mysqli_fetch_assoc($r))
   {
    echo "<tr>";
    echo "<td>".$row['rroomno']."</td>";
    echo "<td>".$row['rbedno']."</td>" ;
     echo "<td>".$row['ravailability']."</td>"  ; 
   echo "</tr>";
    echo "<br>"; 
   }
    
}



?>
</body>
<style>
    body{
        background-image: url("bedp.jpg");
  background-repeat: no-repeat;
  background-size: 1600px 900px ;
    }
    </style>
</html>