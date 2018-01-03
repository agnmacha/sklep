<!doctype html>
<html lang="pl-PL">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="styl.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <title>Oferta</title>
   </head>
   <body>
      <header><?php include 'menu.html';?></header>
      <section>
         <div class="w3-container w3-blue-gray">
            <h1>Sprzęt</h1>
         </div>
         <div class="w3-row-padding w3-margin-top">
            <div class="w3-third">
               <div class="w3-card">
                  <a href="laptopy.php"><img class="im" src="img/lap.jpeg" alt="LAPTOPY"></a>
                  <div class="w3-container">
                     <h5>Laptopy</h5>
                  </div>
               </div>
            </div>
            <div class="w3-third">
               <div class="w3-card">
                  <a href="tablety.php"> <img class="im" src="img/tab.jpeg" alt="TABLETY"></a>
                  <div class="w3-container">
                     <h5>Tablety</h5>
                  </div>
               </div>
            </div>
            <div class="w3-third">
               <div class="w3-card">
                  <a href="drukarki.php"> <img class="im" src="img/druk.jpeg" alt="DRUKARKI"> </a>
                  <div class="w3-container">
                     <h5>Drukarki</h5>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php include 'stopka.html';?>
   </body>
</html>