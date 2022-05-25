<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="mystyle.css">
    <style>
    div.scrollmenu {
        background-color: #333;
        overflow: auto;
        white-space: nowrap;
    }

    div.scrollmenu a {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px;
        text-decoration: none;
    }

    div.scrollmenu a:hover {
        background-color: #777;
    }

    .flip-box {
        background-color: transparent;
        width: 300px;
        height: 200px;
        border: 1px solid #f1f1f1;
        perspective: 1000px;

    }

    /*   This container is needed to position the front and back side */
    .flip-box-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.8s;
        transform-style: preserve-3d;
    }

    /*   Do an horizontal flip when you move the mouse over the flip box container */
    .flip-box:hover .flip-box-inner {
        transform: rotateY(180deg);
    }

    /*   Position the front and back side */
    .flip-box-front,
    .flip-box-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        /* Safari */
        backface-visibility: hidden;
    }

    /*   Style the front side */
    .flip-box-front {
        background-color: #bbb;
        color: black;
    }

    /*   Style the back side */
    .flip-box-back {
        background-color: dodgerblue;
        color: black;
        transform: rotateY(180deg);
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .icon-bar {
        position: absolute;
        left: 1320px;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    .icon-bar a {
        display: block;
        text-align: center;
        padding: 16px;
        transition: all 0.3s ease;
        color: white;
        font-size: 20px;
    }

    .icon-bar a:hover {
        background-color: #000;
    }

    .facebook {
        background: #3B5998;
        color: white;
    }

    .twitter {
        background: #55ACEE;
        color: white;
    }

    .google {
        background: #dd4b39;
        color: white;
    }

    .linkedin {
        background: #007bb5;
        color: white;
    }

    .youtube {
        background: #bb0000;
        color: white;
    }

    .content {
        margin-left: 75px;
        font-size: 30px;
    }
    </style>
</head>

<body>
    <header>
        <h1>Flamingo Coffee</h1>
        <div class="scrollmenu">
            <a href="homepage.php">Home</a>
            <a href="https://coffee-news.ca/">News</a>
            <a href="Contactus.html">Contact Us</a>
            <a href="Aboutus.html">About Us</a>
        </div>
    </header>
    <?php 
    if(isset($_GET['username'])){
        echo"Welcome " . $_GET['username'];
    }
    ?>
    <br><br>
    <h2>MENU</h2>
    <br><br><br>
    <div class="flip-box">
        <div class="flip-box-inner">
            <div class="flip-box-front">
                <h2><br><br> Cold Coffee</h2>
            </div>
            <div class="flip-box-back">
                <table id="t1" border="5" width: 20cm>
                    <tr>
                        <th>ICE COFFE</th>
                        <th>Price</th>
                    </tr>
                    <tr>
                        <td>ICE V60</td>
                        <td>17.00</td>
                    </tr>
                    <tr>
                        <td>ICE MOCA</td>
                        <td>18.00</td>
                    </tr>
                    <tr>
                        <td>ICE AMRICANO</td>
                        <td>11.00</td>
                    </tr>
                    <tr>
                        <td>SPANISH LATTE</td>
                        <td>15.00</td>
                    </tr>
                    <tr>
                        <td> ICE LATTE</td>
                        <td>15.00</td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
    <br><br><br>
    <div class="flip-box">
        <div class="flip-box-inner">
            <div class="flip-box-front">
                <h2><br><br> Hot Coffee</h2>
            </div>
            <div class="flip-box-back">
                <table id="t1" border="5" width: 20cm>
                    <tr>
                        <th> HOT COFFEE</th>
                        <th> Price</th>
                    </tr>
                    <tr>
                        <td>V60</td>
                        <td>17.00</td>
                    </tr>
                    <tr>
                        <td>ESPRISO</td>
                        <td>12.00</td>
                    </tr>
                    <tr>
                        <td>CORTADO</td>
                        <td>14.00</td>
                    </tr>
                    <tr>
                        <td>AMRICANO</td>
                        <td>10.00</td>
                    </tr>
                    <tr>
                        <td>BLACK COFFE</td>
                        <td>13.00</td>
                    </tr>
                    <tr>
                        <td>LATTE</td>
                        <td>15.00</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="flip-box">
        <div class="flip-box-inner">
            <div class="flip-box-front">
                <h2><br><br> Sweet</h2>
            </div>
            <div class="flip-box-back">
                <table id="t1" border="5" width: 20cm>
                    <th>Sweet</th>
                    <th>Price</th>
                    </tr>
                    <tr>
                        <td>Cookies</td>
                        <td>7.00</td>
                    </tr>
                    <tr>
                        <td>Rocher Cookies</td>
                        <td>8.00</td>
                    </tr>
                    <tr>
                        <td>Saffron Cake</td>
                        <td>18.00</td>
                    </tr>
                    <tr>
                        <td>Pistachio Cake</td>
                        <td>18.00</td>
                    </tr>
                    <tr>
                        <td>Tiramisu</td>
                        <td>15.00</td>
                    </tr>
                </table>

            </div>
        </div>
    </div>

    <div class="icon-bar">
        <a href="https://www.facebook.com/" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/?lang=ar" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="https://www.google.com.sa/?hl=ar" class="google"><i class="fa fa-google"></i></a>
        <a href="https://www.linkedin.com/signup" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="https://www.youtube.com/" class="youtube"><i class="fa fa-youtube"></i></a>
    </div>

</body>

</html>