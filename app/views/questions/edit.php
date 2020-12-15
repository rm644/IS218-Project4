<!DOCTYPE html>

<html>

<head>
    <title>Edit Question</title>
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
        <h1> Edit Question </h1>

        <form action="../question/update" method="post" onsubmit="return checkForm()">
        <input type="hidden" name="id" value="<?php echo $data['question']->id;?>"/>

            <!--Question Name and Body Textboxes (Required)-->
            <label for="questionName"><b>Question Name: </b></label>
            <input type="text" placeholder="Ask a question here" name="name" id="questionName" value = "<?php echo $data['question']->name;?>"><br>


            <label for="questionBody"><b>Question Body: </b></label>
            <textarea placeholder="Answer the question here" name="body" rows="5"
                id="questionBody"><?php echo $data['question']->body;?></textarea><br>

            <label for="questionSkills"><b>Question Skills: </b></label>
            <textarea placeholder="Answer the skills here" name="skills" rows="5" id="questionSkills"><?php echo $data['question']->skills;?></textarea><br>

            <!--

            <label for="questionSkills"><b>Question Skills (Choose Two): <br> </b></label>

            <select name="questionSkills[]"  id="questionSkills"multiple>
                <option value="skill1">Skill 1</option>
                <option value="skill2">Skill 2</option>
                <option value="skill3">Skill 3</option>
            </select>

  -->
            <br><input type="submit" name="btn" id="btn" value="Submit">
      
        </form>

        <span id="spQuestionName"></span><br>

        <span id="spQuestionBody"></span><br>

        <span id="spQuestionSkills"></span><br>



        <!--Link to JS File-->
        <script type="text/javascript" src="questionform.js"></script>

</body>

</html>