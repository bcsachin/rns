<!DOCTYPE html>
<html>
<head>
  <title>
    student details

  </title>
     
  <style>
      body {text-decoration-color: chartreuse;
          text-align:center;
  background-image: url("ba3.jpg");
  background-repeat: no-repeat;
  background-size: 1600px 900px ;
  }


p{
    color: rgb(248, 246, 212)
}
a{
  color: rgb(15, 24, 151)
}
h4{
  color: beige;
}
  </style>
     </head>

    <h4>ROOM PRE-BOOKING</h4>
    <br>
        <P>PLEASE PROVIDE YOUR DETAILS</P>
        
        <form action="bookr.php" method="post">
  <input type="text" name="username" >
  <br>
  <br>
<input type="text" name="usn"  placeholder="usn"><p> who don't have usn can fill admission order</p>
  <br>
  <input type="text" name="mobile" >
  <br>
  <br>
  <select  type="text" name="branch">
      <option value="computer application and engineering" >computer science</option>
      <option value="electronics and communication" >Electronics communication</option>
      <option value="mechanicalengineering">Mechanical</option>
      <option value="electrival engineering">Electrical</option>
      <option value="information science" >Information SCience</option>
      <option value="information technology" >instrumentation</option>
      <option value="civil" >Civil</option>
      <option value="aeronautical" >aeronotical</option>
  </select>

  <br>
  <br>
  <select type="number" name="sem">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
  </select>

  <br>
  <br>
  <input type="text" name="address" >

  <br>
  <br>
  <input type="text" name="pin"  >
  <br>
  <br>
  <select>
    <option>MALE</option>
  </select>
  <br>  <br>

  <input type="number" name="roomno"  >
  <br><a href="#">click to see available room and bed</a>
<br>   <br>
 
<input type="number" name="bedno" >
  <br><a href="#">click to see available beds</a>
  <br>  <br>

  <input type="number" name="challan"   >
  <br>
  <input type="text" name="password"   >
  <br>
  <br>
  <br>
             <input type="submit" value ="submit">
  
</form>
       
  
</html>