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

 ?>

 <?php
    $a = rand(1,count($arr));
    echo $a;
  ?>
