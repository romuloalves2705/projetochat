<?php
   session_start();
   include_once "defines.php";
   require_once('classes/BD.class.php');
   BD::conn();

   if(!isset($_SESSION['email_logado'], $_SESSION['id_user'])) {
      header("Location: index.php");
   }

   $pegaUser = BD::conn()->prepare("SELECT * FROM `usuarios` WHERE `email` = ?");
   $pegaUser->execute(array($_SESSION['email_logado']));
   $dadosUser = $pegaUser->fetch();
   //print_r($dadosUser);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Loja Virtual">
   <meta name="author" content="Romulo Alves">
   <title>Romulo Chat</title>
   <link rel="icon" href="fotos/favicon1.png">
   <!--<link rel="stylesheet" href="css/style.css" type="text/css">
   <script type="text/javascript" src="js/jquery.js"></script>-->
   <link rel="stylesheet" href="css/style.css">
   <script src="js/jquery.js"></script>
   <script> 
      $.noConflict(); 
   </script>
</head>
<body>
   <span class="user_online" id="<?php echo $dadosUser['id'];?>"></span>
   <aside id="users_online">
      <ul>
         <?php for($i=1; $i<=8; $i++):?>
            <li id="5">
               <div class="imgSmall"><img src="fotos/romulo.jpg" border="0"></div>
               <a href="#" id="3:5" class="comecar">Rômulo Alves</a>
               <span id="5"class="status on"></span>
            </li>
         <?php endfor;?>
      </ul>
   </aside>
   <!-- Janelas Chats -->
   <aside id="chats">
   <script src="js/functions.js"></script>   
   </aside>
</body>
</html> 