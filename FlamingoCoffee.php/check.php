<?php
if(isset($_POST['username'])){
    $username = $_POST['username'];
}
if(isset($_POST['psw'])){
    $psw = $_POST['psw'];
}

    define("DB_SERVENAME", "localhost");
    define("DB_USERNAME", "root");
    define("DB_PSSWORD","");
    define("DB_NAME", "flmaingocoffee");
    define("DB_TABLE","users");

    $DB_connection = mysqli_connect(DB_SERVENAME, DB_USERNAME, DB_PSSWORD, DB_NAME);

    if(!$DB_connection){
        die("Connection failed to DB " . mysqli_connect_error());
    } else{
        //Step 4: Preare a query
        $query= "select * from " . DB_TABLE . " where username= '$username' and psw= '$psw'";
        
        //Step 5: Execute the query and get result
        $query_result = mysqli_query($DB_connection, $query);

        //Step 6: Check the execution of the query
        if($query_result){
            
            //Step 7: check number of rows
            $numOfRows = mysqli_num_rows($query_result);

            if($numOfRows > 0){
                header("Location: homepage.php?username=" . $username);
            } else {
                echo("<b>Invalid username or password!</b>");
            }
        }
    }

    //Step 8: Close the DB connection
    mysqli_close($DB_connection);
?>