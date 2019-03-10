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
   <script>$.noConflict();</script>
</head>
<body>
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
      <?php for($i=1; $i<=4; $i++):?>
         <div class="window" id="janela_x">
            <div class="header_window"><a href="#" class="close">X</a><span class="name">Fulano de tal</span><span id="5" class="status on"></span></div>
            <div class="body">
               <div class="mensagens">
                  <ul>
                     <?php for($n=1; $n<=4; $n++):?>
                        <li class="eu"><p>Este e um exemplo de mensagem que aparecera</p></li>
                        <li class="">
                           <div class="imgSmall"><img src="fotos/romulo.jpg" border="0"></div>
                           <p>Este e um exemplo de mensagem que aparecera</p>
                        </li>
                     <?php endfor;?>
                  </ul>
               </div>
               <div class="send_message" id="3:5">
                  <input type="text" name="mensagem" class="msg" id="3:5">
               </div>
            </div>
         </div>
      <?php endfor;?>
   </aside>
</body>
</html> 