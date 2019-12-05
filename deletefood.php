<html>
<head>
 
 
   <title>
     remove food items
 
   </title>
     <style>
        body {text-decoration-color: blue;
            text-align:center;
    background-image: url("bacv.jpg");
    background-repeat: no-repeat;
    background-size: 1750px 850px ;
    padding: 10PX;
   
    
    
  }
  </style>
   </head>
    <form action="delete.php" method=post>
         <select id="mf1" name=daytype>
                <option>Monday</option>
                <option>Tuesday</option>
                <option>Wednesday</option>
                <option>Thursday</option>
                <option>Friday</option>
                <option>Saturday</option>
                <option>Sunday</option>
              </select>
       <select id="mb1" name="foodtype">
                    <option>BREAKFAST</option>
                    <option>LUNCH</option>
                    <option>SNACKS</option>
                     <option>SNACKS</option>
              </select>
         <select id="mf1" name="food">
                <option>ffood1</option>
                <option>ffood2</option>
                <option>ffood3</option>
                <option>ffood4</option>
                <option>ffood5</option>
                <option>ffood6</option>
                <option>ffood7</option>
             <option>ffood8</option>
              </select>
        <br>
        <br>
           <input type="text" placeholder="fooditem" name="item" >
       <br>
        <br>
     
                  <input type="submit" value ="submit">
  
    </form>
    <body>

        </body>
    </html>