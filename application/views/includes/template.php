<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title><?php echo $titulo; ?></title>
    <meta name="description" content="web, diseño, html,css,php,programacion web, desarrollo web,informatica,tecnologia">
    <meta name="author" content="Jose Ernesto Ramirez Moreno">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="<?php echo base_url() ?>public/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="<?php echo base_url() ?>public/css/bootstrap-responsive.css" rel="stylesheet">
<link href="<?php echo base_url() ?>public/css/estilo.css" rel="stylesheet">
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>public/img/favicon.ico">
    
<link href='http://fonts.googleapis.com/css?family=Alegreya:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/css/jquery.lightbox-0.5.css" media="screen" />

<script type="text/javascript" src="<?php echo base_url() ?>public/js/jquery1.7.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>public/js/bootstrap.js"></script>


<script type="text/javascript" src="<?php echo base_url() ?>public/js/jquery.lightbox-0.5.js"></script>



<script type="text/javascript">
$(function() {
  // Use this example, or...
  //$('a[@rel*=lightbox]').lightBox(); // Select all links that contains lightbox in the attribute rel
  // This, or...
  $('#gallery a').lightBox({fixedNavigation:true}); // Select all links in object with gallery ID
  // This, or...
  //$('.lightbox').lightBox(); // Select all links with lightbox class
  // This, or...
  //$('a').lightBox(); // Select all links in the page
  // ... The possibility are many. Use your creative or choose one in the examples above
});
 
</script>


  </head>
<body>
    <header>
        <div class="navbar navbar-fixed-top">
                <div class="container">
                     <a class="brand" href="<?php echo base_url(); ?>ernesto" title="Sobre Mi">
                          <span>José Ernesto Ramirez Moreno</span>
                    </a>
                    <ul class="nav">
           
                        <li><a href="<?php echo base_url(); ?>portafolio">PORTAFOLIO</a></li>
                        <li><a href="<?php echo base_url(); ?>contacto">CONTACTO</a></li>
                    </ul>
                </div>
        </div>
    </header>
    <div class="espacio"></div>
        <?php $this->load->view($contenido); ?>
       
      <hr />
    <footer>
        <div class="container">
          <div class="row">
              <div id="pie1" class="span8 offset3">
            <span class="pie">Copyright © 2012 Desarrollo y Diseño <a class="email" href="mailto:nolc_erne@hotmail.com">Jose Ernesto Ramirez Moreno</a></span>

              </div>
            <div class="row">
              <div class="span3 offset5">
            <span class="pie">Todos los Derechos Reservados  Monterrey, Nuevo León, México</span>
            
              </div>         
          </div>
          
        </div>

        <div class="row">
        <div class="span6">
          <ul class="menufooter">
            <li class="primero"><a href="<?php echo base_url(); ?>ernesto">inicio</li></a>
            <li><a href="<?php echo base_url(); ?>portafolio"><a href="<?php echo base_url(); ?>portafolio">portafolio</li>
            <li><a href="<?php echo base_url(); ?>contacto">contacto</li>
          </ul>
        </div>
              <div id="pie2" class="span2 offset4">
               <a href="https://twitter.com/#!/nolc_erne" target="_blank" title="Sigueme en twitter">
                 <img src="<?php echo base_url() ?>public/img/twitter.png" width="40px" height="40px" alt="twitter">
               </a>
               <a href="http://www.linkedin.com/pub/jose-ernesto-ramirez-moreno/28/189/703" target="_blank" title="contactame en linkedin">
                 <img src="<?php echo base_url() ?>public/img/linkedin.png" width="40px" height="40px" alt="twitter">
               </a>
              </div>
          </div>


        </div>
   </footer>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19383320-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  </body>
</html>