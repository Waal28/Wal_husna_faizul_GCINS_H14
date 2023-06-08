<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <h3>Sign Up Form</h3>
    <form action="/welcome">
        <p>First Name :</p>
        <input type="text" name="firstname" /> <br />
        <p>Last Name :</p>
        <input type="text" name="lastname" /><br />
        <p>Gender :</p>
        <input type="radio" name="male" id="male" /><label for="male">Male</label><br />
        <input type="radio" name="female" id="female" /><label for="female">Female</label><br />
        <input type="radio" name="other" id="other" /><label for="other">Other</label><br />
        <p>Nationality :</p>
        <select name="nationality">
            <option value="Indonesia">Indonesia</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Thailand">Thailand</option>
        </select>
        <p>Language Spoken :</p>
        <input type="checkbox" name="bahasaIndonesia" id="bahasaIndonesia" /><label for="bahasaIndonesia">Bahasa
            Indonesia</label> <br />
        <input type="checkbox" name="english" id="english" /><label for="english">English</label><br />
        <input type="checkbox" name="other" id="other" /><label for="other">Other</label><br />
        <p>Bio :</p>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea> <br />
        <button type="submit">Sign Up</button>
    </form>
</body>

</html>