<?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'], "iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'], "webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'], "BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'], "iPod");

if ($iphone || $android || $palmpre || $ipod || $berry == true) {
  //header('Location: http://www.particiones.net/index2.html');
  //OR
  //echo "<script>window.location='http://www.particiones.net/index2.html'</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Home | Particiones · Separadores de fibra sólida </title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="Particiones S.A. fabrica y comercializa separadores de fibra sólida de papel reciclado para la industria del vino, aceite, y otras. Contacto: +562 2739 1153" />
  <meta name="keywords" content="Separadores, Tabiques, Particiones, Embalaje, Fibra sólida, Partitions, Box partitions,Fiber partitions " />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link href="css/estilos.css" rel="stylesheet" type="text/css" />
  <link href='http://fonts.googleapis.com/css?family=Muli:300,400' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300,800' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
  <noscript>
    <link rel="stylesheet" type="text/css" href="css/noscript.css" />
  </noscript>
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

  <link rel="stylesheet" type="text/css" href="css/new/demo2.css" />
  <link rel="stylesheet" type="text/css" href="css/new/common.css" />
  <link rel="stylesheet" type="text/css" href="css/new/style5.css" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
  <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
  <!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->

  <link rel="stylesheet" type="text/css" href="css/new/style8.css" />

</head>

<body>


  <header>
    <nav class="navbar navbar-expand-md navbar-light container-menu-all">
      <div class="container">
        <a class="navbar-brand" href="./">
          <img class="navbar-logo" src="img/logo.jpg" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="empresa/">EMPRESA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="producto/">PRODUCTO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="servicio/calidad.html">CALIDAD</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="servicio/iso9001.html">ISO 9001</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="servicio/servicio.html">SERVICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="clientes/">CLIENTES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./contacto/">CONTACTO</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="slider">
    <div class="wrapper">
      <div id="ei-slider" class="ei-slider">
        <ul class="ei-slider-large">
          <li> <img src="img/0.jpg" alt="image01" />
            <div class="ei-title">
              <h2 style="color:#100c04">Particiones</h2>
              <h3>Certificada en ISO 9001</h3>
            </div>
          </li>
          <li> <img src="img/1.jpg" alt="image01" />
            <div class="ei-title">
              <h2 style="color:#fff">Particiones</h2>
              <h3>Cuando requiere separadores<br />
                que protejan su producto.</h3>
            </div>
          </li>
          <li> <img src="img/3.jpg" alt="image03" />
            <div class="ei-title">
              <h2 style="color:#292f02">Particiones</h2>
              <h3 style="color:#373e05">Tecnología americana e insumos de<br />
                estándares europeos.</h3>
            </div>
          </li>
        </ul>
        <!-- ei-slider-large -->
        <ul class="ei-slider-thumbs">
          <li class="ei-slider-element">Current</li>
          <li><a href="#"></a><img src="img/thumbEmpty.png" alt="thumb01" /></li>
          <li><a href="#"></a><img src="img/thumbEmpty.png" alt="thumb02" /></li>
          <li><a href="#"></a><img src="img/thumbEmpty.png" alt="thumb03" /></li>
        </ul>
        <!-- ei-slider-thumbs -->
      </div>
      <!-- ei-slider -->
    </div>
  </div>
  <div class="servicios container">
    <div class="serv_int">
      <div class="titServ">
        <div class="tit1">PARTICIONES S.A.</div>
        <div class="tit2">Especialista en separadores internos de cajas</div>
      </div>
      <div class="iconos d-none d-lg-block">
        <div class="ch-grid">
          <li>
            <div class="ch-item ch-img-1">
              <div class="ch-info-wrap">
                <div class="ch-info">
                  <div class="ch-info-front ch-img-1"></div>
                  <div class="ch-info-back">
                    <h3 style="margin-top:-52px; margin-left:6px"><a href="producto/"><img src="img/test1.png" width="127" height="127" border="0" /></a></h3>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="ch-item ch-img-2">
              <div class="ch-info-wrap">
                <div class="ch-info">
                  <div class="ch-info-front ch-img-2"></div>
                  <div class="ch-info-back" style="background-color:#993300">
                    <h3 style="margin-top:-52px; margin-left:6px"><a href="servicio/calidad.html"><img src="img/test2.png" width="127" height="127" border="0" /></a></h3>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="ch-item ch-img-3">
              <div class="ch-info-wrap">
                <div class="ch-info">
                  <div class="ch-info-front ch-img-3"></div>
                  <div class="ch-info-back">
                    <h3 style="margin-top:-52px; margin-left:6px"><a href="servicio/servicio.html"><img src="img/test3.png" width="127" height="127" border="0" /></a></h3>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>
      </div>
      <div class="cajasTxtHome row">
        <div class="cajaIcono col-12 col-sm-4">
          <div class="txtCajaIcon">
            <div class="titCajaIcon"><span style="color:#512c19"><a href="producto/index.html">Producto</a></span></div>
            <div class="bajadaTxtIco"><a href="producto/">Separadores de fibra sólida, modelos estándares o diseñados según sus especificaciones. Conozca sus ventajas.</a></div>
          </div>
          <div class="sepaIco"></div>
        </div>
        <div class="cajaIcono col-12 col-sm-4">
          <div class="txtCajaIcon">
            <div class="titCajaIcon" style="color:#512c19"><a href="servicio/calidad.html">Calidad</a></div>
            <div class="bajadaTxtIco"><a href="servicio/calidad.html">Procedimiemtos de Gestión de Calidad, maquinaria americana de reconocida calidad, papel fabricado bajo altos estándares y personal capacitado, garantizan nuestra calidad.</a></div>
          </div>
          <div class="sepaIco"></div>
        </div>
        <div class="cajaIcono col-12 col-sm-4">
          <div class="txtCajaIcon">
            <div class="titCajaIcon"><span style="color:#512c19"><a href="servicio/servicio.html">Servicio</a></span></div>
            <div class="bajadaTxtIco"><a href="servicio/servicio.html">Entrega oportuna y desarrollo de soluciones a su medida, son parte del servicio que PARTICIONES le ofrece</a>.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="redes">
    <div class="redes_int">
      <!--<div class="cajaRedes" style="margin-right:25px"><a href="youtube" target="_blank"><img class="fade" src="img/youtube.png" width="68" height="68" alt="Vea nuestro canal de Youtube" /></a></div>-->
      <div class="cajaRedes2"><a href="servicio/iso9001.html"><img src="img/iso_footer.png" width="159" height="117" /></a></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_int">
      <div class="caja1Footer">
        <div class="cajaTitCont">Contacto</div>
        <div class="cajaTitCont2">Presidente Jorge Alessandri 11.500 <br />
          edificio 1 espacio 2B<br />
          San Bernardo, Santiago.</div>
        <div class="cajaTitCont3">+562 3207 1122</div>
        <div class="cajaTitCont4">ventas@particiones.net</div>
      </div>
      <div class="caja2Footer"></div>
      <div class="caja3Footer">
        <div class="cajaTitLink" style="color:#f90">Menú</div>
        <div class="menuLinks_web">
          <ul>
            <li><a href="empresa/">Empresa</a></li>
            <li><a href="producto/">Producto</a></li>
            <li><a href="servicio/calidad.html">Calidad</a></li>
            <li><a href="../servicio/iso9001.html">ISO 9001</a></li>
            <li><a href="servicio/servicio.html">Servicio</a></li>
            <li><a href="clientes/">Clientes</a></li>
            <li><a href="contacto/">Contacto</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="pie">
      <div class="pie_int">
        <div class="powered" style="color:#a78471"></div>
        <div class="powered" style="margin-left:260px">PARTICIONES • <script>
            document.write(new Date().getFullYear())
          </script> <span style="color:#F90; font-size:12px">®</span> Todos los Derechos Reservados</div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/jquery.eislideshow.js"></script>
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  <script type="text/javascript">
    $(function() {
      $('#ei-slider').eislideshow({
        easing: 'easeOutExpo',
        titleeasing: 'easeOutExpo',
        titlespeed: 1200
      });
    });
  </script>
</body>

</html>