<!DOCTYPE html>
<html>
    <head>
        <title>register</title>
    </head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>register</h2>
    <form action="/form" method="post">
        @csrf
        <label>First Name:</label><br>
        <input type="text" name="name"><br><br>
        <label>Last Name:</label><br>
        <input type="text" Name="Name"><br><br>
       
        <label> Gander:</label><br>
       <p><input type="radio">Male<br>
          <input type="radio">Female<br>
          <input type="radio">Other<br>
       </p>
       
       <label>Nationality:</label> <br>
       <p><select name="Nationality">
          <option value="">Indonesia</option>
          <option value="">Korea</option>
          <option value="">Jepang</option>
       </select> <br> <br> 
       </p>
        
       <label>Language Spoken:</label>
       <p><input type="checkbox" name="skill"> Bahassa Indonesia <br>
          <input type="checkbox" name="skill"> English <br>
          <input type="checkbox" name="skill"> Other <br>
       </p>

       <label>Bio:</label> <br>
       <textarea cols="30" rows="10"></textarea> <br><br>

       <input type="Submit" value="register">


    </form>
</head>
<body>
    
</body>
</html>