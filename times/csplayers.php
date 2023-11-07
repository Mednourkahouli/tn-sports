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

  <h2>CounterStrike</h2>
  <br>

  <div class="row">
    <div class="column">
      <div class="card">
        <img title = "Freddy Johansson" src="../imagens/krimz.jpg" alt="Foto do Jogador Krimz" style="width:100%">
        <div class="container">
          <h2>Freddy Johansson</h2>
          <p class="title">KRIMZ</p>
          <p>25 years.</p>
          <p>Sweden</p>
           <a href="https://twitter.com/Krimz" class="fa fa-twitter"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="column">
      <div class="card">
        <img title = "Ladislav Kovácz" src="../imagens/guardian.jpg" alt="Foto do Jogador GuardiaN" style="width:100%">
        <div class="container">
          <h2>Ladislav Kovácz</h2>
          <p class="title">GuardiaN</p>
          <p>28 years.</p>
          <p>Slovakia</p>
           <a href="https://twitter.com/guardiancsgo" class="fa fa-twitter"></a>
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
          <p>23 years.</p>
          <p>Denmark</p>
           <a href="https://twitter.com/dev1ce" class="fa fa-twitter"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="column">
      <div class="card">
        <img title = "Oleksandr Kostyliev" src="../imagens/s1mple.jpg" alt="Foto do Jogador s1mple" style="width:100%">
        <div class="container">
          <h2>Oleksandr Kostyliev</h2>
          <p class="title">s1mple</p>
          <p>21 years.</p>
          <p>Ukraine</p>
           <a href="https://twitter.com/s1mpleo" class="fa fa-twitter"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="column">
      <div class="card">
        <img title = "Tyler Lathan" src="../imagens/skadoodle.jpg" alt="Foto do Jogador Skadoodle" style="width:100%">
        <div class="container">
          <h2>Tyler Lathan</h2>
          <p class="title">Skadoodle</p>
          <p>26 years.</p>
          <p>USA</p>
           <a href="https://twitter.com/Ska" class="fa fa-twitter"></a>
        </div>
      </div>
    </div>
  </div>

  </body>
  </html>
