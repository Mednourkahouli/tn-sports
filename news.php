<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
    background-position: center;
  background-image: url("imagens/bg.png");
  background-color: white;
  background-size: cover;
  background-attachment: fixed;
  background-repeat: no-repeat;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
<link rel="shortcut icon" type="image/x-icon" href="imagens/logo.png" />
  <title>Tn-sports</title>
</head>
<body>

<div class="topnav">
  <a href="principal.html" target = "_self" >Home</a>
  <a href="teams.html" target = "_self" >Team</a>
  <a class="active" href="news.html" target = "_self" >Feedback</a>
  <a href="about.html" target = "_self" >About</a>
</div>

<p>
  <div style="padding-left:16px">
  
<form action="obrigado.html" method="post">
  Name:
  <input name="firstname" type="text">
  <br><br>
  Gender:
  <select>
    <option value = "masculino"> Masculine</option>
    <option value = "feminino"> Feminine</option>
    <option value = "outro"> Other</option>
  
</select>
  <br><br>
  Age Range: <br><br>
  <input type="radio" name="idade" value = "18"> Under 18<br>
  <input type="radio" name="idade" value = "entre"> Between 18 and 25<br>
  <input type="radio" name="idade" value = "acima"> Over 25<br>

  <br>What would you like to see on our website? <br><br>

  <textarea name="message" rows="10" cols="35">
  </textarea><br><br>

  <input type="reset" value = "To go back">
  <input type="submit" value = "Confirm">
  
</form>

</div>


</body>
</html>
