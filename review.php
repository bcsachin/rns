<html>
        <body><?php
$con=new mysqli('127.0.0.1','root','','hostel_management');
$sqla="select * from review";
$result=mysqli_query($con,$sqla);
echo "<table border='4'>";
      echo "<tr>";
            
            echo "<td>" . 'REVIEW' . "</td>";
            
            echo "<td>" . 'DETAILS' . "</td>";
            
            echo "</tr>";
    while($row = mysqli_fetch_array($result))
    {
            echo "<tr>";
            echo "<td>" . $row['reviews'] . "</td>";
            echo "<td>" . $row['details'] . "</td>";
            
            echo "</tr>";
             
    }
?>
</body>

<style>
    body{
            background-image: url("sd.jpg");
      background-repeat: no-repeat;
      background-size: 1600px 900px ;
      text-align: center;
      color:bisque;
        }
        </style>
</html>