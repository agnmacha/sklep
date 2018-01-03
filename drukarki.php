<!doctype html>
<html lang="pl-PL">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="styl.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <title>Drukarki</title>
   </head>
   <body>
      <header><?php include 'menu.html';?></header>
      <section>
         <div class="w3-container w3-blue-gray">
            <h1>Drukarki</h1>
         </div>
         <div class="w3-row-padding w3-margin-top">
            <div class="w3-third">
               <div class="w3-card">
                  <a href="canon.php"><img class="im" src="img/drukarki/d6.jpg" alt="CANON" style="height: 300px"></a>
                  <div class="w3-container">
                     <h5>Canon Pixma iP7250</h5>
                  </div>
               </div>
            </div>
            <div class="w3-third">
               <div class="w3-card">
                  <a href="hp.php"> <img class="im" src="img/drukarki/d3.jpg" alt="HP" style="height:300px"></a>
                  <div class="w3-container">
                     <h5>HP DeskJet Ink Advantage 1115</h5>
                  </div>
               </div>
            </div>
            <div class="w3-third">
               <div class="w3-card">
                  <a href="ep.php"> <img class="im" src="img/drukarki/d5.png" alt="EPSON" style="height: 300px"> </a>
                  <div class="w3-container">
                     <h5>Epson L486</h5>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php include 'stopka.html';?>
   </body>
</html>