<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <h2>Sign Up Form</h2>
    <form action="/welcome"method="POST">
    @csrf
        <label for=""> first name :</label> <br>
        <input type="text" name= "nama"> <br> <br>
        <label for=""> last name :</label> <br>
        <input type="text" name= "nama"> <br> <br>
        <label>Gender:</label><br><br>
    <input type="radio"name="Gender">Male <br>
    <input type="radio"name="Gender">female <br>
    <input type="radio"name="Gender">Other <br><br>
        <label for="">Nationaly</label>
        <select name="Nationality" >
    <option value="">Indonesia</option>
    <option value="">America</option>
    <option value="">Germany</option>
    <option value="">Italy</option>
    </select><br><br>
    <label>Language Spoken:</label><br>
    <input type="checkbox" name="Language Spoken">Bahasa Indonesia<br>
    <input type="checkbox" name="Language Spoken">English<br>
    <input type="checkbox" name="Language Spoken">Other<br>
        <label for="">bio :</label> <br>
       <textarea name="bio" id="" cols="30" rows="10"></textarea> <br><br>
        <button type="submit">submit</button> <br>

    </form>
    <a href="/">kembali</a>
</body>
</html>