<!doctype html>
<html lang="pl-PL">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="styl.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <title>Tablety</title>
   </head>
   <body>
      <header><?php include 'menu.html';?></header>
      <section>
         <div class="w3-container w3-blue-gray">
            <h1>Tablety</h1>
         </div>
         <div class="w3-row-padding w3-margin-top">
            <div class="w3-third">
               <div class="w3-card">
                  <a href="lentab.php"><img class="im" src="img/tablety/t6.jpeg" alt="LENOVO" style="height: 300px"></a>
                  <div class="w3-container">
                     <h5>Lenovo TAB 2 A7-10F</h5>
                  </div>
               </div>
            </div>
            <div class="w3-third">
               <div class="w3-card">
                  <a href="sams.php"> <img class="im" src="img/tablety/t4.jpeg" alt="SAMSUNG" style="height:300px"></a>
                  <div class="w3-container">
                     <h5>Samsung Galaxy Tab A 10.1</h5>
                  </div>
               </div>
            </div>
            <div class="w3-third">
               <div class="w3-card">
                  <a href="apple.php"> <img class="im" src="img/tablety/t1.jpeg" alt="APPLE" style="height: 300px"> </a>
                  <div class="w3-container">
                     <h5>Apple iPad Air</h5>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php include 'stopka.html';?>
   </body>
</html>