<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modul</title>
<script src="js/jquery.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/script_menu.js"></script>
  <script src="js/jquery-1.10.2.js"></script>
  <script src="js/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href='//fonts.googleapis.com/css?family=Lato:100normal,100italic,300normal,300italic,400normal,400italic,700normal,700italic,900normal,900italic|Open+Sans:400normal|Roboto:400normal|Oswald:400normal|Open+Sans:400normal|Source+Sans+Pro:400normal|Indie+Flower:400normal|Gloria+Hallelujah:400normal|Raleway:400normal|PT+Sans:400normal|Droid+Sans:400normal&subset=all' rel='stylesheet' type='text/css'>
<style>
.css-input { border-color:#fff; border-style:solid; padding:11px;font-size:12px; color:#fff; border-width:1px; font-family:'Lato';  background-color: transparent;  } 
.css-input:focus { outline:none; } 
input[type=checkbox].css-checkbox { position:absolute; z-index:-1000; left:-1000px; overflow: hidden; clip: rect(0 0 0 0); height:1px; width:1px; margin:-1px; padding:0; border:0; }
input[type=checkbox].css-checkbox + label.css-label {
padding-left:31px;
height:26px; 
display:inline-block;
line-height:26px;
background-repeat:no-repeat;
background-position: 0 0;
font-size:26px;
vertical-align:middle;
cursor:pointer; }
input[type=checkbox].css-checkbox:checked + label.css-label {background-position: 0 -26px;}
						label.css-label {
				background-image:url(http://csscheckbox.com/checkboxes/u/csscheckbox_7dd90aff35ddb38fdc7cb1f8b325cea0.png);
				-webkit-touch-callout: none;
				-webkit-user-select: none;
				-khtml-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
}
select {
	inset;
    border:solid #ccc
	background: url('media/images/03-catalogo/cocinas/abajo.jpg') no-repeat right #fff;
    outline:none;
    display: inline-block;
    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none;
    cursor:pointer;
}
::-webkit-input-placeholder {
   color: #fff;
}

:-moz-placeholder { /* Firefox 18- */
   color: #fff;  
}

::-moz-placeholder {  /* Firefox 19+ */
   color: #fff;  
}

:-ms-input-placeholder {  
   color: #fff;  
}
.miselect {
	font-family:'Lato';
	font-size:12px;
	width: 150px; /* Set width. Do not set height else it will fail in IE8-10. Use padding for height. */
	color:#ADADAD;
	font-weight: normal;
	line-height:1.2em;
	margin: 0 0 10px;
	padding: 9px; /* use this to set a specific height for your dropdown (DO NOT use the attribute 'height') */
	border: solid #fff thin;
	cursor: pointer;
	text-indent: 0.01px;
	text-overflow: "";
	background:url(media/images/arrow.png) no-repeat 100% 4px #fff; /* add your own arrow image */
	*background-image:none; /* turn bg image for IE7 */
	background:url(media/images/arrow.png) no-repeat 100% 0px #fff; /* fallback bg image*/
	background:url(media/images/arrow.png) no-repeat 100% 0px, transparent;
	background:url(media/images/arrow.png) no-repeat 100% 0px, transparent;
	background:url(media/images/arrow.png) no-repeat 100% 0px, transparent;
	background:url(media/images/arrow.png) no-repeat 100% 0px, transparent;
	background:url(media/images/arrow.png) no-repeat 100% 0px, transparent;
	-webkit-appearance: none; /* gets rid of default appearance in Webkit browsers*/
	-moz-appearance: none; /* Get rid of default appearance for older Firefox browsers */
	-ms-appearance: none; /* get rid of default appearance for IE8, 9 and 10*/
	appearance: none;
}
.miselect option {
	background: #333; /* style the dropdown bg color */
}
</style>
    <script>
	$( document ).ready(function() {
		 loading('menu2','five','footer_top','logo_modul');
	});
</script>
</head>
<body style="background-image:url(media/images/10-cotiza/agenda-cita-modul.jpg);"><img width="81" height="130" id="logo_modul" style="z-index: 10;position: absolute;top: 30px;left: 1%;" src="media/images/logo-black.png" />
<div style="position:absolute; left:20%; top:50px; z-index:10;"></div>
<div id="menu2" class="menu" style="top:0px; background:rgba(0,0,0,0.4);cursor:pointer; cursor: hand;font-family:'Lato' !important;font-weight:300; font-size: 55 pt;">
    <ul>
        <li id="modul" onclick=" window.location.href='modul.php';">MÖDUL</li>
        <li id="catalogo" onclick="window.location.href='catalog.php';">CATÁLOGO</li>
        <li id="sucursales" onclick="window.location.href='sucursales.php';">SUCURSALES</li>
        <li id="blog" onclick="window.location.href='blog';">BLOG</li>
        <li id="creadores" onclick="window.location.href='creadores.php';">CREADORES ></li>
        <li>
            <ul class="social">
            <li id="facebook" style="background:url(media/images/redes-sociales.png) 0 -31px; height:50px;">
            <a href="https://es-la.facebook.com/cocinasintegralesmodul" style="text-decoration:none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>|<a href="https://www.pinterest.com/search/pins/?q=M%C3%B6dul" style="text-decoration:none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
           </li>
            <li id="pinterest"></li>
            </ul>
        </li>
    </ul>
</div>


<div style="padding:30px;" align="center">
        <div style="font-family:'Lato' !important; font-weight:300; font-size:36px; padding-top:100px;">UN CAFÉ CON MÖDUL</div>
        <div style="font-family:'LibreBaskerville Italic'; font-size:18px;">Inicia el día con un buen café preparado con amor</div>
        <hr style="width:50px; border-color:#FFF;" align="center">
        <div style="font-family:'Lato'; font-size: 14px;">
        Si tienes pensado remodelar o instalar una cocina desde cero,<br/>
        visita una de nuestras sucursales.<br/>
        Ubica la más cercana a ti en <b><span style="color:#FF6;">sucursales.</span></b><br/>
        </div>
    </div>
	<div style="font-family:'Lato' !important; font-weight:300; font-size: 14px; padding-top:30px;padding-left:35%;">
    <b><span style="color:#fff;">FORMULARIO DE REGISTRO</span> </b><br/>
	<span style="color:#DD6235; font-size:13px;"><b>¡Regístrate! Prometemos no enviarte spam, tus datos están protegidos.</b></span>
    <br/><br/>
    <form action="" method="post" style="width:500px;">
    <input class="css-input" name="nombre" type="text" placeholder="NOMBRE *" style="width:217px;"/>
    &nbsp;<input class="css-input" style="width:216px;" name="apellido" type="text" placeholder="APELLIDO *" /><br/>
    <div style="height:10px;"></div>
    <input class="css-input" name="edad" type="text" placeholder="EDAD *" style="width:50px;"/>&nbsp;
    <input class="css-input" name="profesion" type="text" placeholder="PROFESION *" style="width:152px;"/>&nbsp;
    <input class="css-input" name="empresa" type="text" placeholder="EMPRESA *" style="width:200px;"/>
     <div style="height:10px;"></div>
    <input class="css-input" name="telefono" type="text" placeholder="TELEFONO (10 DIGITOS) *" style="width:150px;" />
    &nbsp;
    <select class="miselect" name="" style="width:150px;">
    <option>CIUDAD *</option>
    <option>OTRAS *</option>
    </select>
    &nbsp;
    <select class="miselect" name="" style="width:145px;">
    <option>EDO.</option>
    <option>NNN.</option>
    </select>
    <input class="css-input" name="direccion" type="text" placeholder="DIRECCIÓN *" style="width:215px;" />&nbsp;
    <input class="css-input" name="correo" type="text" placeholder="E-MAIL *" style="width:220px;" />
    <div style="height:30px;"></div>
    <b><span style="color:#fff;">¿QUÉ TIPO DE PROYECTO ES?</span> </b>
    <table width="500" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td style="padding-top:10px;">
        <input type="checkbox" name="checkboxG4" id="checkboxG4" class="css-checkbox" />
    <label for="checkboxG4" class="css-label" checked></label>
    <span style="font-size:12px; color:#fff;">&nbsp;CASA NUEVA</span>
    </td>
        <td style="padding-top:10px;">
        <input type="checkbox" name="checkboxG5" id="checkboxG5" class="css-checkbox" />
    <label for="checkboxG5" class="css-label" checked></label>
    <span style="font-size:12px; color:#fff;">&nbsp;REMODELACIÓN</span>
        </td>
      </tr>
    </table>

	<div style="height:30px;"></div>
    <b><span style="color:#fff;">¿YA CUENTA CON EQUIPO PARA SU COCINA?</span> </b>
    <table width="500" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td style="padding-top:10px;">
        <input type="checkbox" name="checkboxG6" id="checkboxG6" class="css-checkbox" />
    <label for="checkboxG6" class="css-label" checked></label>
    <span style="font-size:12px; color:#fff;">&nbsp;SÍ</span>
    </td>
        <td style="padding-top:10px;">
        <input type="checkbox" name="checkboxG7" id="checkboxG7" class="css-checkbox" />
    <label for="checkboxG7" class="css-label" checked></label>
    <span style="font-size:12px; color:#fff;">&nbsp;NO</span>
        </td>
      </tr>
    </table>
    
    <div style="height:30px;"></div>
    <textarea class="css-input" name="comentarios" style="width:465px; height:200px; padding-bottom:30px;">
    </textarea>
    <div style="height:10px;"></div>
    <input type="checkbox" name="checkboxG4" id="checkboxG4" class="css-checkbox" />
    <label for="checkboxG4" class="css-label" checked></label><span style="font-size:12px; color:#fff;">&nbsp;Envíenme información relacionada con Mödul, como promociones y lanzamientos.</span>
    <div style="height:10px;"></div>
    <input class="css-input" style="background-color:#999; width:100px; color:#fff;" name="" type="submit" value="ENVIAR"/>
    </form>
    <div style="height:30px;"></div>
    </div>

<!--div style="width:100%;">
 <div id="five">
 <table align="center"  style="width:100%;">
 	<tr  style="width:100%">
    	<td  align="center" style="width:100%">
            <nav class="nav_menu" style="background: linear-gradient(to right, black 0%,black 50%,#000000 50%,rgba(0,0,0,0.01) 50%,rgba(0,0,0,0.01) 50%) 100%;border-bottom: 2px solid black; font-family:'Lato';">
              <a href="abre-tu-negocio.php" class="a_black2">FRANQUICIAS</a>
              <a class="a_black2">|</a>
              <a href="experimenta_la_calidad.php" class="a_black2">MODUL RECOMIENDA</a>
              <a class="a_black2">|</a>
              <a href="glosario.php" class="a_black2">GLOSARIO</a>
              <a href="visualiza_tu_cocina.php" class="a_yellow1">IMAGINA TU COCINA AQUÍ</a>
              <a href="un_cafe_con_modul.php" class="a_yellow2">UN CAFÉ CON MÖDUL </a>
            </nav>
        </td>
    </tr>
 </table>
</div>

<div align="center" style="width: 100%;color:#fff;font-size:12px;">
<table  align="center" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="text-align:center; padding-right:100px; font-family:'Lato';font-size:16px;">Mödul Studio © 2015. Todos los derechos reservados · Política de privacidad</td>
    <td style="font-family:'Lato'; font-size:16px;padding-right:30px;">POR</td>
    <td style="text-align:right;"><img src="media/images/MIQ-logo/MIQ-white.png" width="70" height="70" /></td>
  </tr>
</table>
</div-->

<div id="five" style="z-index:100;width:100%; position:absolute">
 <table align="center"  style="width:100%">
 	<tr  style="width:100%">
    	<td  align="center" style="width:100%">
            <nav class="nav_menu" style="background: linear-gradient(to right, black 0%,black 50%,#000000 50%,rgba(0,0,0,0.01) 50%,rgba(0,0,0,0.01) 50%) 100%;border-bottom: 2px solid black; font-family:'Lato';">
              <a href="abre-tu-negocio.php" class="a_black2">FRANQUICIAS</a>
              <a class="a_black2">|</a>
              <a href="experimenta_la_calidad.php" class="a_black2">MODUL RECOMIENDA</a>
              <a class="a_black2">|</a>
              <a href="glosario.php" class="a_black2">GLOSARIO</a>
              <a href="visualiza_tu_cocina.php" class="a_yellow1">IMAGINA TU COCINA AQUÍ</a>
              <a href="un_cafe_con_modul.php" class="a_yellow2">UN CAFÉ CON MÖDUL </a>
            </nav>
        </td>
    </tr>
 </table>
</div>
<div style=" height:70px"></div>
</body>
<footer id="footer_top" style=" color:#FFF;">
<div align="center" style="width: 100%;color:#fff;font-size:12px;">
<table  align="center" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="text-align:center; padding-right:100px; font-family:'Lato';font-size:16px;">Mödul Studio © 2015. Todos los derechos reservados · Política de privacidad</td>
    <td style="font-family:'Lato'; font-size:16px;padding-right:30px;">POR</td>
    <td style="text-align:right;"><img style=" background:#fff" src="media/images/MIQ-logo/MIQ-black.png" width="70" height="70" /></td>
  </tr>
</table>
</div>
</footer>
</html>