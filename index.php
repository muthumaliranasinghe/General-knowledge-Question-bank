
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="main.js"></script>
  </head>
  <body>
    <div class="" >
      <center>
      <h3> <font color="#3333ff"> General Knowledge Question bank</font></h3>
      <div id="ques">
      Question:
      <input type="text" id="question" name="question" value="" disabled>
      <br><br>
      </div>
      Index:
      <input type="text" id="indexq" value="" disabled>
      <br><br>
      <input type="button" onclick="ajax_random();" value="Random">
      <br><br><br>
      <hr>
      Index:
      <input type="text" id="indexa" value="">
      <br><br>
      Answer:
      <input type="text" id="answer" value="">
      <br><br>
      <input type="button" onclick="CheckFunction(indexa.value)" value="Check">
      <br><br><br>
      <input type="input" id="check" value="" disabled>
    </center>
    </form>
   

  </body>
</html>
