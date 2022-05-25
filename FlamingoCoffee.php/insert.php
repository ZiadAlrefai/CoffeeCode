<?php

    if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['phonenumber']) && isset($_POST['psw']))
    {
        $username    = $_POST['username'];
        $email       = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $psw         = $_POST['psw'];

        define("DB_SERVENAME", "localhost");
        define("DB_USERNAME", "root");
        define("DB_PSSWORD","");
        define("DB_NAME", "flmaingocoffee");
        define("DB_TABLE","users");

        $DB_connection = mysqli_connect(DB_SERVENAME, DB_USERNAME, DB_PSSWORD, DB_NAME);

        if(!$DB_connection){
            die("Connection failed to DB " . mysqli_connect_error());
        }else{
            //Step 4: Preare a query
            $query1= "insert into " . DB_TABLE . " (username, email, phonenumber, psw) values('$username','$email','$phonenumber','$psw')";

            //Step 5: Execute the query and get result
            $query_result = mysqli_query($DB_connection, $query1);

            //Step 6: Check the execution of the query
            if($query_result){
                echo("<b>Your account created successfully</b>");
                header("Location: Login.php");

            } else {
                echo("<b>Error in creating your account!</b>");
            }
        }

        //Step 7: Close the DB connection
        mysqli_close($DB_connection);
    }
    else{
        echo"<b>ERROR: either username or password is enetered!</b>";
    }

?>

