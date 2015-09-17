<?php
require 'conUser.php';
$result = getAllFuncionario();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Lugares Mas Visitados</title>
<script type="text/javascript" src="js.js">
</script>
<style>
.sidebar1 {
	float: top;
	width: 200px;
        background: #424242;
	padding-bottom: 8px;
        margin-top: 20px;
        margin-left: 550px;
}

.content {

	padding: 8px 0;
	width: 800px;
	float: left;
}

*{
	margin:0;
	padding:0;
}



#slideshow{
	background-color:#F5F5F5;
	border:1px solid #FFFFFF;
	height:340px;
	margin:150px auto 0;
	position:relative;
	width:640px;
	
	-moz-box-shadow:0 0 22px #111;
	-webkit-box-shadow:0 0 22px #111;
	box-shadow:0 0 22px #111;
}

#slideshow ul{
	height:320px;
	left:10px;
	list-style:none outside none;
	overflow:hidden;
	position:absolute;
	top:10px;
	width:620px;
}

#slideshow li{
	position:absolute;
	display:none;
	z-index:10;
}

#slideshow li:first-child{
	display:block;
	z-index:1000;
}

#slideshow .slideActive{
	z-index:1000;
}

#slideshow canvas{
	display:none;
	position:absolute;
	z-index:100;
}

#slideshow .arrow{
	height:86px;
	width:60px;
	position:absolute;
	background:url('ImagenLogin/arrows.png') no-repeat;
	top:50%;
	margin-top:-43px;
	cursor:pointer;
	z-index:5000;
}

#slideshow .previous{ background-position:left top;left:0;}
#slideshow .previous:hover{ background-position:left bottom;}

#slideshow .next{ background-position:right top;right:0;}
#slideshow .next:hover{ background-position:right bottom;}


/* The following styles are only used for the styling of the demo page */

p.tzine{
	text-align:center;
	font-size:12px;
	margin:50px;
}

p.credit{
	text-align:center;
	color:#888;
	font-size:10px;
}

p.credit a,
p.credit a:visited{
	color:#ccc;
	border-bottom-color:#aaa;
}

p.credit a:hover{
	border-bottom-color:transparent;
}

a, a:visited {
	text-decoration:none;
	outline:none;
	border-bottom:1px dotted #97cae6;
	color:#97cae6;
}

a:hover{
	border-bottom:1px dashed transparent;
}

.clear{
	clear:both;
}
#main-header {
	background: #333;
	color: white;
	height: 80px;
}	
	#main-header a {
		color: white;
	}
 
/*
 * Logo
 */
#logo-header {
	float: left;
	padding: 15px 0 0 20px;
	text-decoration: none;
}
	#logo-header:hover {
		color: #0b76a6;
	}
	
	#logo-header .site-name {
		display: block;
		font-weight: 700;
		font-size: 1.2em;
	}
	
	#logo-header .site-desc {
		display: block;
		font-weight: 300;
		font-size: 0.8em;
		color: #999;
	}
	
 
/*
 * Navegación
 */
nav {
	float: right;
}
	nav ul {
		margin: 0;
		padding: 0;
		list-style: none;
		padding-right: 20px;
	}
	
		nav ul li {
			display: inline-block;
			line-height: 80px;
		}
			
			nav ul li a {
				display: block;
				padding: 0 10px;
				text-decoration: none;
			}
			
				nav ul li a:hover {
					background: #0b76a6;
				}
                                div.wrap {
	text-align: center;
}

div.pagesize {
	width: 919px;
	margin: 0 auto;
	text-align: left;
}

div.module-box {
	width: 100%;
}

div.module-box div.inner {
	padding: 10px 24px;
}

div.three-boxes {
	float: left;
	width: 33.3%;
}

div.vernav {
	margin: 0;
}

div.vernav ul {
	margin: 0;
	padding: 0;
}

div.vernav li {
	list-style-type: none;
	margin: 0 10px 0 0;
	padding: 0;
}

div.vernav ul li, div.vernav ul li a, div.vernav ul li, div.vernav ul li a span {
	float: left;
	display: block;
}


/*========================================= 
Layout
=========================================*/

#header-wrap {
	background: url(../images/header2.jpg) left top repeat-x;
	height: 86px
        
}

h1#logo {
	display: block;
	float: left;
	margin: 0;
	padding: 0;
}

h1#logo a {
	display: block;
	float: left;
	width: 252px;
	height: 78px;
	text-indent: -5000px;
	margin-left: 0px;
	
}

#topnav {
	margin-top: 30px;
	float: right;
}

#topnav a {
	margin-left: 8px;
}

#mainnav-wrap {
	height: 40px;
	background: url(../images/mainnav_bg.gif) left top repeat-x;
}

#mainnav {
	text-align: center;
}

#mainnav ul {
	margin: 0 auto;
	text-align: left;
}

