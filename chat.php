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

   if(isset($_GET['acao']) && $_GET['acao'] == 'sair') {
      unset($_SESSION['email_logado']);
      unset($_SESSION['id_user']);
      session_destroy();
      header("Location: index.php");
   }
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
   <h2>Bem vindo, <?php echo $dadosUser['nome'];?></h2>
   <a href="?acao=sair">Sair</a>
   <aside id="users_online">
      <ul>
         <?php 
            $pegaUsuarios = BD::conn()->prepare("SELECT * FROM `usuarios` WHERE `id` != ?");
            $pegaUsuarios->execute(array($_SESSION['id_user']));

            while($row = $pegaUsuarios->fetch()){
               $foto = ($row['foto'] == '') ? 'default.jpg' : $row['foto'];
               $blocks = explode(',', $row['blocks']);
               $agora = date('Y-m-d H:i:s');
               if(!in_array($_SESSION['id_user'], $blocks)){
                  $status = 'on';
                  if($agora >= $row['limite']) {
                     $status = 'off';
                  }
         ?>
            <li id="<?php echo $row['id'];?>">
               <div class="imgSmall"><img src="fotos/<?php echo $foto;?>" border="0"></div>
               <a href="#" id="<?php echo $_SESSION['id_user'].':'.$row['id'];?>" class="comecar"><?php echo utf8_encode($row['nome']);?></a>
               <span id="<?php echo $row['id'];?>"class="status <?php echo $status;?>"></span>
            </li>
            <?php }}?>   
      </ul>
   </aside>
   <!-- Janelas Chats -->
   <aside id="chats">
   <script src="js/functions.js"></script>   
   </aside>
</body>
</html> 