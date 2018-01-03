<?php
   ob_start();
   session_start();
   ?>  

<!doctype html>
<html lang="pl-PL">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="styl.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <title>Logowanie</title>
   </head>
   <body>
      <header><?php include 'menu.html'; ?></header>
	   
<?php
	if((isset($_SESSION['zalogowany']))&&( $_SESSION['zalogowany']== true)){
		header('Location:dlazalogowanych.php');
		exit();
	}
?>
 <section>
         <div class="container">
            <h2>Logowanie</h2>
			 <p> Login: admin Hasło: admin</p>
            <form class="form-horizontal" action="zaloguj.php" method="post">
               <div class="form-group">
                  <label class="control-label col-sm-2" for="login"> Login:</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" placeholder="Wpisz swój login" name="login" required>
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd"> Hasło:</label>
                  <div class="col-sm-10">
                     <input type="password" class="form-control" placeholder="Podaj hasło" name="haslo" id="pwd" required>
                  </div>
               </div>
               <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                     <button class="bt" type="submit" value="Zaloguj sie">Zaloguj</button>	
                  </div>
               </div>
            </form>
         </div>
		  
         <?php
            if(isset($_SESSION['blad'])){
            echo $_SESSION['blad'];	
            }
            ?>		
      </section>
      <?php include 'stopka.html'; ?>		
   </body>
</html>
<?php ob_end_flush(); ?>