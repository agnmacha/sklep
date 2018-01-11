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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>Magazyn</title>
      <?php
         if(!isset($_SESSION['zalogowany'])){
         	header('Location:logowanie.php');
         	exit();
         }
         ?>
	   
   </head>
   <body>
      <header><?php include 'menu.html'; ?></header>
      <section>
         <ul>
            <li><a class="active" href="dlazalogowanych.php">Magazyn</a></li>
            <li><a href="pracownicy.php">Pracownicy</a></li>
         </ul>
		  <div class="margin">
         <?php echo "<h2>Witaj " .$_SESSION['user']. '! [<a href="wylogowanie.php">Wyloguj się!</a>]</h2>'; ?>
         <?php
            include 'baza.php';
            $sql = 'SELECT `nazwa`, `stan`, `zamowienie`, `datazamow`
            FROM `zasoby`
            ORDER BY `nazwa`';
            $result = mysqli_query($conn, $sql);
            
            if(mysqli_num_rows($result) > 0){
            	while($row = mysqli_fetch_assoc($result)){
            ?>
		
         <table id="s">
            <thead>
               <tr>
                  <td width="200px" class="sort"><span class="glyphicon glyphicon-list"></span>Nazwa</td>
                  <td width="200px" class="sort"><span class="glyphicon glyphicon-inbox"></span>Stan</td>
                  <td width="200px" class="sort"><span class="glyphicon glyphicon-shopping-cart"></span>Zamowienie</td>
                  <td width="200px" class="sort"><span class="glyphicon glyphicon-calendar"></span>Data</td>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td width="200px"><?php echo '<p>' . $row['nazwa'] . '</p>' ?></td>
                  <td width="200px"><?php echo '<p>' . $row['stan'] . '</p>' ?></td>
                  <td width="200px"><?php echo '<p>' . $row['zamowienie'] . '</p>' ?></td>
                  <td width="200px"><?php echo '<p>' . $row['datazamow'] . '</p>' ?></td>
               </tr>
            </tbody>
         </table>
		  
         <?php
            }
            }
            else {
            echo "0 wynikow";
            }
            ?>	
		 </div>   
      </section>
      <?php include 'stopka.html'; ?>		
   </body>
</html>
<?php ob_end_flush(); ?>