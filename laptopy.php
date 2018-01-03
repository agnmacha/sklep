<!doctype html>
<html lang="pl-PL">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="styl.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <title>Laptopy</title>
   </head>
   <body>
      <header><?php include 'menu.html';?></header>
      <section>
         <div class="w3-container w3-blue-gray">
            <h1>Laptopy</h1>
         </div>
         <div class="w3-row-padding w3-margin-top">
            <div class="w3-third">
               <div class="w3-card">
                  <a href="asus.php"><img class="im" src="img/laptopy/l4.jpeg" alt="ASUS" style="height: 300px"></a>
                  <div class="w3-container">
                     <h5>Asus</h5>
                  </div>
               </div>
            </div>
            <div class="w3-third">
               <div class="w3-card">
                  <a href="lenovo.php"> <img class="im" src="img/laptopy/l1.jpg" alt="LENOVO" style="height:300px"></a>
                  <div class="w3-container">
                     <h5>Lenovo</h5>
                  </div>
               </div>
            </div>
            <div class="w3-third">
               <div class="w3-card">
                  <a href="msi.php"> <img class="im" src="img/laptopy/l2.jpg" alt="MSI" style="height: 300px"> </a>
                  <div class="w3-container">
                     <h5>MSI</h5>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php include 'stopka.html';?>
   </body>
</html>