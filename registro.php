<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!--
        <section id="top-bar">
            <section id="content-top-bar">
                <section id="logo-head">
                    <img src="" alt="">
                </section>
                <div id="separator"></div>
                <section id="sign-up">
                    <input type="button" class="btn" value="Registrate Ahora!">
                </section>
                <div id="separator"></div>   
                <section id="sign-in-form">
                    <form name="sign-in-form" action="">
                        <input type="text" class="nombre_user" name="nombre_user" placeholder="Nombre de Usuario" required>
                        <input type="password" class="password" name="password" placeholder="Password" required>
                        <input type="submit" class="btn usr" value="Ingresar">
                    </form>
                </section>
            </section>    
        </section>
        <div id="lnk">
            <a id="btnTop" href=""><span>Android ↨</span></a>
        </div>
        -->
        <section id="main">
            <div class="logo-head">
                <div class="img-head">
                    <img src="img/logo.png" alt="" width="300">
                </div>
                <div class="txt-head">
                    <span class="tlt">Android Camp 2013</span>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                    <ul>
                        <li><a href=""><img src="img/fb.png" alt=""></a></li>
                        <li><a href=""><img src="img/tw.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <div id="contenedor">
            <header>
                <div id="logo">
                    <img src="img/android_robot.png" alt="">
                </div>
                <nav class="nav-left">
                    <ul>
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="index.html#nosotros">Nosotros</a></li>
                        <li><a href="index.html#contactos">Contactos</a></li>
                        <li><a href="registro.php">Registros</a></li>
                    </ul>
                </nav>    
            </header>
            <hr>
            <section class="registro">
                <h1>Registrate para ser parte del Android Camp</h1>
                <form action="" method="POST" name="miForm">
	                <div id="n">	
	                	<label id="" for="nombre">Nombre Completo: </label>
	                	<input type="text" required id="nombre" name="nombre">
                	</div>
	                <div id="a">	
	                	<label id="" for="apellidos">Apellidos: </label>
	                	<input type="text" required id="apellidos" name="apellidos">
                	</div>
                	<div id="e">
	                	<label id="" for="correo">E-Mail: </label>
	                	<input type="email" required id="correo" name="correo">
	                </div>
	                <div id="t">	
	                	<label id="" for="telefono">Teléfono: </label>
	                	<input type="text" required id="telefono" name="telefono">
	                </div>
	                <div id="i">	
	                	<label id="" for="institucion">Institución: </label>
	                	<input type="text" required id="institucion" name="institucion">
                	</div>
	                <div id="d">	
	                	<label id="" for="departamento">Departamento: </label>
	                	<select name="departamento" id="departamento">
	                		<option value="bn">Beni</option>
	                		<option value="cbba">Cochabamba</option>
	                		<option value="lp">La Paz</option>
	                		<option value="or">Oruro</option>
	                		<option value="pnd">Pando</option>
	                		<option value="pt">Potosí</option>
	                		<option value="stc">Santra Cruz</option>
	                		<option value="scr">Sucre</option>
	                		<option value="tj">Tarija</option>
	                	</select>
                	</div>
                	<input type="submit" class="btn" id="reg" value="Registrarse >" onclick="altaPersona()">
                </form>  
            </section>
        </div> 
        <footer>
            <div id="tit-footer">Contactos</div>
            <section id="register">
                <form name="contactForm" action="" method="POST">
                    <input type="text" class="nombre" name="nombrec" id="nombrec" placeholder="Aquí tu Nombre" required>
                    <input type="email" class="correo" name="correoc" id="correoc" placeholder="Aquí tu correo" required>
                    <textarea name="comentc" id="comentc" class="mensaje" cols="20" rows="10" placeholder="El mensaje..."></textarea>
                    <input type="submit" class="btn" value="Enviar >" onclick="altaComentario()">
                </form>
            </section>
        </footer>
        <div id="patrocinadores">
            <h2>Patrocinadores</h2>
            <ul>
                <li><img src="img/7.png" alt=""><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
                <li><img src="img/8.png" alt=""><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
                <li><img src="img/9.png" alt=""><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
                <li><img src="img/10.png" alt=""><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
            </ul>
        </div>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
 
    </body>
</html>
