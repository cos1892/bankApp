var timeout    = 500;
var closetimer = 0;
var ddmenuitem = 0;

function main_menu_open()
{  main_menu_canceltimer();
   main_menu_close();
   ddmenuitem = $(this).find('ul').css('visibility', 'visible');}

function main_menu_close()
{  if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');}

function main_menu_timer()
{  closetimer = window.setTimeout(main_menu_close, timeout);}

function main_menu_canceltimer()
{  if(closetimer)
   {  window.clearTimeout(closetimer);
      closetimer = null;}}

$(document).ready(function()
{  $('#main-menu > li').bind('mouseover', main_menu_open)
   $('#main-menu > li').bind('mouseout',  main_menu_timer)});

document.onclick = main_menu_close;