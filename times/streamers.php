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

  <h2>STREAMERS</h2>
  <br>

  <div class="row">
    <div class="column">
      <div class="card">
        <img title = "AnneMunition" src="../imagens/AnneMunition.jpg" alt="Foto da streamer Anne" style="width:100%">
        <div class="container">
          <h2>AnneMunition</h2>
          <p class="title">Anne</p>
          <p>29 anos.</p>
          <p>California - US</p>
           <a href="https://twitter.com/annemunition" class="fa fa-twitter"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="column">
      <div class="card">
        <img title = "Coby Meadows" src="../imagens/dizzy.jpg" alt="Foto do streamer dizzy" style="width:100%">
        <div class="container">
          <h2>Coby Meadows</h2>
          <p class="title">dizzy</p>
          <p>19 Years.</p>
          <p>Florida - US</p>
           <a href="https://twitter.com/dizzy" class="fa fa-twitter"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="column">
      <div class="card">
        <img title = "Michael Grzesiek" src="../imagens/shroud.jpg" alt="Foto do streamer shroud" style="width:100%">
        <div class="container">
          <h2>Michael Grzesiek</h2>
          <p class="title">shroud</p>
          <p>25 Years.</p>
          <p>Toronto - Ontario - Canada</p>
           <a href="https://twitter.com/shroud" class="fa fa-twitter"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="column">
      <div class="card">
        <img title = "Rafael Knittel" src="../imagens/rakin.jpg" alt="Foto do streamer rakin" style="width:100%">
        <div class="container">
          <h2>Rafael Knittel</h2>
          <p class="title">Rakin</p>
          <p>24 Years.</p>
          <p>Salvador - Bahia - Brazil</p>
           <a href="https://twitter.com/Rakin" class="fa fa-twitter"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="column">
      <div class="card">
        <img title = "Tucker Boner" src="../imagens/JERICHO.jpg" alt="Foto do streamer jericho" style="width:100%">
        <div class="container">
          <h2>Tucker Boner</h2>
          <p class="title">JERICHO</p>
          <p>26 Years</p>
          <p>California - US</p>
           <a href="https://twitter.com/jericho" class="fa fa-twitter"></a>
        </div>
      </div>
    </div>
  </div>

  </body>
  </html>
