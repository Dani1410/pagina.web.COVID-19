$(document).ready(function(){$("#btnSend").click(function(){var errores="";""==$("#names").val()?(errores+="<p>Escriba un nombre</p>",$("#names").css("border-bottom-color","#F14B4B")):$("#names").css("border-bottom-color","#d1d1d1"),""==$("#email").val()?(errores+="<p>Ingrese un correo</p>",$("#email").css("border-bottom-color","#F14B4B")):$("#email").css("border-bottom-color","#d1d1d1"),""==$("#mensaje").val()?(errores+="<p>Escriba un mensaje</p>",$("#mensaje").css("border-bottom-color","#F14B4B")):$("#mensaje").css("border-bottom-color","#d1d1d1"),""==errores==0&&(errores='<div class="modal_wrap"><div class="mensaje_modal"><h3>Errores encontrados</h3>'+errores+'<span id="btnClose">Cerrar</span></div></div>',$("body").append(errores)),$("#btnClose").click(function(){$(".modal_wrap").remove()})})});