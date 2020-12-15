<!DOCTYPE html>

<!-- Rishabh Mehta
Project 2 - 11/01/20
Part 1: Login Form (HTML)
-Email 
-Password -->

<html>

<head>
    <title>Login Form</title>
    <!-- Link to CSS file-->
    <link type="text/css" rel="stylesheet" href="../public/css/login.css" />
    <link rel="icon"
        href="https://png.pngtree.com/png-clipart/20190516/original/pngtree-arrow-icon-in-flat-style-arrow-symbol-web-design-logo-png-image_3548330.jpg">

</head>

<body>
    <a href="index" style=" color:white">Home</a>

    <div class="form">
        <h1> Welcome NJIT User!</h1>

        <form action="../user/login" method="post" onsubmit="return checkForm()">

            <!-- Username and Password Textboxes (Required)-->

            <label for="email"><b>Email: </b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email"><br>

            <label for="password"><b>Password: </b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password"><br>

            <br><input type="submit" name="btn" id="btn" value="Sign In"> <br>

            <br> <a href="register" style=" color:white">Don't Have An Account? Register Here.</a>

        </form>

        <span id="spValidationEmail"></span><br>

        <span id="spValidationPassword"></span><br>


        <!--Link to JS File-->
        <script type="text/javascript" src="../public/javascript/login.js"></script>

</body>

</html>