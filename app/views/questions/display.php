<!DOCTYPE html>

<html>

<head>
    <title>Question Details</title>
    <!-- Link to CSS file-->
    <link type="text/css" rel="stylesheet" href="../public/css/questions.css" />
    <link rel="icon"
        href="https://png.pngtree.com/png-clipart/20190516/original/pngtree-arrow-icon-in-flat-style-arrow-symbol-web-design-logo-png-image_3548330.jpg">

</head>

<body>
    <br><br><a href = '../question/list'>All Questions</a>
    <a href = "../user/logout" >Logout</a>

    <?php
        if (!isset($data['question'])){
            echo "Invalid question";
            die;
        }
    ?>
    <div class="form">
        <h1> Question Details </h1>

            <label for="questionName"><b>Question Name: </b></label>
            <?php echo $data['question']->name;?><br><br>


            <label for="questionBody"><b>Question Body: </b></label>
                <?php echo $data['question']->body;?><br><br>

            <label for="questionSkills"><b>Question Skills: </b></label>
            <?php echo $data['question']->skills;?><br>
</body>

</html>