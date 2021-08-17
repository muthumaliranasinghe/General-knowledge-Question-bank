<?php
$file = file('GeneralKnowledgeQuestionBank.csv');
  $arr = array();
  foreach ($file as $line) {
    list($index,$question,$answer) = explode(",",$line);

  $arr[] = array(
    'index' => $index,
    'q' => $question,
    'a' => $answer);

  }

     echo $arr[$_REQUEST['index']]['a'];

 ?>
