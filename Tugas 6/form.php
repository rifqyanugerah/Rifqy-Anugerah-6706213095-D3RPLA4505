<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
    <style>
        .form-input {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h3>Student Union Form</h3>
    <form action="proses.php" method="POST">
        <div class="form-input">
            <label for="name">Name: </label>
            <input type="text" placeholder="Ahmad Sulaiman" name="name" id="name" required>
        </div>
        <div class="form-input">
            <label for="email">Email: </label>
            <input type="text" placeholder="aman@gmail.com" name="email" id="email" required>
        </div>
        <div class="form-input">
            <label for="url">Website: </label>
            <input type="url" placeholder="http://aman." name="url" id="url">
        </div>
        <div class="form-input">
            <label for="comment">Comment: </label>
            <textarea name="comment" id="comment" cols="30" rows="6"></textarea>
        </div>
        <div class="form-input">
            <label for="gender">Gender: </label>
            <input type="radio" name="gender" id="gender" value="female">Female
            <input type="radio" name="gender" id="gender" value="male">Male
            <input type="radio" name="gender" id="gender" value="other">Other
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>