#mainnav ul li {
	margin: 0;
}

#mainnav ul li a span {
	height: 40px;
	line-height: 46px;
	background: url(images/mainnav_sep.gif) right top no-repeat;
	padding: 0 20px;
	font-weight: bold;
}

#mainnav ul li a#active span {
	color: #cc9900;
	font-weight: bold;
}

#container-wrap {
	background: #a8a975 url(images/bg_rp.gif) left top repeat-x;
	height: 500px;
        text-align: center;
}

#leftcol {
	background: #a8a975 url(images/leftcol_bg.gif) right top no-repeat;
	width: 185px;
	height: 500px;
	float: left;
}

#rightcol {
	background: #a8a975 url(images/rightcol_bg.gif) left top no-repeat;
	width: 185px;
	height: 500px;
	float: right;
}

#maincol {
	width: 549px;
	float: left;
	height: 800px;
}

#banner {
	height: 214px;
	background: url(images/main_header.jpg) left top no-repeat;
}

#content-wrap {
	background: url(images/main_footer.jpg) left top repeat-y;
}

#content {
	background: url(images/main_footer1.jpg) left bottom no-repeat;
	padding: 6px 15px 35px;
}

#banner-content {
	margin: 90px 25px 0 0;
	width: 325px;
	text-align: right;
	float: right;
}

#banner {
	color: #fff;
}

#banner h1 {
	font-size: 24px;
	color: #fff;
	margin-bottom: 8px;
}

#banner p {
	margin-top: -8px;
}

.yellow {
	color: #999966;
	font-weight: bold;
}

.f14 {
	font-size: 14px;
}

img.left {
	float: left;
	margin: 5px 10px 0 0;
}

#footer {
	padding: 18px 0;
	color: #000;
	font-size: 11px;
	text-align: center;
}

div.inner {
	padding: 36px 12px;
	color: #fff;
}
p.titletext {width:360px;margin-left:230px;margin-right:auto;text-align:left;color:#111;font-size:30px;font-family:'Impact';padding-left:5px;margin-top: 50px}
#menu ul {
    list-style-type: none;
    margin: 0px;
    padding: 0px;
    width: 200px;
    font-family: Arial, sans-serif;
    font-size: 11pt;
    margin-left: 550px;
    margin-top: 100px;
}
#menu ul li a {
    color: #ccc;
    text-decoration: none;
    text-transform: uppercase;
    display: block;
    padding: 10px 10px 10px 20px;
}
#menu ul li a:hover {
    background: #000;
    border-left: 10px solid #333;
    color: #fff;
}
.textleft {text-align:center;
color: #fff;

font-family: impact;
font-size: 40px;
letter-spacing: 0;
text-shadow: -3px -3px 3px #81BEF7, 3px -3px 3px #190707, -3px 3px 3px #190707, 3px 3px 3px #190707;}

.productos_listado{
                    
                    table-layout:fixed;
                    width:790px;
                    border: 3px solid #D3D4DF;
                    font-family:comic sans, Helvetica, sans-serif;
                    font-size:15px;
                    color:#FFFFFF;
            }

            .productos_listado caption{
                    background-color: #333333;
                    font-family:Arial, Helvetica, sans-serif;
                    font-size:14px;
                    font-weight:bold;
                    color:#FFFFFF;
                    padding:10px 8px 10px 8px;
            }

            .productos_listado th{
                    background-color: #D3D4DF;
                    color:#ffffff;
                    
            }

            .productos_listado td{
                    height:80px; 
                    width:80px;
            }
            .productos_listado td.td_linea{
                    height: 2px;
                    background-color: #333333;
                    padding: 2px 0px 4px 3px;
            }
</style>
</head>
<body BGCOLOR="#8181F7">
 
<br><br>
<div align="center" id="formAbmUsuario">
<form action="conUser.php" method="post" id="abmFormUsuario" name="abmFormUsuario" >
<input type="hidden" name="1" value="1">
	
</form>
</div>


<br><br>
<div id="abmProducto" align="center">

<table border="1"  class="productos_listado">
		<thead>
			<tr>
     			<th width="70px">Id</th><th>Latitud</th><th>Longitud</th><th>Fecha</th><th>Numero visitas</th>
  			</tr>
		</thead>
		<?php 
			while ($fila = mysql_fetch_array($result, MYSQL_NUM)) {
				
			?>
		<tr>
			<td id="id"><?php echo $fila[0]; ?></td>
			<td><?php echo $fila[1]; ?></td>
			<td><?php echo $fila[2]; ?></td>
			<td><?php echo $fila[3]; ?></td>
<td><?php echo $fila[4]; ?></td>

		</tr>
		<?php } ?>
</table>

</div>
<div align="center"> <a class="navlink" href="index.php">Volver</a>
</div>
</body>
</html>