<html>
<style>
body{
            background-image: url("searbed.jpg");
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
$daytype1=$_POST['daytype'];
$foodtype1=$_POST['foodtype'];
$food1=$_POST['food'];
$food=$_POST['item'];
if($food1=="ffood1")
{
   $sql=" update foodmenu set ffood1='$food' where fday='$daytype1' and ftype='$foodtype1'";
    
}

if($food1=="ffood7")
{
   $sql=" update foodmenu set ffood1='$food' where fday='$daytype1' and ftype='$foodtype1'";
}
if($food1=="ffood1")
{
   $sql=" update foodmenu set ffood1='$food' where fday='$daytype1' and ftype='$foodtype1'";
}

if($food1=="ffood2")
{
   $sql=" update foodmenu set ffood1='$food' where fday='$daytype1' and ftype='$foodtype1'";
}
if($food1=="ffood3")
{
   $sql=" update foodmenu set ffood1='$food' where fday='$daytype1' and ftype='$foodtype1'";
}

if($food1=="ffood4")
{
   $sql=" update foodmenu set ffood1='$food' where fday='$daytype1' and ftype='$foodtype1'";
}

if($food1=="ffood5")
{
   $sql=" update foodmenu set ffood1='$food' where fday='$daytype1' and ftype='$foodtype1'";
}

if($food1=="ffood6")
{
   $sql=" update foodmenu set ffood1='$food' where fday='$daytype1' and ftype='$foodtype1'";
}
if($food1=="ffood8")
{
   $sql=" update foodmenu set ffood1='$food' where fday='$daytype1' and ftype='$foodtype1'";
}
if(mysqli_query($con,$sql)){
   echo "<img src='a.gif' >";
   echo "<h1>" ;
   echo "<br>" ;
   echo "deleted";
   echo "</h1>";  
}





mysqli_close($con);
?>
</body>

        </html>