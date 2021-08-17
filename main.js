function ajax_random(){
  var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function(){
    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
      var result = document.getElementById('indexq');
      result.value = xmlhttp.responseText;
      ajax_random_question(xmlhttp.responseText);
    }
  }
  xmlhttp.open('GET', 'questions.php',true);
  xmlhttp.send();
}


function ajax_random_question(val){
  var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function(){
    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
      var question = document.getElementById('question');
      question.value = xmlhttp.responseText;
    }
  }
  xmlhttp.open('GET', 'random.php?index='+(val-1),true);
  xmlhttp.send();
}

function CheckFunction(val) {

  var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function(){
    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
      //var result = document.getElementById('indexq');
      var ansbyCsv = xmlhttp.responseText;
      var ansbyuser = document.getElementById("answer").value;

      //var question = document.getElementById('indexa');
      //question.value = xmlhttp.responseText;

      var n = ansbyCsv.localeCompare(ansbyuser);

      if (n == 1) {
        document.getElementById("check").value = "Correct";
        document.getElementById("check").style.color = "green";
      }
      else {
        document.getElementById("check").value = "Wrong";
        document.getElementById("check").style.color = "red";
      }
    }
  }
  xmlhttp.open('GET', 'answer.php?index='+(val-1),true);
  xmlhttp.send();

}
