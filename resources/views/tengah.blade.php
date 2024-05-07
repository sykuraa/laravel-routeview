<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sykuraa</title>
    <style>
      
      body 
      {
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        background-color: #8cabff;
        margin: 25px;
        padding: 0;
      }

      h1 {
        color:tomato ;
        font-size: 3rem;
        text-align: left;
        text-transform: uppercase;
      }




    </style>
</head>

<body>
    <h1>Buat akun baru</h1>
    <h3>Sign up Form</h3>
    <form action="akhir" method="get">
        first name :<br> <input type="text" name="fname" required>
        <br>
        Last name:<br> <input type="text" name="lname" required><br>
      
      
        <p>Gender:</p>

 <input type="radio" name="gender" value="Male"> <label for="html" required>Male</label><br>
 <input type="radio" name="gender" value="Female"> <label for="html" required>female</label><br>
 <input type="radio" name="gender" value="kucing"> <label for="html" required>miow miow</label><br>
 

        <p>Nationality:</p>
        <select id="cars" name="cars">
          <option value="Indonesia">Indonesia</option>
          <option value="Inggris">English</option>
          <option value="German">Germany</option>
          <option value="Japan">Japanese</option> 
        </select>

        <br>
          <p>Language spoken</p>
    <input type="checkbox" id="indo" name="bahasa[]" value="Indonesia" required>
    <label for="indo">Indonesia</label><br>
    <input type="checkbox" id="inggris" name="bahasa[]" value="English" required>
    <label for="inggris">English</label><br>
    <input type="checkbox" id="lainnya" name="bahasa[]" value="Lainnya" required>
    <label for="lainnya">Lainnya</label><br>

          <p>Biodata tambahan</p>
        
            <textarea name="message" rows="10" cols="30"></textarea>
            <br><br>
        
        

        
            <input type="submit" value="Submit">
        

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    </form>
</body>
</html>