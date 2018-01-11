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
	  <script src="javascr.js"></script>	
	   <title>Pracownicy</title>
	    <?php
         if(!isset($_SESSION['zalogowany'])){
         	header('Location:logowanie.php');
         	exit();
         }
         ?>
   </head>
   <body>
      <header><?php include 'menu.html';?></header>
      <section>
         <ul>
            <li><a href="dlazalogowanych.php">Magazyn</a></li>
            <li><a class="active" href="pracownicy.php">Pracownicy</a></li>
         </ul>
		<div class="margin">
		   <?php echo "<h2>Witaj " .$_SESSION['user']. '! [<a href="wylogowanie.php">Wyloguj się!</a>]</h2>'; ?>
       
         <table>
            <thead>
               <tr>
                  <td class="sort"  ><span class="glyphicon glyphicon-list-alt"></span> Lp.   <span class="glyphicon glyphicon-triangle-bottom" style="font-size:10px"></span></td>
                  <td  class="sort" > <span class="glyphicon glyphicon-user"></span>  Imię i nazwisko   <span class="glyphicon glyphicon-triangle-bottom" style="font-size:10px"></span></td>
                  <td class="sort"><span class="glyphicon glyphicon-phone-alt"></span> Numer telefonu   <span class="glyphicon glyphicon-triangle-bottom" style="font-size:10px"></span> </td>
                  <td class="sort"><span class="fa fa-birthday-cake"></span>  Wiek   <span class="glyphicon glyphicon-triangle-bottom" style="font-size:10px"></span></td>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>1</td>
                  <td>Adam Nowak</td>
                  <td>500452678</td>
                  <td>30</td>
               </tr>
               <tr>
                  <td>2</td>
                  <td>Jan Kowalski</td>
                  <td>603256987</td>
                  <td>25</td>
               </tr>
               <tr>
                  <td>3</td>
                  <td>Alicja Nowicka</td>
                  <td>607135284</td>
                  <td>21</td>
               </tr>
               <tr>
                  <td>4</td>
                  <td>Maria Wiśniewska</td>
                  <td>511874249</td>
                  <td>42</td>
               </tr>
               <tr>
                  <td>5</td>
                  <td>Igor Lewandowski</td>
                  <td>652759336</td>
                  <td>36</td>
               </tr>
            </tbody>
         </table>
		</div>
      </section>
      <?php include 'stopka.html';?>
   </body>
</html>
<?php ob_end_flush(); ?>