<html>
        <body><?php
$con=new mysqli('127.0.0.1','root','','hostel_management');
$sqla="select s.*,c.amount from studentdb s,challan c where c.usn=s.susn";
$result=mysqli_query($con,$sqla);
echo "<table border='4'>";
      echo "<tr>";
            echo "<td>" .'NAME'. "</td>";
            echo "<td>" . 'USN' . "</td>";
            echo "<td>" .'MOBILE' . "</td>";
            echo "<td>" . 'BRANCH' . "</td>";
            echo "<td>" . 'SEMESTER' . "</td>";
            echo "<td>" . 'ADDRESS' . "</td>";
            echo "<td>" . 'PINCODE' . "</td>";
            echo "<td>" . 'GENDER' . "</td>";
            echo "<td>" . 'ROOM_NUMBER' . "</td>";
            echo "<td>" . 'BED_NUMBER' . "</td>";
            echo "<td>" . 'CHALLAN_NUMBER' . "</td>";
                    echo "<td>" . 'PASSWORD'. "</td>";
                    echo "<td>" . 'AMOUNT'. "</td>";
            echo "</tr>";
    while($row = mysqli_fetch_array($result))
    {
            echo "<tr>";
            echo "<td>" . $row['sname'] . "</td>";
            echo "<td>" . $row['susn'] . "</td>";
            echo "<td>" . $row['smobile'] . "</td>";
            echo "<td>" . $row['sbranch'] . "</td>";
            echo "<td>" . $row['ssem'] . "</td>";
	    	echo "<td>" . $row['saddress'] . "</td>";
            echo "<td>" . $row['spin'] . "</td>";
            echo "<td>" . $row['sgender'] . "</td>";
            echo "<td>" . $row['sroomno'] . "</td>";
            echo "<td>" . $row['sbed'] . "</td>";
            echo "<td>" . $row['schallan'] . "</td>";
            echo "<td>" . $row['spassword'] . "</td>";
            echo "<td>" . $row['amount'] . "</td>";
            
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