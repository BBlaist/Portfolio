<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;700&display=swap" rel="stylesheet">
<script src="..//javascript/script.js"></script>
</head>
<body>
<header class="sticky-header"> 
    <ul>
        <li><a href="../../index.html" style="color: black;">Home</a></li>
        <li><a href="projecten.php" style="color: black;">Projecten</a></li>
        <li><a href="overmij.html" style="color: black;">Over mij</a></li>
        <li><a href="#" style="color: #FFA500;">Contact</a></li>
      </ul>
</header>
<form action="action.php" method="post">
<div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>CONTACT</span>
            <span>ME</span>
          </div>
          <div class="app-contact">CONTACT INFO | <a href="tel:+31 6 12778331" class="links">+31 6 12778331</a>  | <a href="mailto:dirkrijntalder@gmail.com" class="links">dirkrijntalder@gmail.com</a></div>
          
        </div>
        <div class="screen-body-item">
          <div class="app-form">
            <div class="app-form-group">
              <input class="app-form-control" name="name" placeholder="NAME" required>
            </div>
            <div class="app-form-group">
              <input type="email" class="app-form-control" name="email" placeholder="EMAIL" required>
            </div>
            <div class="app-form-group">
              <input type="text" class="app-form-control" placeholder="TELEFOONNUMMER" name="phone" id="phoneNumberInput">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="BEDRIJF NAAM" name="company">
            </div>
            <div class="app-form-group message">
              <input class="app-form-control" placeholder="MESSAGE" name="message" required>
            </div>
            <div class="app-form-group buttons">
              <button type="submit" class="app-form-button">SEND</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </div>
</div>
</form>


</body>
</html>
