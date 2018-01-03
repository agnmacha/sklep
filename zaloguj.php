<?php
   ob_start();
   session_start();
   ?>
<html>
   <?php
      if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
      {
       header('Location: index.php');
       exit();
      }
      
      $host = 'localhost';
         $db_user= 'admin';
         $db_password = '123';
         $db_name = 'strona';
      
      $polaczenie=@new mysqli($host, $db_user,$db_password, $db_name);
      
      if($polaczenie->connect_errno!=0)
      {
      echo "Bład: " .$polaczenie->connect_errno;
      }
      
      else{
      $login=$_POST['login'];
      $haslo=$_POST['haslo'];
      
      $login = htmlentities($login, ENT_QUOTES, "UTF-8" );
      $haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
      
         if($result= @$polaczenie->query(sprintf("SELECT*FROM uzytkownicy WHERE user='%s' AND pass='%s'", mysqli_real_escape_string($polaczenie,$login), mysqli_real_escape_string($polaczenie, $haslo))))
      {
      	$ilu_userow = $result->num_rows;
      	 if($ilu_userow>0)
      	 {
      	$_SESSION['zalogowany']=true;
      	$wiersz = $result->fetch_assoc();
      	$_SESSION['id']=$wiersz['id'];
      	$_SESSION['user'] = $wiersz['user']; 
      	
          unset($_SESSION['blad']);
      	$result->free_result();
      	header('Location:dlazalogowanych.php');
      	 }
      	else {
      		$_SESSION['blad']='<h2><span style="color:red">Nieprawidłowy login lub hasło !</span></h>';
      		header('Location: logowanie.php');
      	}
      }
      $polaczenie->close();
      }
      ?>
</html>
<?php ob_end_flush(); ?>