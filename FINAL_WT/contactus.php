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
  float: center;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 5px;
  text-align: center;
}

.contact-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 5px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
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

<div class="contact-section">
  <h1>Contact Us</h1>
  <p>You can contact us by following ways</p>
</div>


<div class="card">
  <div style="text-align:center">
      <h2>Office Address</h2>
      <p>104,Spandan Heights</p>
      <p>Sola,Ahmedabad-54</p><br>
      <h2>Email Us </h2>
      <a href="mailto:email@egmail.com">onlineexam@gmail.com</a><br><br>
      <h2>Phone number</h2>
      <p>98XXXXXX10</p>
  </div>
</div>


</body>
</html>
