# Modal Dinâmico 
#### _Crie modais para seus front-ends web, dinamicamente de forma prática e incorruptível._


###### BADGE STATUS:
[![Build Status](https://img.shields.io/badge/build%200.01%20-100%25-success)](https://github.com/srvictorbatista/modal_dinamico) 
Linguagens utilizadas: 


[<img src="https://imgcloud.com.br/share/wSJ08uCgvNhbI7Iv"><br><sub>JavaScript e PHP</sub>](#)
 
Bibliotecas necessárias:
![N|Solid](https://imgcloud.com.br/share/hyEpWGwBIGAfySPz)

# Autor
| [<img src="https://avatars.githubusercontent.com/u/131806887?v=4" width=115><br><sub>Sr. Victor Batista</sub>](https://github.com/srvictorbatista) |
| :---: |

##### CONTATO:
[![Contact|Solid](https://img.shields.io/badge/contact%20%5BPT--BR%5D-@levymac-9cf?labelColor=brightgrey&style=for-the-badge&logo=telegram)](https://t.me/levymac)

### MODAL DISPLAYs: 
![N|Solid](https://imgcloud.com.br/share/ghzH7NSvO3wzPDv0)
<p><center>
![N|Solid](https://imgcloud.com.br/share/ecLnpI4ybCacAVkT)
</center></p>
Pensado para a escabilidade e agilidade necessária em ambientes de produção, com a simplicidade do educacional.
_Guarde seus modais em funções e/ou variaveis js, que serão criados e invocados dinamicamente em seu front, somente quando for necessário._

### 🎖Características
- ##### Elimine erros de cache.
- ##### Formulário ajax/rest/json inclusos nativamente.
- ##### Utilização simples e incorporação instantânea.
- ##### Compatível com bibliotecas populares e atuais.
- ##### Aprimore suas GUIs/WEB de modo profissional. 
- ##### Reduza códigos redundantes para janelas similares, sem riscos de conflito entre elas.

Sinta-se livre para utilizar e/ou aprimorar, estes e outros recursos.


## Dependências 

Junto com este recurso, recomendo a incorporação das seguintes bibliotecas:

| Plugin | FONTES/CDNs |
| ------ | ------ |
| FontAwesome 6+ | https://fontawesome.com/versions, https://cdnjs.com/libraries/font-awesome, https://fontawesome.com/v5/docs/web/use-with/wordpress/install-manually, https://www.angularjswiki.com/fontawesome/cdn/ |
| jQuery 3+ | https://releases.jquery.com/, https://cdnjs.com/libraries/jquery, https://www.w3schools.com/jquery/jquery_get_started.asp |
| Bootstrap 4+ | https://getbootstrap.com/docs/versions/, https://getbootstrap.com/docs/5.3/examples/, https://cdnjs.com/libraries/bootstrap |

As fontes a cima, são sugestões caso o seu projeto já não tenha uma destas bibliotecas já incorporadas, por meio de suas CDNs.

## Instalação
Depois de baixar este repositório. Incorpore ao seu projeto, adicionando estes códigos:
#### PHP
```php
<?php include_once('_config.php');?>
```

#### HEAD
```head
<!-- FontAwesome CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

<!-- Bootstrap CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
```

#### JS (footer)
 O atributo "*defer*" faz com que o script aguarde a página ser carregada.
 O atributo "*$THISFILE*" serve para identificar a página em seu front.
```script
<!-- DinamicoInterno -->
<SCRIPT src="./lib/functions.js?pgn=<?=$THISFILE;?>" defer></SCRIPT>
```

## Opcionais
Itens opcionais, aprimoram a experiencia gráfica do usuário. No entanto a não inclusão deles, não comprometerá o funcionamento dos principais recursos oferecidos (de forma limitada):
- ##### CSS  - formata formularios presentes no modal *(placeholder)* e habilita mudança gradativa de atributos.
```css
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
```

- ##### JS  - habilita *tema dark/light* (disponível a partir do bootstrap 5.3)
```script
</SCRIPT>
window.addEventListener("load", function(event){ // Espera apágina ser carregada
  $('body').attr('data-bs-theme','dark'); // Tema escuro (bootstrap 5.3+)
});
</SCRIPT>
```
&nbsp;
&nbsp;

## Exemplos de uso (JS)
Além de um arquivo (exemplo.php), incluso neste repositório. Você poderá utilizar os seguintes códigos como exemplos de uso:
-- -
&nbsp;
##### Exemplo de modal de informação.:
![N|Solid](https://imgcloud.com.br/share/VSXQx7jBEGWktghn)
#### Script correspondente: 
```script
</SCRIPT>
info('isto é um exemplo de info');
</SCRIPT>
``` 
-- -
&nbsp; 

##### Exemplo de formuário. Utilizando AJAX, com method POST:
![N|Solid](https://imgcloud.com.br/share/seprcNaYDroCmWzl)

#### Script correspondente: 
```script
</SCRIPT>
  MODAL([
     {
       'title': 'Isto é um formulário ', 
       'body': '<input type="text" name="nome" placeholder="Nome" value="" ><br>\
        <input type="text" name="sobrenome" placeholder="Sobrenome" value="" >', 
       'action':'callback.php',
       'method':'POST',
     }, 
     {'type':'submit', 'name':'NAME1', 'value':'VALOR1', 'label':'Submeter', 'link':'javascript:void(0)'}, 
     {'type':'button', 'name':'NAME2', 'value':'VALOR2', 'label':'Fechar', 'link':'#fechar'}
    ]);
</SCRIPT>
``` 
-- -

&nbsp; 

##### Exemplo de alert:
![N|Solid](https://imgcloud.com.br/share/X6OFpvOfMeZjhtTn)

#### Script correspondente: 
```script
</SCRIPT>
alert('isto é um exemplo de alert');
</SCRIPT>
``` 
-- -

&nbsp; 

##### Exemplo de alarm:
*OBS:* Este modal além de disparar um som característico. Possui integração com o recurso notification presentes em PWAs (webapp e aplicações mobiles):
- *Embora este recurso realize o disparo de notificações, sendo automaticamente compatível com qualquer biblioteca (já instalada). Os arquivos "WebServices.js", "notifi.js" e "PWA.js" não estão inclusos nesta aplicação. Caso tenhas a necessidade de disparar notificações em seu APP, PWA, sistema web ou site, e não possua este recurso, por meio de uma biblioteca externa. Poderás incorporar para este fim, qualquer biblioteca de notificação (webservice) de sua preferência. Uma vez que a biblioteca de notificações já esteja corretamente instalada e disponível. Os exemplos deste repositório, não exigirão modificações e/ou correções, para disparar notificações aos seus usuários.* 

![N|Solid](https://imgcloud.com.br/share/ScMgHFVGteoYY4QT)

#### Script correspondente: 
```script
</SCRIPT>
alarm('isto é um exemplo de alarme');
</SCRIPT>
``` 
-- -

&nbsp;
&nbsp;
&nbsp;




&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  



| [![Build Status](https://imgcloud.com.br/share/gzR6dJrb6erRLm4N)](https://linkedin.com/in/levymac) |  [![Build Status](https://imgcloud.com.br/share/8AunJBQfkqaYqz4G)](https://t.me/levymac)  |
| ------ | ------ |
##### Sr. Vcitor Batista

-- _**@LevyMac** My additional whriten:_  

> I hope you have found this repository fascinating. 
> If you wish to establish contact, it will be my pleasure 
> to serve you, receive your suggestions, and address all 
> your doubts. Please, I kindly ask you to do so in the 
> language of my heart (brazilian portuguese).

> This library was created by me, as a result of a need that 
> i perceived as a longing among other developers: the lack 
> of dynamic libraries for modal creation. Since its inception, 
> ihave frequently used it and enjoyed its utility and 
> practicality that surpass my own limitations. It is with 
> immense satisfaction and joy that I share this creation on 
> a broader scale, beyond my dear colleagues in development 
> and closest contacts.

 _I sincerely appreciate your kindness, interest, and for spreading this project forward._
 





&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;