<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Option Form</title>
    <style>
        div {
            margin-bottom: 15px; /* Space between divs */
        }
        label {
            margin-right: 10px; /* Space between labels */
        }
        input[type="submit"] {
            padding: 10px 15px; /* Padding for submit button */
            background-color: #4CAF50; /* Green background */
            color: white; /* White text */
            border: none; /* No border */
            border-radius: 4px; /* Rounded corners */
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>User Information Form</h1>
    <form action="checkbox" method="post">
        @csrf
        <div>
            <h3>Select your skills:</h3>
            <label><input type="checkbox" name="skills[]" value="PHP"> PHP</label>
            <label><input type="checkbox" name="skills[]" value="Node"> Node</label>
            <label><input type="checkbox" name="skills[]" value="Java"> Java</label>
        </div>

        <div>
            <h3>Select your gender:</h3>
            <label><input type="radio" name="gender" value="male"> Male</label>
            <label><input type="radio" name="gender" value="female"> Female</label>
        </div>

        <div>
            <h3>Select your city:</h3>
            <select name="city">
                <option value="" disabled selected>Select your city</option>
                <option value="Delhi">Delhi</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Mumbai">Katni</option>
                <option value="Bangalore">Bangalore</option>
                <option value="Kolkata">Kolkata</option>
                <option value="Chennai">Chennai</option>
                <option value="Hyderabad">Hyderabad</option>
                <option value="Ahmedabad">Ahmedabad</option>
                <option value="Pune">Pune</option>
                <option value="Jaipur">Jaipur</option>
                <option value="Surat">Surat</option>
            </select>
        </div>
        <div>
            <h3>Select a Age:</h3>
            <label for="age">Age:</label>
            <input type="range" id="age" name="age" min="1" max="100" value="0" oninput="this.nextElementSibling.value = this.value">
            <output>0</output>
        </div>

        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
</body>
</html>