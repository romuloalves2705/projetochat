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
</body>
</html>