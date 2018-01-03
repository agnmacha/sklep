<!doctype html>
<html lang="pl-PL">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="styl.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>		
      <title>Canon Pixma iP7250</title>
   </head>
   <body>
      <header>	<?php include 'menu.html';?>	</header>
      <section>
         <?php
            include 'baza.php';
            $sql = 'SELECT `nazwa`, `opis2`, `opis1`, `opis3`, `naglowek1`, `naglowek2`, `naglowek3`
            FROM `produkty`
            WHERE `id` =7
            ORDER BY `nazwa`';
            $result = mysqli_query($conn, $sql);
            
            	if (mysqli_num_rows($result) > 0) {
                // output data of each row
            	
                while($row = mysqli_fetch_assoc($result)) {
            	
            
            echo '<h1>' . $row['nazwa'] . '</h3>';
            echo '<h3> ' . $row['naglowek1'] . '</h3>';
            echo '<p> ' . $row['opis1'] . '</p>';
            echo '<h3> ' . $row['naglowek2'] . '</h3>';
            echo '<p> ' . $row['opis2'] . '</p>';
            echo '<h3> ' . $row['naglowek3'] . '</h3>';
            echo '<p> ' . $row['opis3'] . '</p>';
              }
            } else {
                echo "0 results";
            
            }
            
            ?>	
         <div id="myCarousel" class="carousel" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
               <div class="item active">
                  <img src="img/drukarki/d1.jpg" alt="Canon- zdjecie 1" style="width:50%; height:500px " class=" img-responsive center-block">       
               </div>
               <div class="item">
                  <img src="img/drukarki/d6.jpg" alt="Canon- zdjecie 2" style="width:50%; height:500px" class=" img-responsive center-block">      
               </div>
               <div class="item">
                  <img src="img/drukarki/d7.jpg" alt="Canon- zdjecie 3 " style="width:50%; height:500px" class=" img-responsive center-block">
               </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
      </section>
      <?php include 'stopka.html';?>
   </body>
</html>