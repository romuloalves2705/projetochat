<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Chat Romulo</title>
   <link rel="icon" href="fotos/favicon1">
   <link rel="stylesheet" href="css/style.css" type="text/css" >
   <script type="text/javasript" src="js/jquery.js"></script>
   <script tipe="text/javascript">
      $.noConflict();
   </script>
</head>
<body>
   <aside id="users_online">
      <ul>
         <?php for($i=1; $i<=8; $i++):?>
            <li id="5">
               <div class="imgSmall"><img src="fotos/romulo.jpg" border="0"/></div>
               <a href="#" id="3:5" class="comecar">Rômulo Alves</a>
               <span id="5" class="status on"></span>
            </li>
         <?php endfor;?>
      </ul>
   </aside>

   <aside id="chats">
      <?php for ($i=1; $i<=4; $i++):?>
         <div class="window" id="janela_x">
            <div class="header_window"><a href="#" class="close">X</a> <span class="name">Viado Boiola</span> <span class="status on" id="5"></span></div>
            <div class="body">
               <div class="mensagens">
                  <ul>
                     <?php for ($n=1; $n<=8; $n++):?>
                        <li class="eu"><p>Este é um exemplo de mensagem</p></li>
                        <li class="">
                           <div class="imgSmall"><img src="fotos/default.jpg" border="0" /></div>
                           <p>Este é um exemplo de mensagem</p>
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