<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Chat Romulo</title>
   <link rel="icon" href="fotos/favicon1">
   <style type="text/css">
      *{
         margin:0;
         padding:0;
         box-sizing: border-box;
      }
      body {
         background: #ebebeb;
      }
      .right {
         float: right;
         /*margin-right: 44%;*/
      }
      .botao{
         padding: 6px 8px;
         background: linear-gradient(to bottom, #069, #09f 130%);
         border:1px solid white;
         font: 16px tahoma,arial;
         color: white;
         border-radius: 5px;
         text-align: center;
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
         box-shadow: #666 2px 1px 10px;
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
         margin-bottom: 10px;
         outline: none;
      }
   </style>
</head>
<body>
   <div class="formulario">
      <h1>Bem vindo ao chat, faça o login</h1>
      <form action="" method="post" enctype="multipart/form-data">
         <label >
            <span>Informe seu e-mail</span>
            <input type="text" name="email" placeholder="Se e-mail aqui." />
         </label>
         <input type="submit" value="Entrar" class="botao right"/>
      </form>
   </div>
</body>

</html> 