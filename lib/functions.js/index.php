<?php  
/*!
  * Modal Dinamico v0.001 (https://github.com/srvictorbatista/modal_dinamico)
  * Copy 2023 see the author (https://github.com/srvictorbatista)
  * Licensed free to all users
  */
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
include_once('../../_config.php');
?>




<?php if(!@empty($_GET)){ //echo print_r($_GET);?>
<?php  // TODAS AS PÀGINAS (get:pgn) ?>
//-- --------------------------------------------------------------------------
//-- --------------------------------------------------------------------------
//-- ----------------------------------
  MODAL = function($MODAL=[{'title': 'Isto é uma janela modal', 'body':'Insira seu conteúdo ou campos de formulario, aqui...' +'<h6 style="margin:2px; 20px">Libs carregadas (dependências):</h6> <span style="font-size:10px; line-height:1.1;">Bootstrap v'+(bootstrap.Tooltip.VERSION)+'<br>' +'jQuery v'+($.fn.jquery)+'<br>FontAwesome.</span>', 'action':'#MDL_ACTION','method':'POST'}, {'type':'button', 'name':'', 'value':'', 'label':'Fechar', 'link':''}, {'type':'submit', 'name':'', 'value':'', 'label':'Submeter', 'link':''}]){
    try{
      $MDL_INPUT = '';
      $I = $MODAL.length-1;
      $i=0;for(let input in $MODAL){
        if($i==0){
          // -- ---------------------------------
          try{
            if($MODAL[0].title != undefined){
              $TITULO = $MODAL[0].title;
            }
          }catch(e){ 
              $TITULO = '';
          }
          try{
            if($MODAL[0].body != undefined){
              $CORPO = $MODAL[0].body;
            }
          }catch(e){ 
              $CORPO = '';
          }
          try{
            if($MODAL[0].action != undefined){
              $ACTION = $MODAL[0].action;
            }
          }catch(e){ 
              $ACTION = '';
          }
          try{
            if($MODAL[0].method != undefined){
              $METHOD = $MODAL[0].method;
            }
          }catch(e){ 
              $METHOD = '';
          }
          // -- ---------------------------------
        }else if($i<=$I){          
          if(($MODAL[input].type == 'button') || ($MODAL[input].type == 'submit')){
              if($MODAL[input].type != undefined){
                 $MDL_INPUT += "<button type=\""+$MODAL[input].type+"\" ";
              }            
              if($MODAL[input].name != undefined){
                $MDL_INPUT += "name=\""+$MODAL[input].name+"\" ";
              }            
              if($MODAL[input].onkeyup != undefined){
                $MDL_INPUT += "onkeyup=\""+$MODAL[input].onkeyup+"\" ";
              }            
              if($MODAL[input].id != undefined){
                $MDL_INPUT += "id=\""+$MODAL[input].id+"\" ";
              }            
              if($MODAL[input].type == 'submit'){
                $MDL_INPUT += "class=\"btn btn-primary /*btn-success*/\" ";
              }else if($MODAL[input].class != undefined){
                $MDL_INPUT += "class=\""+$MODAL[input].class+"\" ";
              }else{
                $MDL_INPUT += "class=\"btn btn-secondary\" ";
              }
              if($MODAL[input].value != undefined){
                $MDL_INPUT += "value=\""+$MODAL[input].value+"\" ";
              }
              if($MODAL[input].link != undefined){
                $MDL_INPUT_link = "window.open('"+$MODAL[input].link+"','_self'); ";
              }else{
                $MDL_INPUT_link = "";
              }              
              if($MODAL[input].onclick != undefined){
                $MDL_INPUT += "onClick=\""+$MDL_INPUT_link+$MODAL[input].onclick+"\" ";
              }else{
                $MDL_INPUT += "onClick=\""+$MDL_INPUT_link+"\" ";
              }
              if(
                ($MODAL[input].label == 'Fechar') ||
                ($MODAL[input].label == 'fechar') ||
                ($MODAL[input].label == 'FECHAR') ||
                ($MODAL[input].label == 'Fechar e Atualizar') ||
                ($MODAL[input].label == 'fechar e atualizar') ||
                ($MODAL[input].label == 'FECHAR E ATUALIZAR') ||
                ($MODAL[input].label == 'Cancelar') ||
                ($MODAL[input].label == 'cancelar') ||
                ($MODAL[input].label == 'CANCELAR') ||
                ($MODAL[input].label == 'Entendi') ||
                ($MODAL[input].label == 'entendi') ||
                ($MODAL[input].label == 'ENTENDI')
              ){
                $MDL_INPUT +=  "data-bs-dismiss=\"modal\" data-dismiss=\"modal\">"+$MODAL[input].label+"</button>";
              }else if(
                ($MODAL[input].label == 'Não') ||
                ($MODAL[input].label == 'não') ||
                ($MODAL[input].label == 'NÃO') ||
                ($MODAL[input].label == 'Nao') ||
                ($MODAL[input].label == 'nao') ||
                ($MODAL[input].label == 'NAO')
              ){
                $MDL_INPUT +=  "data-bs-dismiss=\"modal\" style=\"background-color:#DC3545; border:solid 1px #dc3545;\">"+$MODAL[input].label+"</button>";
              }else if(
                ($MODAL[input].label == 'Excluir') ||
                ($MODAL[input].label == 'excluir') ||
                ($MODAL[input].label == 'EXCLUIR') ||
                ($MODAL[input].label == 'Apagar') ||
                ($MODAL[input].label == 'apagar') ||
                ($MODAL[input].label == 'APAGAR') ||
                ($MODAL[input].label == 'Deletar') ||
                ($MODAL[input].label == 'deletar') ||
                ($MODAL[input].label == 'DELETAR')
              ){
                $MDL_INPUT +=  "style=\"background-color:#DC3545; border:solid 1px #DC3545;\"><i class=\"bi bi-trash-fill delbtm\"></i>"+$MODAL[input].label+"</button>";
              }else if($MODAL[input].label != undefined){
                $MDL_INPUT += ">"+$MODAL[input].label+"</button>";
              }          
          }
        }      
      $i++;
      }
      /////////////////////////////////////////////
      DisplayNoCloseIco='style="display:none;"';if(parseInt(bootstrap.Tooltip.VERSION)<5){DisplayNoCloseIco='style="display:block;"';}
      PRINT_IT = "" +
      "<div class=\"modal fade\" id=\"MDLl32E2A41B\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">"+
      "  <div class=\"modal-dialog\">"+
      "    <div class=\"modal-content\">"+
      "      <div class=\"modal-header\">"+
      "        <h5 class=\"modal-title\" id=\"exampleModalLabel\">"+$TITULO+"</h5>"+
      "        <button type=\"button\" class=\"btn-close close\" data-dismiss=\"modal\" aria-label=\"Close\" data-bs-dismiss=\"modal\"><span aria-hidden=\"true\" "+DisplayNoCloseIco+">×</span></button>"+
      "      </div>"+
      "     <form action=\""+$ACTION+"\" method=\""+$METHOD+"\"  enctype=\"multipart/form-data\"> "+
      "        <div class=\"modal-body\">"+
                  $CORPO +
      "            <div class=\"form-group\">"+
      "               <center style=\"color:#0000AA;font-weight:600;font-style:italic;margin-top:10px;\">"+
      "                   <div id=\"resultado\"></div>"+
      "                </center>"+
      "            </div>"+

      "            <div class=\"modal-footer\">"+
                      $MDL_INPUT + 
      "            </div>"+

      "        </div>"+
      "      </form>"+

      "  </div>"+
      "</div>"+
      "</div>";
      /////////////////////////////////////////////
    }catch(e){ 
     // console.clear();
    }
    try{
    //-- ################ Gerando elementos dinamicamente ################    
    $('body #MDLl32E2A41B,body .modal-backdrop.fade.show').remove();
    $('body').append(PRINT_IT);
            $('#MDLl32E2A41B').modal('show').attr('onclick','setTimeout(function(){if($(\'body\').attr(\'class\')==\'vsc-initialized\'){$(\'body\').attr(\'style\',\''+BodyStyle+'\')/*.css(\'overflow\',\'auto\').css(\'padding-right\',\'0px\').removeAttr(\'style\');*/}},2000)'); 
            document.body.style.paddingRight='0px';
            $tr = $(this).closest('tr');
              var data = $tr.children("td").map(function(){
                return $(this).text();              
              }).get();
        /////////////////////////////////////////////////////////////
        $('#MDLl32E2A41B form').submit(function(event){
            $("#MDLl32E2A41B #resultado").html("<span style=\"color:#DDD;\">Por favor, aguarde...</span>");
            $.ajax({
              type: $METHOD,
              url: $(this).attr('action'),
              data: new FormData($('#MDLl32E2A41B form')[0]),
              mimeType: "multipart/form-data",
              contentType: false,
              processData:false,
              dataType: "json",
              encode: true,
            }).done(function(data){
              /* ::DEBUG::
              console.log(data);
              /**/
              $("#MDLl32E2A41B #resultado").html(data.message);
            }).fail(function(jqXHR, textStatus, msg){
                 console.error(
                    'ERRO NO FORM DO MODAL: \n'+msg+
                    ' \nFORM ACTION: '+this.url+
                    ' \nFORM DATA: '+this.data
                 );
                 $("#MDLl32E2A41B #resultado").html(
                    "<span style=\"color:#FF3333;\">"+
                      "<strong style=\"font-weight:900;font-size:16px;font-family:Arial Black,Arial Bold,Gadget,sans-serif;\">ISTO ESTA LEVANDO MAIS TEMPO QUE O NORMAL: </strong><br>"+
                      "Por favor, verifique a sua conexão ou contate o suporte."+
                    "</span>"
                 );
                 setTimeout(function(){
                    $('#MDLl32E2A41B form').submit();
                 },8000);
            });
            /* ::DEBUG:: */ event.preventDefault();
        });
        /////////////////////////////////////////////////////////////
    //-- #################################################################
    }catch(e){ 
     // console.clear();
    }
    return null;
}; $('*[data-mdl]').click(function(){eval($(this).attr('data-mdl')+'()')}); if($('body').attr('style')==undefined){BodyStyle="";}else{BodyStyle=$('body').attr('style','');}
function is_file(url){
    var http = new XMLHttpRequest();
    http.open('HEAD', url, false);
    http.send();
    return http.status != 404;
}
//-- ----------------------------------
//carrega estilo do icone no titulo do modal (requer Bootstrap 5+)
$('head').prepend('<STYLE>#MDLl32E2A41B .bg-white {background-color:#00000092 !important;color:#FFF !important} body[data-bs-theme=dark] #MDLl32E2A41B .bg-white{background-color:#FFFFFF92 !important} body[data-bs-theme=dark] #MDLl32E2A41B .bg-white *{color:#343A40 !important;}}</STYLE>');




//##########################################################################
//###################### EXEMPLOS DE USO ###################################
//##########################################################################
/* 
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
     {'type':'button', 'name':'NAME2', 'value':'VALOR2', 'label':'Fechar', 'link':'#fechar'}
    ]
);
/**/
//-- ----------------------------------

// ALERTA
function alert(
        text = '',
        link = 'javascript:void(0)'
){
        MODAL(
            [
                {
                    'title': '<i class="fas fa-exclamation-triangle"></i> &nbsp; ALERTA!', 
                    'body':''+

                      "           "+text+

                      "            <div class=\"form-group\">"+
                      "            </div>",
                    'action':'<?php echo $url;?>../../lib/php/login.php',
                    'method':'POST',
                }, 
                {'type':'button', 'name':'NAME1', 'value':'VALOR1', 'label':'Entendi', 'link':link},
            ]
        );
        /*************************************************/
        //*
            mp3 = './lib/song/alert.mp3';
            $.ajax({
                url:mp3,
                type:'HEAD',
                success: function(){
                   //arquivo encontrado
                      audio = new Audio(mp3); audio.play();
                      audio.addEventListener('canplaythrough', function() {
                        audio.play();
                      });
                },
                error: function(error){
                    //arquivo não encontrado
                    console.clear();
                    mp3 = '../.'+mp3;
                    audio = new Audio(mp3); audio.play();
                    audio.addEventListener('canplaythrough', function() {
                        audio.play();
                    });
                }
            });
        /**/
}
//-- ----------------------------------

//-- ----------------------------------

// INFO
function info(
        text = '',
        link = 'javascript:void(0)'
){
        MODAL(
            [
                {
                    'title': '<i class="icon fas fa-info  bg-white" style="padding:8px 15px; border-radius: 20px;"></i> &nbsp; INFORMAÇÃO!', 
                    'body':''+

                      "           "+text+

                      "            <div class=\"form-group\">"+
                      "            </div>",
                    'action':'<?php echo $url;?>../../lib/php/login.php',
                    'method':'POST',
                }, 
                {'type':'button', 'name':'NAME1', 'value':'VALOR1', 'label':'Entendi', 'link':link},
            ]
        );
        /*************************************************/
        //*
            mp3 = './lib/song/info.mp3';
            $.ajax({
                url:mp3,
                type:'HEAD',
                success: function(){
                   //arquivo encontrado
                      audio = new Audio(mp3); audio.play();
                      audio.addEventListener('canplaythrough', function() {
                        audio.play();
                      });
                },
                error: function(error){
                    //arquivo não encontrado
                    console.clear();
                    mp3 = '../.'+mp3;
                    audio = new Audio(mp3); audio.play();
                    audio.addEventListener('canplaythrough', function() {
                        audio.play();
                    });
                }
            });
        /**/
}
//-- ----------------------------------

//-- ----------------------------------

// ALARM
function alarm(
        text = '',
        link = 'javascript:void(0)'
){
        MODAL(
            [
                {
                    'title': '<i class="fa fa-bell  bg-white" style="padding:8px 10px; border-radius: 20px;"></i> &nbsp; ALARME!', 
                    'body':''+

                      "           "+text+

                      "            <div class=\"form-group\">"+
                      "            </div>",
                    'action':'<?php echo $url;?>../../lib/php/login.php',
                    'method':'POST',
                }, 
                {'type':'button', 'name':'NAME1', 'value':'VALOR1', 'label':'Entendi', 'link':link},
            ]
        );
        /*************************************************/
            mp3 = './lib/song/alarm.mp3';
            $.ajax({
                url:mp3,
                type:'HEAD',
                success: function(){
                   //arquivo encontrado
                      audio = new Audio(mp3); audio.play();
                      audio.addEventListener('canplaythrough', function() {
                        audio.play();
                      });
                },
                error: function(error){
                    //arquivo não encontrado
                    console.clear();
                    mp3 = '../.'+mp3;
                    audio = new Audio(mp3); audio.play();
                    audio.addEventListener('canplaythrough', function() {
                        audio.play();
                    });
                }
            });
            setTimeout(function(){
            mp3 = './lib/song/alarm_2x.mp3';
            $.ajax({
                url:mp3,
                type:'HEAD',
                success: function(){
                   //arquivo encontrado
                      audio = new Audio(mp3); audio.play();
                      audio.addEventListener('canplaythrough', function() {
                        audio.play();
                      });
                },
                error: function(error){
                    //arquivo não encontrado
                    console.clear();
                    mp3 = '../.'+mp3;
                    audio = new Audio(mp3); audio.play();
                    audio.addEventListener('canplaythrough', function() {
                        audio.play();
                    });
                }
            });
                Push.create("ALARME COM PUSH-WPA", {
                  body: text + ' \nAbra o aplicativo para... \n',
                  icon: "./lib/imgs/favicon.png",
                  timeout: 36000,
                  onClick: function(){
                    window.focus();
                    //window.open("https://seu_host.com/","_self");
                    info("<b>Notificação:</b> "+text);
                    //window.location="https://seu_host.com/";
                    this.close();
                  }
                });
          }, 500);
}

 TESTE_MDL_BOX = function(){
     alarm('Isto é um teste de alarme.',"javascript:alert(\\'Isto é um teste de alerta.\\',\\'JavaScript:info(`Isto é um teste de informação.`,`JavaScript:TESTE_MDL_BOX();`)\\')");
 } //TESTE_MDL_BOX();

// alert('Isto é um teste de alerta.',"javascript:info(\\'Isto é um teste de informação.\\',\\'JavaScript:alarm(`Isto é um teste de alarme.`)\\')");

//##########################################################################
//-- --------------------------------------------------------------------------
//-- --------------------------------------------------------------------------









refresh = function(){
  document.location.reload(1);
}

//console.log('<?php echo @$_GET['pgn'];?>');
//-- --------------------------------------------------------------------------
// ESPAÇO RESERVADO PARA ANOTAÇÕES NO CONSOLE
//-- --------------------------------------------------------------------------
  /*
  console.info('\n\
    NOTAS: \n\
    -- -----------------------------------------------------------------\n\
    XXXXXX \n\
    -- -----------------------------------------------------------------\n\
  ');/**/
//-- --------------------------------------------------------------------------


  <?php IF(
    (@$_GET['pgn'] == 'index.php') || 
    (@$_GET['pgn'] == 'exemplo.php')
  ): ?>
//-- ----------------------------------
//-- --------------------------------------------------------------------------
//-- ----------------------------------
    /* codigo para paginas especificas */
//-- ----------------------------------
//-- --------------------------------------------------------------------------
//-- ----------------------------------
<?php ENDIF; //END: relatorios.php?>










<?php exit();}else{die("//<CENTER><H1>Deixe de ser abelhudoª!</H1><i>Não ha nada para ver aqui.</i></CENTER><style>*{color:#FFF;}CENTER *{color:#000;font-family:Arial;}H1{margin:20% 5px 0px 5px;}i{margin:0px 5px; font-size:28px;}</style>");}?>