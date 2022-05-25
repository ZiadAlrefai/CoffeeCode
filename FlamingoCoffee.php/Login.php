<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        form {
          border: 3px solid #f1f1f1;
        }
        
        /* Full-width inputs */
        input[type=text], input[type=password] {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          box-sizing: border-box;
        }
        
        /* Set a style for all buttons */
        button {
          background-color: #04AA6D;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
        }
        
        /* Add a hover effect for buttons */
        button:hover {
          opacity: 0.8;
        }
        
        /* Add padding to containers */
        .container {
          padding: 16px;
        }
        
    </style>
</head>
<body>
    <script>
      function myFunction() {
        var x = document.getElementById("psw");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
      </script>

    <form action="check.php" method="POST">
        <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
        <input type="checkbox" onclick="myFunction()">Show Password;
        <button type="submit" name="submit">Login</button>
        </div>
    </form>
</body>
</html>





