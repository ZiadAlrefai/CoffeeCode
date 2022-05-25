<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
    body {
        background-color: whitesmoke;
    }

    * {
        box-sizing: border-box
    }

    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    .button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    .button:hover {
        opacity: 1;
    }

    .signupbtn {
        float: left;
        width: 100%;
    }

    .container {
        padding: 16px;
    }

    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }
    
    </style>
</head>

<body>
        <form action="insert.php" method="POST" style="border:1px solid #ccc">
            <div class="container">
                <h1>Sign Up</h1>
                <hr>
                <label for="username"><b>User name</b></label>
                <input type="text" placeholder="Enter User name" name="username" id="username">
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" id="email">
                <label for="phonenumber"><b>Phone number</b></label>
                <input type="text" placeholder="Enter Phone number" name="phonenumber" id="phonenumber">
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" id="psw">

                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                <div class="clearfix">
                    <input class="button" type="submit" value="Sign Up">
                </div>
            </div>
        </form>
</body> 

</html>