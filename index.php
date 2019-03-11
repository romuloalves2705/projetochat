<?php
   session_start();
   include_once "defines.php";
   require_once('classes/BD.class.php');
   BD::conn();
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
   <style>
      * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
      }
      body {
         background: #ebebeb;
      }
      .right {
         float: right;
      }
      .botao {
         padding: 6px 8px;
         background: linear-gradient(to bottom, #069, #09f 130%);
         border: 1px solid solid white;
         font: 16px tahoma, arial;
         color: white;
         border-radius: 5px;  
      }
      .formulario {
         position: absolute;
         top: 50%;
         left: 50%;
         width: 500px;
         height: 200px;
         background: white;
         border-radius: 6px;
         margin-left: -250px;
         margin-top: -100px;
         padding: 10px;
         box-shadow: #666 5px 5px 20px;
      }
      h1 {
         float: left;
         width: 100%;
         margin-bottom: 10px;
         font: 24px "Trebuchet MS", tahoma, arial;
         font-weight: bold;
         color: #069;
         padding: 5px;
         text-align: center;
      }
      .formulario label {
         float: left;
         width: 100%;
      }
      .formulario label span {
         float: left;
         width: 100%;
         font: 15px Tahoma, arial;
         color: #666;
         margin-bottom: 10px;
      }
      .formulario label input {
         float: left;
         width: 100%;
         padding: 6px;
         background: white;
         border-radius: 5px;
         border: 1px solid #999;
         outline: none;
         margin-bottom: 10px;
      }
   </style>
</head>
<body>
   <div class="formulario">
      <h1>Seja bem vindo ao chat faça se login</h1>
      <?php
         if(isset($_POST['acao']) && $_POST['acao'] == 'logar') {
            $email = strip_tags(trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING)));
            if($email == '') {
               echo 'Informe seu email';
            }else {
               $pegaUser = BD::conn()->prepare("SELECT * FROM `usuarios` WHERE `email` = ?");
               $pegaUser->execute(array($email));

               if($pegaUser->rowCount() == 0) {
                  echo 'Não encontramos este login!';
               }else {
                  $agora = date('Y-m-d H:i:s');
                  $limite = date('Y-m-d H:i:s', strtotime('+3 min'));
                  $update = BD::conn()->prepare("UPDATE `usuarios` SET `horario` = ?, `limite` = ? WHERE `email` = ? ");
                  if($update->execute(array($agora, $limite, $email)) ) {
                     while($row = $pegaUser->fetchObject()) {
                        $_SESSION['email_logado'] = $email;
                        $_SESSION['id_user'] = $row->id;
                        header("Location: chat.php");
                     }
                  }// Se atualizou
               }
            }
         }
      ?>
      <form action="" method="post" enctype="multipart/form-data">
         <label>
            <span>Informe seu e-mail</span>
            <input type="text" name="email" placeholder="Seu e-mail aqui">
         </label>
         <input type="hidden"  name="acao" value="logar">
         <input type="submit" value="Entrar" class="botao right">
      </form>
   </div>
</body>
</html>