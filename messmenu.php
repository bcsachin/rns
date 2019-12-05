<html>
<style>
    body{
            background-image: url("messmenu.jpg");
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
$sql="select * from foodmenu ";
$result=mysqli_query($con,$sql);
 $row = mysqli_fetch_assoc($result);
        echo "<table border='2'>";
      echo "<tr>";
            echo "<td>" .'fday'. "</td>";
            echo "<td>" . 'ftype' . "</td>";
            echo "<td>" .'ffood1' . "</td>";
            echo "<td>" . 'ffood2' . "</td>";
            echo "<td>" . 'ffood3' . "</td>";
	    	echo "<td>" . 'ffood4'. "</td>";
            echo "<td>" . 'ffood5'. "</td>";
            echo "<td>" . 'ffood6'. "</td>";
            echo "<td>" . 'ffood7'. "</td>";
            echo "<td>" . 'ffood8'. "</td>";
            echo "</tr>";
    while($row = mysqli_fetch_array($result))
{
         
          echo "<tr>";
            echo  "<td>".$row['fday']."</td>";
           
            echo  "<td>".$row['ftype']."</td>" ;
            
            echo  "<td>".$row['ffood1']."</td>"  ;
          
            echo  "<td>".$row['ffood2']."</td>"  ;
          
            echo  "<td>".$row['ffood3']."</td>" ;
           
	    	echo  "<td>".$row['ffood4']."</td>";
           
            echo  "<td>".$row['ffood5']."</td>";
          
            echo  "<td>".$row['ffood6']."</td>";
            
            echo  "<td>".$row['ffood7']."</td>";
           
            echo  "<td>".$row['ffood8']."</td>";
           echo "</tr>";
            echo "<br>";
             
    }
?>
    </body>

    </html>