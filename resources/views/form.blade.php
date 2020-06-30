<!DOCTYPE html>
<html>
    <head>
        <title>Form Sign Up</title>
    </head>

    <body>
        <form action="/welcome" method="POST">
          @csrf
          <fieldset> 
            <h2>Buat Account Baru!</h2>
            <caption><b>Sign Up Form</b></caption>
            <br><br>
            <label>First name:</label>
            <br><br>
            <input type="text" placeholder="First name" name="fname">
            <br><br>
            <label>Last name:</label>
            <br><br>
            <input type="text" placeholder="Last name" name="lname">
            <br><br>
            <label>Gender:</label>
            <br><br>
            <input type="radio" name="gender" value="0">Male<br>
            <input type="radio" name="gender" value="1">Female<br>
            <input type="radio" name="gender" value="2">Other<br>
            <br>
            <label>Nationality:</label>
            <select name="nationality">
                <option value="a">American</option>
                <option value="b">Brazilian</option>
                <option value="c">British</option>
                <option value="d">French</option>
                <option value="e">Germany</option>
                <option value="f">Indonesian</option>
                <option value="g">Spain</option>
            </select>
            <br><br>
            <label>Language Spoken:</label>
            <br><br>
            <input type="checkbox" name="language" value="0">Bahasa Indonesia<br>
            <input type="checkbox" name="language" value="1">English<br>
            <input type="checkbox" name="language" value="2">Other<br>
            <br>
            <label>Bio:</label><br><br>
            <textarea cols="30" rows="10" name="Bio"></textarea>
            <br>
            <input type="submit" value="Sign Up"/>
          </fieldset>
        </form>
    </body>
</html>