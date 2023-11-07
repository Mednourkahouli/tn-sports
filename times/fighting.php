  <!DOCTYPE html>
  <html lang="pt-br">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    background-position: center;
    background-image: url("../imagens/bg.png");
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

  img {
    border-radius: 50%;
  }

  .center{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
  }

  .fa {
    padding: 10px;
    font-size: 30px;
    width: 50px;
    text-align: center;
    text-decoration: none;
    margin: 10px 2px;
    border-radius: 50%;
  }

  .fa:hover {
      opacity: 0.7;
  }

  .fa-twitter {
    background: #55ACEE;
    color: white;
  }

  html {
    box-sizing: border-box;
  }

  *, *:before, *:after {
    box-sizing: inherit;
  }

  .column {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 30%;
  }

  @media screen and (max-width: 650px) {
    .column {
      width: 100%;
      display: block;
    }
  }

  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  }

  .container {
    padding: 0 16px;
  }

  .container::after, .row::after {
    content: "";
    clear: both;
    display: table;
  }

  .title {
    color: grey;
  }

  .button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
  }

  .button:hover {
    background-color: #555;
  }

  h2 {
    text-align: center;
  }

  </style>
  <link rel="shortcut icon" type="image/x-icon" href="../imagens/logo.png" />
    <title>Tn-sports</title>
  </head>
  <body>

  <div class="topnav">
    <a href="../principal.html" target = "_self" >Home</a>
    <a class="active" href="../teams.html" target = "_self" >Team</a>
    <a href="../news.html" target = "_self" >News</a>
    <a href="../about.html" target = "_self" >About</a>
  </div>

  <h2>Fighting Games</h2>
  <br>

  <div class="row">
    <div class="column">
      <div class="card">
        <img title = "Adam Lindgren" src="../imagens/armada.jpg" alt="Foto do Jogador Adam Lindgren" style="width:100%">
        <div class="container">
          <h2>Adam Lindgren</h2>
          <p class="title">Armada, Swedish Sniper</p>
          <p>Games:<br> 
              Super Smash Bros. Ultimate<br> 
              Super Smash Bros. Melee (retired)<br>  
              Project M (retired)</p>
          <p>Gothenburg - Sweden</p>
           <a href="https://twitter.com/ArmadaUGS" class="fa fa-twitter"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="column">
      <div class="card">
        <img title = "Daigo Umehara" src="../imagens/daigo.jpg" alt="Foto do Jogador Daigo Umehara" style="width:100%">
        <div class="container">
          <h2>Daigo Umehara</h2>
          <p class="title">Daigo, The Beast</p>
          <p>Games:<br> 
            Super Street Fighter II Turbo<br> 
            Street Fighter III 3rd Strike<br> 
            Ultra Street Fighter IV<br> 
            Street Fighter V<br> 
            Street Fighter Alpha 3<br> 
            Darkstalkers<br> 
            Capcom vs. SNK 2<br> 
            Guilty Gear<br> 
            Capcom Fighting Evolution</p>
          <p>Tokyo - Japan</p>
           <a href="https://twitter.com/daigothebeast" class="fa fa-twitter"></a>
        </div>
      </div>
    </div>
  </div>

  </body>
  </html>
