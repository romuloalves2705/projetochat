jQuery(function(){
   
   //var userOnline = Number(jQuery('span.user_online').atrr('id'));
   // Adicionar Janela
   function add_janela(id, nome, status) {
      var janelas = Number(jQuery('#chats .window').length);
      var pixels = (270+5)*janelas;
      var style = 'float:none; position:absolute; bottom:0; left:'+pixels+'px';
      var splitDados = id.split(':');
      var id_user = Number(splitDados[1]);
      var janela = '<div class="window" id="janela_'+id_user+'" style="'+style+'">';
      janela += '<div class="header_window"><a href="#" class="close">X</a><span class="name">'+nome+'</span><span id="'+id_user+'" class="'+status+'"></span></div >';
      janela += '<div class="body"><div class="mensagens"><ul></ul></div>';
      janela += '<div class="send_message" id="'+id+'"><input type="text" name="mensagem" class="msg" id="'+id+'"/></div></div></div>';

      jQuery('#chats').append(janela);
   }
   /* Funçao abri janela */
   jQuery('body').on('click', '#users_online a', function() {
      var id = jQuery(this).attr('id');
      jQuery(this).removeClass('comecar');
      
      var status = jQuery(this).next().attr('class');
      var splitIds = id.split(':');
      var idJanela = Number(splitIds[1]);

      //var nome = jQuery(this).text();
      //add_janela(id, nome, status);

      if(jQuery('#janela_'+idJanela).length == 0) {
         var nome = jQuery(this).text();
         add_janela(id, nome, status);
         }else {
         jQuery(this).removeClass('comecar');
         }
   });
   // Funçao minimizar janela //
   jQuery('body').on('click', '.header_window', function() {
      var next = jQuery(this).next();
      next.toggle(100);
   });
   // Funçao fechar janela //
   jQuery('body').on('click', '.close', function() {
      var parent = jQuery(this).parent().parent();
      var idParent = parent.attr('id');
      var splitParent = idParent.split('_');
      var idJanelaFechada = Number(splitParent[1]);

      var contagem = Number(jQuery('.window').length)-1;
      var indice = Number(jQuery('.close').index(this));
      //alert(indice);
      var restamAFrente = contagem-indice;

      for(var i = 1; i <= restamAFrente; i++) {
         jQuery('.window:eq('+(indice+i)+')').animate({left:"-=275"}, 200);
      }
      parent.remove();
      jQuery('#users_online li#'+idJanelaFechada+' a').addClass('comecar');
   });


});