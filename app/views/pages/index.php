<!DOCTYPE html>
<html lang="en">

<head>

    <title>Home Page</title>
    <!-- Link to CSS file-->
    <link type="text/css" rel="stylesheet" href="../public/css/login.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Style the side navigation */
        .sidenav {
            height: 100%;
            width: 200px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
        }


        /* Side navigation links */
        .sidenav a {
            color: white;
            padding: 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color on hover */
        .sidenav a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Style the content */
        .content {
            margin-left: 200px;
            padding-left: 20px;
        }
    </style>
</head>

<body>
    <div class="sidenav">
        <a href="register">REGISTER</a>
        <a href="login">LOGIN </a>
    </div>

    <div class="content">
        <h2>NJIT IS218 PROJECT</h2>
        <p>Welcome User! Use the navigation bar to the left to Login, Register or view the Questions page.</p>
        <p>(But remember, in order to view and add questions, you must be signed in!)</p>
        <p>Thank you!</p>
    </div>

</body>

</html>