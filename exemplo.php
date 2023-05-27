<?php
/*!
  * Modal Dinamico v0.001 (https://github.com/srvictorbatista/modal_dinamico)
  * Copy 2023 see the author (https://github.com/srvictorbatista)
  * Licensed free to all users
  */
include_once('_config.php');?>




<!-- FontAwesome CDN, Fontes
	https://fontawesome.com/versions
	https://cdnjs.com/libraries/font-awesome
	https://fontawesome.com/v5/docs/web/use-with/wordpress/install-manually
	https://www.angularjswiki.com/fontawesome/cdn/
-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>


<!-- jQuery CDN, fontes
	https://releases.jquery.com/
	https://cdnjs.com/libraries/jquery
	https://www.w3schools.com/jquery/jquery_get_started.asp
-->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>


<!-- Bootstrap CDN, fontes:
	https://getbootstrap.com/docs/versions/
	https://getbootstrap.com/docs/5.3/examples/ 
	https://cdnjs.com/libraries/bootstrap
-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<!-- link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script -->

<!-- link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script -->
    
<!-- link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script -->

<style type="text/css"> 
.content {margin:12% 30%;padding:25px 5px;border:solid 1px #AAA; background-color: #13133042; border-radius:5px; text-align: center;}
.content button{ margin: 5px; }
 #MDLl32E2A41B * input{padding:5px;margin:5px;border:solid 2px #FFFFFF25;border-radius:8px; width:100%;}
 #MDLl32E2A41B *::-moz-placeholder {color: #FFFFFFA5; font-size: 24px !important;}
 #MDLl32E2A41B *:-moz-placeholder {color: #FFFFFFA5; font-size: 24px !important;}
 #MDLl32E2A41B *::-webkit-input-placeholder {color: #FFFFFFA5; font-size: 24px !important;}
 #MDLl32E2A41B *:-ms-input-placeholder {color: #FFFFFFA5; font-size: 24px !important;}
 #MDLl32E2A41B *:-moz-placeholder {color: #FFFFFFA5; font-size: 24px !important;}
 * { transition: 0.8s;}
</style>






<div class="content">

	<button type="button" name="BOTAO_01" class="btn btn-light" onclick="MODAL();">Exemplo Gernerico</button>
	<button type="button" name="BOTAO_02" class="btn btn-light" onclick="alert('isto é um exemplo de alert');">Exemplo alert</button>
	<button type="button" name="BOTAO_03" class="btn btn-light" onclick="info('isto é um exemplo de info');">Exemplo info</button>
	<button type="button" name="BOTAO_04" class="btn btn-light" onclick="alarm('isto é um exemplo de alarme');">Exemplo alarme</button>
	<button type="button" name="BOTAO_05" class="btn btn-light" id="formmodal01">Exemplo formulário</button>
	<button type="button" name="BOTAO_06" class="btn btn-light" onclick="Exemplo_01();">Exemplo com todos</button>

</div>










<SCRIPT>
function Exemplo_01(){
  MODAL(
    [
     {
       'title': 'Título do modal ', 
       'body': 'Insira seu conteúdo ou campos de formulario, aqui...' +'<h6 style="margin:2px; 20px">Libs carregadas (dependências):</h6> <span style="font-size:10px; line-height:1.1;">Bootstrap v'+(bootstrap.Tooltip.VERSION)+'<br>' +'jQuery v'+($.fn.jquery)+'<br>FontAwesome.', 
       'action':'#MDL_ACTION',
       'method':'POST',
     }, 
     {'type':'submit', 'name':'NAME1', 'value':'VALOR1', 'label':'Submeter', 'link':'javascript:void(0)'}, 
     {'type':'button', 'name':'NAME1', 'value':'VALOR1', 'label':'Entendi', 'link':'javascript:void(0)'}, 
     {'type':'button', 'name':'NAME1', 'value':'VALOR1', 'label':'Info ao Clicar', 'link':'javascript:void(0)', 'onclick':'info(\'exemplo de info.\')'}, 
     {'type':'button', 'name':'NAME1', 'value':'VALOR1', 'label':'Alert ao Clicar', 'link':'javascript:void(0)', 'onclick':'alert(\'exemplo de alert\')'},
     {'type':'button', 'name':'NAME1', 'value':'VALOR1', 'label':'Alarm ao Clicar', 'link':'javascript:void(0)', 'onclick':'alarm(\'exemplo de alarm\')'}, 
     {'type':'button', 'name':'NAME1', 'value':'VALOR1', 'label':'Testar todos os modais disponiveis', 'link':'javascript:void(0)', 'onclick':'TESTE_MDL_BOX(\'\')'}, 
     {'type':'button', 'name':'NAME2', 'value':'VALOR2', 'label':'Fechar', 'link':'#fechar'}
    ]
  );
}




function formulario_01(){
  MODAL(
    [
     {
       'title': 'Isto é um formulário ', 
       'body': '<input type="text" name="nome" placeholder="Nome" value="" ><br>\
        <input type="text" name="sobrenome" placeholder="Sobrenome" value="" >', 
       'action':'callback.php',
       'method':'POST',
     }, 
     {'type':'submit', 'name':'NAME1', 'value':'VALOR1', 'label':'Submeter', 'link':'javascript:void(0)'}, 
     {'type':'button', 'name':'NAME2', 'value':'VALOR2', 'label':'Fechar', 'link':'#fechar'}
    ]
);
}


window.addEventListener("load", function(event) {

  $('#formmodal01').click(function(){
    formulario_01();
  })






 // Exemplo_01();
  $('body').attr('data-bs-theme','dark'); // Tema escuro (bootstrap 5.3+)
});
</SCRIPT>

<!-- DinamicoInterno -->
<SCRIPT src="./lib/functions.js?pgn=<?=$THISFILE;?>" defer></SCRIPT>
