<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Network - sign up</title>
</head>
<body>

<div class="title_signup">
    <h2 style="margin-top: 20px !important; margin-bottom: -50px !important;" class="hhh">Network</h2>
</div>

<div class="login_form_area">
    <div class="sub_form">
        <h3 style="margin-top: -10px; font-size: 21px;">Create a new account</h3>
        <hr>
    <form action="" method="post">
        <input type="text" name="fname" id="taxt" placeholder="First name" required><br>
        <input type="text" name="lname" id="taxt" placeholder="Last name (optional)" ><br>
        <input type="number" name="age" id="date" placeholder="Age" required>
       
          <select  name="gander" id="date" required>
                <option value="1">Male</option>
                <option value="1">Female</option>
                <option value="1">Custom</option>
            </select>
        <input type="text" name="username" id="taxt" placeholder="Username" required><br>
        <input type="email" name="email" id="taxt" placeholder="Email" required><br>
        <input type="password" name="password" id="taxt" placeholder="New password" required><br>
        <input type="submit" value="Sign up"><br>
    </form><br>
        <a class="already" href="login.php">Already have an account?</a>
    </div>
</div>





</body>
</html>