<?php

# try{
#     $mysqli=new mysqli("localhost","root","","jess"); 
     #$mysqli=new mysqli("localhost","root","","beleki"); 
#     echo 'Conexion realizada';
#    }            
#catch (PDOException $ex) {
#       echo $ex->getMessage();
#       exit;
#    }
 
$nombre= $_POST["txtusuario"];
$pass= $_POST["txtpassword"];

$users = [
    "user1" => "pass1",
    "user2" => "2pass2",
];

  if(!empty($nombre)){
        if( array_key_exists($nombre, $users)  ){
                $tmp_name = array_search($pass, $users);
                if($tmp_name==$nombre){

$result = '';
$result .='
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="Pragma" content="no-cache">
  <title>Socios</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="img/favicon.ico" rel="icon">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="Donitas.html#"><img src="img/logo-nav.png" alt="" title="" /></img></a>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="Donitas.html#productos">Productos</a></li>
          <li class="menu-has-children"><a href="Tiendas.html">Tiendas</a>
            <ul>
              <li><a href="tienda-cdmx.html">CDMX</a></li>
              <li><a href="tienda-edomex.html">EDOMEX</a></li>
              <li><a href="tienda-chihuahua.html">Chihuahua</a></li>
              <li><a href="tienda-guadalajara.html">Guadalajara</a></li>
              <li><a href="tienda-campeche.html">Campeche</a></li>
              <li><a href="tienda-durango.html">Durango</a></li>
              <li><a href="tienda-puebla.html">Puebla</a></li>
              <li><a href="tienda-pachuca.html">Pachuca</a></li>
              <li><a href="tienda-honduras.html">Honduras</a></li>
            </ul>
          </li>
          <li><a href="Donitas.html#pedido">Haz tu pedido</a></li>
          <li class="menu-has-children"><a href="Donitas.html#comunidad">Comunidad Beleki</a>
            <ul>
              <li><a href="LaEmpresa.html">La Empresa</a></li>
              <li><a href="NuestraHistoria.html">Nuestra Historia</a></li>
              <li><a href="Franquicias.html">Franquicias</a></li>
            </ul>
          </li>
          <li><a href="SalaDePrensa.html">Sala de Prensa</a></li>
        </ul>
      </nav>

      <nav class="nav social-nav pull-right d-none d-lg-inline">
        <a href="https://www.facebook.com/donitasbeleki" target="_blank" ><i class="fa fa-facebook"></i></a> 
        <a href="https://www.instagram.com/belekiminidonuts/" target="_blank"><i class="fa fa-instagram"></i></a>
        <a href="Donitas.html#contact"><i class="fa fa-envelope"></i></a>
      </nav>
    </div>
  </header>

  <section class="portfolio" id="pedido">
    <div class="container text-center">
      <h2 align="left">
        Bienvenido	
      </h2>
    </div>

    </br>

    <div class="container text-center">

<iframe src="https://cdn.flipsnack.com/widget/v2/widget.html?hash=fdkiwmjnr&bgcolor=EEEEEE&t=1525512333" width="640" height="385" seamless="seamless" scrolling="no" frameBorder="0"         allowFullScreen="true"></iframe>

    </div>

    </br>

    <div class="container text-center">
      <a class="btn btn-full" href="./login.html" >Salir</a>
    </div>
    </br>
    </br>
  </section>

  <footer class="site-footer">
    <div class="bottom">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-xs-12 text-lg-left text-center">
            <p class="copyright-text">
              © Beleki
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/tether/js/tether.min.js"></script>
  <script src="lib/stellar/stellar.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/easing/easing.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/lockfixed/lockfixed.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
</body>
</html>';
echo $result;
die();


                    #header("Location: ingresar.html");
                }else{
                    header("Location: login.html");
                    exit();
                }
        }else{
                header("Location: login.html");
                exit();
        }
  }else{
        header("Location: login.html");
        exit();
  }


# $sql=("SELECT Username,Password FROM 'usuarios' "
#         . "WHERE 'Username'='".mysqli_real_escape_string($mysqli,$nombre)."' and "
#         . "'Password'='".mysqli_real_escape_string($mysqli,$pass)."'"); 

#  $sqlResult=$mysqli->query($sql);
#  $row = $sqlResult->num_rows;

#  if(!empty($row)){
#        if( $row['Password']==$pass ){
#            header("Location: Donitas.html");
#        }else{
#            header("Location: login.html");
#            exit();
#        }
#  }else{
#        header("Location: SalaDePrensa.html");
#        exit();
#  }
?>
