<?php include 'inc/header.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
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

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="mitesh.jpeg" alt="mitesh" style="width:95%">
      <div class="container">
        <h2>Mitesh Jadav</h2>
        <p class="title">Member of team</p>
        <p>B.E Information and communication Texhnology</p>
        <p>miteshjadav.ict17@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="malav.jpeg" alt="Malav" style="width:90%">
      <div class="container">
        <h2>Malav Patel</h2>
        <p class="title">Member of team</p>
        <p>B.E Information and communication Texhnology</p>
        <p>malavpatel.ict17@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="daksh.jpeg" alt="Daksh" style="width:100%">
      <div class="container">
        <h2>Daksh Patel</h2>
        <p class="title">Member of team</p>
        <p>B.E Information and communication Texhnology</p>
        <p>dakshpatek.ict17@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>


  <div class="column">
    <div class="card">
      <img src="darshit.jpeg" alt="darshit" style="width:100%">
      <div class="container">
        <h2>Darshit Gajjar</h2>
        <p class="title">Member of team</p>
        <p>B.E Information and communication Texhnology</p>
        <p>darshitgajjar.ict17@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
