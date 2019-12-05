for($var=1;$var<41;$var++)
{
    for($var1=1;$var1<5;$var1++)
    {
        $sql="insert into roomdb values($var,$var1,'YES')";
        if(mysqli_query($con,$sql))
    {
        echo "DONE";
     echo "<br>";  
        echo "Thank you";
        
    }
}