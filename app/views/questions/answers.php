<hr/>
Current <input type="radio" name="choice" onclick="window.location='../question/answers'" <?php echo !$isForAll ?  "checked" : "" ;?>>
All <input type="radio" name="choice" onclick="window.location='../question/answers?mode=all'" <?php echo $isForAll ?  "checked" : "" ;?>>
<hr/>

<h1> Question </h1>
<label for="questionName"><b>Question Name: </b></label>
<?php echo $data['question']->name;?><br><br>
<hr/>

<form action='../question/newanswer' method='post'>
<input type="hidden" name="question_id" value="<?php echo $data['question']->id;?>"/>
	Answer:
	<textarea name='answer'></textarea>
	<br/>
	<input type='submit' value='Save'/>
</form>

<hr/>

<?php
if (count((array)$data['rows']) > 0) {
    echo "We found " . count((array)$data['rows']) . " answers<br/>";
?>
<a href = '../question/list'>Back to Questions</a><br><br>
    <table style="width: 100%; text-align: left; border: solid 1px #ccc">
        <thead>
            <th></th>
            <th>Answer</th>
            <th>Name </th>
            <th>Date </th>
            <th></th>
        </thead>
        <tbody>

            <?php

  // output data of each row
  foreach($data['rows'] as $i =>$row) {
?>
            <tr>
                <td><?php echo $row->up_vote;?> / <?php echo $row->down_vote;?></td>
                <td><?php echo $row->answer;?></td>
                <td><?php echo $row->first_name;?> <?php echo $row->last_name;?></td>
                <td><?php echo $row->create_date;?></td>
                <td>
                <a href = "../question/upvote?answer_id=<?php echo $row->id;?>&question_id=<?php echo $row->question_id;?>">Upvote</a> &nbsp;
                <a href = "../question/downvote?answer_id=<?php echo $row->id;?>&question_id=<?php echo $row->question_id;?>">Downvote</a> &nbsp;
                </td>
            </tr>

            <?php  
  }

  echo "</tbody>";
  echo "</table>";

} else {
  echo "0 results";
}

//$conn->close();
?>