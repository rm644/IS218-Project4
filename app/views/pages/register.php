<!-- Rishabh Mehta
Project 2 - 11/07/20
Part 2: Registration Form (HTML)
-First Name  
-Last Name
-Birthday
-Email
-Password -->

<!DOCTYPE html>

<html>

<head>
    <title>Registration Form</title>
    <!-- Link to CSS file-->
    <link type="text/css" rel="stylesheet" href="../public/css/register.css" />
    <link rel="icon"
        href="https://png.pngtree.com/png-clipart/20190516/original/pngtree-arrow-icon-in-flat-style-arrow-symbol-web-design-logo-png-image_3548330.jpg">


</head>

<body>
    <a href="index" style=" color:white">Home</a>
    <div class="form">
        <h1><br> STUDENT REGISTRATION <br> </h1>

        <form action="../user/register" method="post" onsubmit="return checkForm()">

            <!--Username, Password Textboxes (Required)-->
            <br><label for="firstname"><b>First Name: </b></label>
            <input type="text" placeholder="ex. John" name="first_name" id="firstname"><br>

            <!-- id is used for CSS,Javascript/Jquery while name is used for PHP-->


            <label for="lastname"><b>Last Name: </b></label>
            <input type="text" placeholder="ex. Doe" name="last_name" id="lastname"><br>

            <label for="birthday"><b>Birthday: </br></label>
            <input type="text" placeholder="mm/dd/year" name="birthday" id="birthday"><br>

            <label for="email"><b>Email: </br></label>
            <input type="text" placeholder="johndoe@email.com" name="email" id="email"><br>

            <label for="password"><b>Password: </b></label>
            <input type="password" placeholder="At least 8 characters" name="password" id="password"><br>

            <br><input type="submit" name="btn" id="btn" value="Sign Up"> <br>

            <br> <a href="login" style=" color:white">Already Registered? Login Here.</a>

        </form>


        <span id="spFirstName"></span><br>

        <span id="spLastName"></span><br>

        <span id="spBirthday"></span><br>

        <span id="spValidationEmail"></span><br>

        <span id="spValidationPassword"></span><br>

        <!--Link to JS File-->
        <script type="text/javascript" src="../public/javascript/register.js"></script>

</body>

</html>