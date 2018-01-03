<?php include('form_process.php'); ?>
<!doctype html>
<html lang="pl-PL">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="styl.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <title>Kontakt</title>
   </head>
   <body>
      <header><?php include 'menu.html';?></header>
      <section>
         <h1>Kontakt</h1>
         <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
            <div class="w3-third w3-blue-gray">
               <p><i class="fa fa-envelope-o w3-xxlarge w3-text-light-grey icon" aria-hidden="true"></i></p>
               <p>E-mail : compaggshop@gmail.com </p>
            </div>
            <div class="w3-third w3-light-blue">
               <p><i class="fa fa-mobile  w3-xxlarge w3-text-light-grey icon" aria-hidden="true"></i></p>
               <p>Telefon : 123-456-789 </p>
            </div>
            <div class="w3-third w3-blue-gray">
               <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey icon" aria-hidden="true"></i></p>
               <p>Adres: Rzeczypospolitej 8, Gdańsk</p>
            </div>
         </div>
         <form action="" method="post" id="contact" class="w3-container w3-card-4 w3-light-grey w3-text-blue  w3-round-xxlarge" style="width:550px;">
            <h2 class="w3-center">Napisz do nas</h2>
            <div class="w3-row w3-section">
               <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
               <div class="w3-rest">
                  <input class="w3-input w3-border w3-round-xxlarge"  style="width:450px" name="name" type="text" placeholder="Imie"  required>
               </div>
            </div>
            <div class="w3-row w3-section">
               <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
               <div class="w3-rest">
                  <input class="w3-input w3-border w3-round-xxlarge" style="width:450px" name="email" type="email" placeholder="E-mail" required>
               </div>
            </div>
            <div class="w3-row w3-section">
               <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
               <div class="w3-rest">
                  <input class="w3-input w3-border w3-round-xxlarge "  style="width:450px" name="message" type="text" placeholder="Wiadomość" required>
               </div>
            </div>
            <button class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding w3-round-xxlarge" style="width:500px">Wyślij</button>
         </form>
         <br>
         <div class="mess"><?= $a ?></div>
      </section>
      <?php include 'stopka.html';?>
   </body>
</html>