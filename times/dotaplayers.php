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

  h2 {
    text-align: center;
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

  <h2>DOTA 2</h2>
  <br>

  <div class="row">
    <div class="column">
      <div class="card">
        <img title = "Amer Al-Barkawi" src="../imagens/miracle.jpg" alt="Foto do Jogador Miracle" style="width:100%">
        <div class="container">
          <h2>Amer Al-Barkawi</h2>
          <p class="title">Miracle</p>
          <p>22 years</p>
          <p>Jordan</p>
           <a href="https://twitter.com/Liquid_Miracle" class="fa fa-twitter"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="column">
      <div class="card">
        <img title = "Artour Babaev" src="../imagens/arteezy.jpg" alt="Foto do Jogador Arteezy" style="width:100%">
        <div class="container">
          <h2>Artour Babaev</h2>
          <p class="title">Arteezy</p>
          <p>23 years</p>
          <p>Canada</p>
           <a href="https://twitter.com/arteezy" class="fa fa-twitter"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="column">
      <div class="card">
        <img title = "Danil Ishutin" src="../imagens/dendi.jpg" alt="Foto do Jogador Dendi" style="width:100%">
        <div class="container">
          <h2>Danil Ishutin</h2>
          <p class="title">Dendi</p>
          <p>29 years</p>
          <p>Ukraine</p>
           <a href="https://twitter.com/DendiBoss" class="fa fa-twitter"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="column">
      <div class="card">
        <img title = "Johan Sundstein" src="../imagens/n0tail.jpg" alt="Foto do Jogador n0tail" style="width:100%">
        <div class="container">
          <h2>Johan Sundstein</h2>
          <p class="title">n0tail</p>
          <p>25 years</p>
          <p>Denmark</p>
           <a href="https://twitter.com/OG_BDN0tail" class="fa fa-twitter"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="column">
      <div class="card">
        <img title = "Nicolai Reedtz" src="../imagens/dev1ce.jpg" alt="Foto do Jogador dev1ce" style="width:100%">
        <div class="container">
          <h2>Nicolai Reedtz</h2>
          <p class="title">dev1ce</p>
          <p>23 years</p>
          <p>Denmark</p>
           <a href="https://twitter.com/dev1ce" class="fa fa-twitter"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="column">
      <div class="card">
        <img title = "Peter Dager" src="../imagens/ppd.jpg" alt="Foto do Jogador ppd" style="width:100%">
        <div class="container">
          <h2>Peter Dager</h2>
          <p class="title">ppd</p>
          <p>27 years</p>
          <p>USA</p>
           <a href="https://twitter.com/Peterpandam" class="fa fa-twitter"></a>
        </div>
      </div>
    </div>
  </div>


  </body>
  </html>
