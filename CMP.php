<html>
        <body><?php
$con=new mysqli('127.0.0.1','root','','hostel_management');
$sqla="select * from complaintdb";
$result=mysqli_query($con,$sqla);
echo "<table border='4'>";
      echo "<tr>";
            echo "<td>" .'NAME'. "</td>";
            echo "<td>" . 'USN' . "</td>";
            echo "<td>" .'ROOMNO' . "</td>";
            echo "<td>" . 'CDATE' . "</td>";
            echo "<td>" . 'MOBILE' . "</td>";
            echo "<td>" . 'SOLVED' . "</td>";
            echo "<td>" . 'CATEGORY' . "</td>";
            echo "<td>" . 'ITEM' . "</td>";
            echo "<td>" . 'DETAILS' . "</td>";
           
            
            echo "</tr>";
    while($row = mysqli_fetch_array($result))
    {
            if($row['csolved']=='no'){
            echo "<tr>";
            echo "<td>" . $row['cname'] . "</td>";
            echo "<td>" . $row['cusn'] . "</td>";
            echo "<td>" . $row['croomno'] . "</td>";
            echo "<td>" . $row['cdate'] . "</td>";
            echo "<td>" . $row['cmobile'] . "</td>";
	    	echo "<td>" . $row['csolved'] . "</td>";
            echo "<td>" . $row['ctype'] . "</td>";
            echo "<td>" . $row['cobject'] . "</td>";
            echo "<td>" . $row['cdetails'] . "</td>";

            }
            
            echo "</tr>";
             
    }
    $sqla="select * from complaintdb";
$result=mysqli_query($con,$sqla);

    while($row = mysqli_fetch_array($result))
    {
            if($row['csolved']=='YES'){
            echo "<tr>";
            echo "<td>" . $row['cname'] . "</td>";
            echo "<td>" . $row['cusn'] . "</td>";
            echo "<td>" . $row['croomno'] . "</td>";
            echo "<td>" . $row['cdate'] . "</td>";
            echo "<td>" . $row['cmobile'] . "</td>";
	    	echo "<td>" . $row['csolved'] . "</td>";
            echo "<td>" . $row['ctype'] . "</td>";
            echo "<td>" . $row['cobject'] . "</td>";
            echo "<td>" . $row['cdetails'] . "</td>";

            }
            
            echo "</tr>";
             
    }echo "<br>";
    echo"<form action='solve.php' method='POST'>";
    echo "<input type='text' name='musn' placeholder='usn'>";
    echo "<input type='text' name='ddd' placeholder=' cdate'>";
    echo "<input type='submit' value='solved'>";
    
    echo"</form>";
    
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