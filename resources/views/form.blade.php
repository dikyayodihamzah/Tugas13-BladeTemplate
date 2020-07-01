<!DOCTYPE html>
<html>
  <head>
    <title> Sign Up | SanberBook </title>
  </head>

  <body>
    <!-- heading -->
    <h1> Buat Account Baru </h1>
    <h3> Sign Up Form </h3>

    <!-- create form -->
    <form action="/welcome" method="POST">
      @csrf
      <p> First name: </p>
      <input type="text" name="nama_depan">
        
      <p> Last name: </p>
      <input type="text" name="nama_belakang">
                
      <p> Gender: </p>
      <input type="radio" name="gender[]" value="male"> Male <br>
      <input type="radio" name="gender[]" value="female"> Female <br>
      <input type="radio" name="gender[]" value="other"> Other <br>
        
      <p> Nationality: </p>
      <select name="nationality[]">
        <option value="Indonesia"> Indonesian </option>
        <option value="Singapore"> Singaporean </option>
        <option value="Malaysia"> Malaysian </option>
        <option value="Australia"> Australian </option>
      </select>
        
      <p> Language Spoken: </p>
      <input type="checkbox" name="lang[]" value="Bahasa Indonesia"> Bahasa Indonesia <br>
      <input type="checkbox" name="lang[]" value="English"> English <br>
      <input type="checkbox" name="lang[]" value="Other"> Other <br>
        
      <p> Bio: </p>
      <textarea name="bio" cols="30" rows="10"></textarea>
        
      <br><br>
      <input type="submit" value="Sign Up">
    </form>
        
  </body>
</html>