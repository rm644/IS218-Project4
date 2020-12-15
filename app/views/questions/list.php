<!DOCTYPE html>

<html>
    
<head>
    <title>Questions</title>
    <!-- Link to CSS file-->
    <link type="text/css" rel="stylesheet" href="../public/css/login.css"/> 
</head>

<body>


<hr/>
<a href = "../question/create" >Add Questions: </a>
<a href = "../user/logout" >Logout</a>
<br/> <br/>
<?php $isForAll = isset($_REQUEST['mode']) && $_REQUEST['mode'] == 'all' ;?>

<hr/>

Current <input type="radio" name="choice" onclick="window.location='../question/list'" <?php echo !$isForAll ?  "checked" : "" ;?>>
All <input type="radio" name="choice" onclick="window.location='../question/list?mode=all'" <?php echo $isForAll ?  "checked" : "" ;?>>
<hr/>
<?php

if (count((array)$data['rows']) > 0) {
    echo "We found " . count((array)$data['rows']) . " questions<br/>";
?>

    <table style="width: 500px; text-align: left; border: solid 1px #ccc">
        <thead>
            <th>Id</th>
            <th>Name </th>
            <th>Body </th>
            <th>Skills </th>
            <th></th>
        </thead>
        <tbody>

            <?php

  // output data of each row
  foreach($data['rows'] as $i =>$row) {
?>
            <tr>
                <td><?php echo $row->id;?></td>
                <td><?php echo $row->name;?></td>
                <td><?php echo $row->body;?></td>
                <td><?php echo $row->skills;?></td>
                <td>
                 <a href = "../question/display?id=<?php echo $row->id;?>">View</a> &nbsp;
                 <a href = "../question/getAnswers?id=<?php echo $row->id;?>">Answers</a> &nbsp;
                 <a href = "../question/edit?id=<?php echo $row->id;?>">Edit</a> &nbsp;
                 <a href = "../question/delete?id=<?php echo $row->id;?>">Delete</a>
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

</body>
</html>