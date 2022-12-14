<?php 
require 'php/function-library.php';

	/*Consulta en array para campos de MetaDatos*/
  $productMetaDatos = getProductInfo($ProductName);
  $productMetaDatos2 = getProductDescription($ProductName);


#METADATOS

if($productMetaDatos2['subtitle']!=""){$Title=$productMetaDatos2['subtitle']." ".$ProductName." para ".$productMetaDatos['productCat'];}
	else $Title=$PageTitle;
if($productMetaDatos2['product_description']!=""){$Description=substr($productMetaDatos2['product_description'], 0, 155);}
	else $Description=$PageDescription;
if($productMetaDatos['productName']!="") {$Keywords=$productMetaDatos['productName'].", ".$productMetaDatos['productCat'].", ".$productMetaDatos2['subtitle'].", ".$productMetaDatos2['bullets'];}
	else $Keywords=$PageKeywords;
if($productMetaDatos['imagenes']) {$image="/_assets/uploads/products/imagenes/".$productMetaDatos['imagenes']."";}
	else $image=$PageShareGraph;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php /*$PageTitle;*/ echo $Title; ?></title>
  <meta name="description" content="<?php echo $Description; /*$PageDescription;*/  ?>" />
  <meta name="keywords" content="<?php echo $Keywords." | ".$PageKeywords; ?>" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha256-HAaDW5o2+LelybUhfuk0Zh2Vdk8Y2W2UeKmbaXhalfA=" crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
  <script src="<?php echo $DocRoot ?>/_assets/scripts/img_gallery.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo $DocRoot ?>/_assets/css/styles.css">
  <link rel="shortcut icon" href="<?php echo $DocRoot ?>/_assets/images/favicon.ico" />
  <link rel="apple-touch-icon" href="<?php echo $DocRoot ?>/_assets/images/apple-touch-icon.png" />
  
  <!-- FACEBOOK OPEN GRAPH TAGS -->
  <meta property="og:url"                content="<?php echo $DocRoot . $_SERVER['REQUEST_URI']; ?>" />
  <meta property="og:type"               content="article" />
  <meta property="og:title"              content="<?php echo $Title; ?>" />
  <meta property="og:description"        content="<?php echo $Description; ?>" />
  <meta property="og:image"              content="<?php echo $DocRoot .$image; /*$PageShareGraph;*/ ?>" />




  <!-- PRODUCT SEARCH AUTOCOMPLETE -->
  <script src="<?php echo $DocRoot ?>/_assets/scripts/typeahead.min.js"></script>
  <script>
    $(document).ready(function(){
      $('input.typeahead').typeahead({
        name: 'typeahead',
        remote:'<?php echo $DocRoot ?>/search.php?key=%QUERY',
        limit : 10
      });
    });

    // Show/Hide Search Box
    function open_search(elmnt) {
      var a = document.getElementById("googleSearch");
      if (a.style.display == "") {
        a.style.display = "none";
        a.style.paddingRight = "";
        elmnt.innerHTML = "&#xf002;";    
      } else {
        a.style.display = "";  
        if (window.innerWidth > 700) {
          a.style.width = "300px";
        } else {
          a.style.width = "80%";
          elmnt.style.display = "none";
        }
        if (document.getElementById("gsc-i-id1")) {
          document.getElementById("gsc-i-id1").focus(); 
        }
        elmnt.innerHTML = "<span style='font-family:hcond, verdana;font-weight:bold;'>X</span>";
        // Beghelli USA Search Focus
        if (document.getElementById("productsearch")) {document.getElementById("productsearch").focus(); }
      }
    }
  </script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?php ProcessDivisionKey('GoogleAnalytics'); ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
   
    gtag('config', '<?php ProcessDivisionKey('GoogleAnalytics'); ?>');
  </script>

  <!-- Google Site Search -->
  <script>
    (function() {
      var cx = '<?php ProcessDivisionKey('GoogleSiteSearchKey'); ?>';
      var gcse = document.createElement('script');
      gcse.type = 'text/javascript';
      gcse.async = true;
      gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(gcse, s);
    })();
  </script>
  <style>
    body{
      #reg5:active:border:none;
    }
  </style>
  
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-52C4WSX');</script>
<!-- End Google Tag Manager -->

</head>
<body >

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-52C4WSX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


  <div class="container-fluid app-width first-header" >
  <div class="row">
    <div class="col col-sm-6 hidden-sm" >
      <div class="pull-left" >
      <ul class="list-inline " >          
        <li ><a href="<?php echo $DocRoot ?>/contact/info_rq.php">CONTACTO</a></li>
        <li><span class="separator">I</span></li>
        <li><a href="#newslettermodal"  data-toggle="modal" data-target="#newsletterModal">SUSCRIBIRSE A NOTICIAS</a></li>
        <li style="vertical-align: bottom; height: 30px;">&nbsp;</li>
      </ul>
    </div>
    </div>

    <div class="col col-sm-6">
      <div class="pull-right" style="padding-top:10px; ">    
        <ul class="list-inline "> 
      <!-- <li>
        <a href="https://www.beghelli.com.mx/soyrep.html" target="_blank">
          <span class="button" STYLE="color:black;"><i class="icon social fa fa-lg fa-lock"></i>&nbsp; SOY REPRESENTANTE</span>
        </a>
      </li> -->
      <li>
        <a href="https://api.whatsapp.com/send?phone=525543486687&text=%C2%A1Hola!%20Me%20gustar%C3%ADa%20conocer%20m%C3%A1s%20acerca%20de%20sus%20productos." target="_blank">
          <span class="button"><i class="icon social fa fa-lg fa-whatsapp"></i></span>
        </a>
      </li>
      <li>
        <a href="https://www.facebook.com/BeghelliMexico/" target="_blank">
          <span class="button"><i class="icon social fa fa-lg fa-facebook"></i></span>
        </a>
      </li>
       <li>
        <a href="https://www.instagram.com/beghellimexico/" target="_blank">
          <span class="button"><i class="icon social fa fa-lg fa-instagram"></i></span>
        </a>
      </li>
      <li>
        <a href="https://www.linkedin.com/company/beghellimexico/" target="_blank">
          <span class="button"><i class="icon social fa fa-lg fa-linkedin"></i></span>
        </a>
      </li>
	  
<!--        <li>
        <a href="https://twitter.com/BeghelliMexico" target="_blank">
          <span class="button"><i class="icon social fa fa-lg fa-twitter"></i></span>
        </a>
      </li>-->
      <li>
        <a href="https://www.youtube.com/channel/UC11tlEqg4pWhmCj8mYY_pNg" target="_blank">
          <span class="button"><i class="icon social fa fa-lg fa-youtube"></i></span>
        </a>
      </li>
      <li>
        <div class="dropdown" >
          <button class="btn btn-global dropdown-toggle dropdown" type="button" data-toggle="dropdown">
            <i class="fa fa-globe"></i>
            GRUPO BEGHELLI</button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-global" style="padding:15px; width:300px;">
              <div class="flex-container-global">
                <div >
                  <ul class="list-unstyled dropdown-menu-global">
                    <li class="dropdown-menu-header">GLOBAL WEBSITE</li>
                    <li><a href="https://www.beghelli.it/it"><span class="glyphicon glyphicon glyphicon-menu-right"></span> Italiano</a></li>
                    <li><a href="https://www.beghelli.it/en"><span class="glyphicon glyphicon glyphicon-menu-right"></span> English</a></li>
                  </ul>
                </div>
                <div >
                  <ul class="list-unstyled dropdown-menu-global">              
                    <li class="dropdown-menu-header">CZECH REPUBLIC</li>
                    <li><a href="https://www.beghelli.it/cs-cz"><span class="glyphicon glyphicon glyphicon-menu-right"></span> Czech</a></li>
                    <li><a href="https://www.beghelli.it/en-cz"><span class="glyphicon glyphicon glyphicon-menu-right"></span> English</a></li>
                    <li><a href="https://www.beghelli.it/ru-cz"><span class="glyphicon glyphicon glyphicon-menu-right"></span> Russian</a></li>
                  </ul>
                </div>
              </div>
              <div class="divider"></div>
              <div class="flex-container-global">
                <div >
                  <ul class="list-unstyled dropdown-menu-global">
                    <li class="dropdown-menu-header">GERMANY</li>
                    <li><a href="https://www.beghelli.it/de-de"><span class="glyphicon glyphicon glyphicon-menu-right"></span> Deutsch</a></li>
                    <li><a href="https://www.beghelli.it/en-de"><span class="glyphicon glyphicon glyphicon-menu-right"></span> English</a></li>
                  </ul>
                </div>
                <div >
                  <ul class="list-unstyled dropdown-menu-global">              
                    <li class="dropdown-menu-header">HUNGARY</li>
                    <li><a href="https://www.beghelli.it/hu-hu"><span class="glyphicon glyphicon glyphicon-menu-right"></span> Magyar</a></li>
                  </ul>
                </div>
              </div>
              <div class="divider"></div>
              <div class="flex-container-global">
                <div >
                  <ul class="list-unstyled dropdown-menu-global">              
                    <li class="dropdown-menu-header">POLAND</li>
                    <li><a href="https://www.beghelli.it/pl-pl"><span class="glyphicon glyphicon glyphicon-menu-right"></span> Polski</a></li>
                  </ul>                  
                </div>
              </div>
              <div class="divider"></div>
              <div class="row">
                <div class="col col-md-12">
                  <ul class="list-unstyled dropdown-menu-global">              
                    <li class="dropdown-menu-header">COMPANY WEBSITES</li>
                    <li><a href="https://www.beghelliusa.com/"><span class="glyphicon glyphicon glyphicon-menu-right"></span> Beghelli Inc. (USA)</a></li>
                    <li><a href="https://www.beghellicanada.com/"><span class="glyphicon glyphicon glyphicon-menu-right"></span> Beghelli Canada Inc. (Canada)</a></li>
                    <li><a href="https://www.beghelli.com.mx/"><span class="glyphicon glyphicon glyphicon-menu-right"></span> Beghelli de Mexico (Mexico)</a></li>
                    <li><a href="https://www.beghelliasia.com/"><span class="glyphicon glyphicon glyphicon-menu-right"></span> Beghelli Asia Pacific Ltd (Hong Kong)</a></li>
                    <li><a href="https://www.beghellichina.com/"><span class="glyphicon glyphicon glyphicon-menu-right"></span> Beghelli China (People's Republic of China)</a></li>
                    <li><a href="https://www.beghelli.it/cs-cz"><span class="glyphicon glyphicon glyphicon-menu-right"></span> Beghelli Elplast (Czech Republic)</a></li>
                    <li><a href="https://www.beghelli.it/de-de"><span class="glyphicon glyphicon glyphicon-menu-right"></span> Beghelli Präzisa (Germany)</a></li>
                    <li><a href="https://www.beghelli.it/pl-pl"><span class="glyphicon glyphicon glyphicon-menu-right"></span> Beghelli Polska (Poland)</a></li>
                    <li><a href="https://www.beghelli.it/hu-hu"><span class="glyphicon glyphicon glyphicon-menu-right"></span> Beghelli Hungary (Hungary)</a></li>
                    <li><a href="https://www.beghelli.it/it"><span class="glyphicon glyphicon glyphicon-menu-right"></span> Beghelli S.p.A. (Italy)</a></li>
                  </ul>                  
                </div>
              </div>    
            </div>
          </div>
        </li>     
      </ul>
      </div>
    </div>
  </div>
  </div>

<!-- MAIN NAVIGATION -->

<nav class="navbar navbar-default  navbar-beghelli" data-spy="affix" data-offset-top="40" >
  <nav class="navbar navbar-inverse  navbar-beghelli app-width" >  
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MenuNavbar" style="background-color: #009de0 !important;">
        <i class="glyphicon glyphicon-menu-hamburger gi-2x"></i>                   
      </button>
      <a class="navbar-brand" href="<?php echo $DocRoot ?>">
        <img src="<?php echo $DocRoot ?>/_assets/images/logo.svg" class="logo" width="162" height="55" alt="Beghelli produces lighting, emergency and energy-saving products, electronic systems for home and industrial security." />
      </a>
    </div>

    <div class="collapse navbar-collapse" id="MenuNavbar" style="background-color: #009de0;">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown" style="background-color: <?php echo checkActiveTab('corporate') ?>;">
          <a class="dropdown-toggle navbar-beghelli " data-toggle="dropdown" href="#">GRUPO BEGHELLI
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $DocRoot ?>/corporate/beghelli-group.php"><span class="glyphicon glyphicon glyphicon-menu-right"></span>&nbsp; Quiénes Somos</a></li>
            <li><a href="<?php echo $DocRoot ?>/corporate/authorized-agents.php"><span class="glyphicon glyphicon glyphicon-menu-right"></span>&nbsp; Representantes de Ventas</a></li>
            <li><a href="<?php echo $DocRoot ?>/corporate/investor-relations.php"><span class="glyphicon glyphicon glyphicon-menu-right"></span>&nbsp; Distribuidores</a></li>
            <li><a href="<?php echo $DocRoot ?>/corporate/partnerships.php"><span class="glyphicon glyphicon glyphicon-menu-right"></span>&nbsp; Asociaciones</a></li>
          </ul>
        </li>        
        <li class="dropdown no-touch" style="position: initial; background-color: <?php echo checkActiveTab('products') ?>;"><a class="dropdown-toggle navbar-beghelli" data-toggle="dropdown" href="#">PRODUCTO
          <!--<span class="caret"></span>--></a>
        <!-- <ul class="dropdown-menu dropdown-menu-full" style="width: 128%;left: -14%;"> -->
        <ul class="dropdown-menu dropdown-menu-full" style="width:100%">
          <li>
            <div class="row" >
              <ul class="list-unstyled col-md-3">
                <li class="dropdown-header">
                  <span class="square" style="background-color: #0099ff"></span>
                  &nbsp;&nbsp;&nbsp;&nbsp; ILUMINACIÓN
                </li>
                <?php SetCategoriesMenu('iluminacion'); ?>
              </ul>
              <ul class="list-unstyled col-md-3">
                <li class="dropdown-header">
                  <span class="square" style="background-color: #d7D30E"></span>
                  &nbsp;&nbsp;&nbsp;&nbsp; EMERGENCIA
                </li>
                <?php SetCategoriesMenu('emergencia'); ?>
              </ul>
              <ul class="list-unstyled col-md-2">
                <li class="dropdown-header">
                  <span class="square" style="background-color:#fbc016"></span>
                  &nbsp;&nbsp;&nbsp;&nbsp; PLANET SUN
                </li>
                <?php SetCategoriesMenu('luce_solare'); ?>
                
                <li class="dropdown-header" style="margin-top:15px">
                  <span class="square" style="background-color:#f85000"></span>
                  &nbsp;&nbsp;&nbsp;&nbsp; OUTLET
                </li>
                <li><a href="/products.php?line=outlet" style="margin-left:27px"><span class="glyphicon glyphicon glyphicon-menu-right"></span>&nbsp; Ver Productos</a></li>
              </ul>

              <ul class="list-unstyled col-md-2">
                <li class="dropdown-header">
                  <span class="square" style="background-color:#B22D00"></span>
                  &nbsp;&nbsp;&nbsp;&nbsp; LOGICA
                </li>
                <?php SetCategoriesMenu('logica'); ?>
              </ul>

              <ul class="list-unstyled col-md-2">
                <li class="dropdown-header">
                  <span class="square" style="background-color:#3267c6"></span>
                  &nbsp;&nbsp;&nbsp;&nbsp; SANIFICAARIA
                </li>
                <li>
                  <a href="https://sanificaaria.beghelli.com.mx/" style="margin-left:27px"><span class="glyphicon glyphicon glyphicon-menu-right"></span>&nbsp; SanificaAria</a>
                </li>
                <!-- <li class="dropdown-header" style="margin-top:15px">
                  <span class="square" style="background-color:#007042"></span>
                  &nbsp;&nbsp;&nbsp;&nbsp; FIORE
                </li>
                <li>
                  <a href="/products.php?line=outlet" style="margin-left:27px"><span class="glyphicon glyphicon glyphicon-menu-right"></span>&nbsp; Ver Productos</a>
                </li> -->
              </ul>


            </div>
          </li>
        </ul>
        </li>
        <li class="dropdown " style="background-color: <?php echo checkActiveTab('technical') ?>;"><a href="#" class="dropdown-toggle navbar-beghelli" data-toggle="dropdown" >ÁREA TÉCNICA</a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $DocRoot; ?>/technical-area/product-literature.php"><span class="glyphicon glyphicon glyphicon-menu-right"></span>&nbsp; Catálogos</a></li>
            <li><a href="<?php echo $DocRoot; ?>/technical-area/success-cases.php"><span class="glyphicon glyphicon glyphicon-menu-right"></span>&nbsp; Casos de Éxito</a></li>
            <li><a href="<?php echo $DocRoot; ?>/technical-area/downloads.php"><span class="glyphicon glyphicon glyphicon-menu-right"></span>&nbsp; Información Técnica</a></li>
            <li><a href="<?php echo $DocRoot; ?>/technical-area/certifications.php"><span class="glyphicon glyphicon glyphicon-menu-right"></span>&nbsp; Certificaciones</a></li>
          </ul>        
        </li>
        <li class="dropdown " style="background-color: <?php echo checkActiveTab('support') ?>;"><a href="#" class="navbar-beghelli" data-toggle="dropdown" >SOPORTE</a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $DocRoot; ?>/support/faq.php"><span class="glyphicon glyphicon glyphicon-menu-right"></span>&nbsp; Preguntas Frecuentes</a></li> 
            <li><a href="<?php echo $DocRoot; ?>/support/legal_info.php"><span class="glyphicon glyphicon glyphicon-menu-right"></span>&nbsp; Política de Privacidad</a></li>
          </ul>
        </li>
        <li style="background-color: <?php echo checkActiveTab('contact') ?>;"><a href="/contact/info_rq.php" class="navbar-beghelli">CONTACTO</a>
          <div style="position:relative; z-index: 4; height: 75px; background-color: #009de0; letter-spacing: normal; top: 0px; width: 200px; display:none" id="googleSearch">   
            <gcse:search></gcse:search> 
          </div>
        <li>
          <a href="javascript:void(0);" onclick="open_search(this)" title="Search " class="fa ">&#xf002;</a>
        </li>
      </ul>
    </div>
  
  </nav>
</nav>
<!-- END MAIN NAVIGATION -->
<!-- PAGE CONTENTS -->

<!-- START COVER -->
  <?php
    if(strstr($_SERVER['REQUEST_URI'], 'success-cases.php') || strstr($_SERVER['REQUEST_URI'], 'authorized-agents.php') || strstr($_SERVER['REQUEST_URI'], 'beghelli-group.php') || strstr($_SERVER['REQUEST_URI'], 'product-literature.php')){
  ?>
  <div class="container-fluid app-width page-content" style="margin-top:30px;padding:0">
      <img src="<?php echo $linkCover ?>" style="width:100%">
  </div>
  <?php
    }
  ?>
<!-- END COVER -->

<br />
<div class="container-fluid app-width page-content" style="margin-bottom:50px">

<?php if (!$DoNotRenderBreadCrumbs): ?>

  <!-- PAGE BREADCRUMB -->
  <div class="row breadcrumb container-fluid flex-container-social" style="border-bottom: 5px solid  <?php echo $CategoryColorTheme;  ?>;">
    <div class="col col-sm-8" style="padding-left:0;">
      <span class="step">
        <?php echo ($ProductLine)?FormatCatName($CategoryName, $ProductLine):FormatCatName($CategoryName); ?>
      </span>
      <?php if ($PageTitle): ?>
        <span class="separator">/</span>
        <span class="step"><?php echo $PageTitle; ?></span>
      <?php endif ?>
    </div>  

    <div class="col col-sm-4 pull-right flex-container-social social-share-bar" style="padding-right:0;">
      <div class="show-sm navbar-toggle" data-toggle="collapse" data-target="#SocialNavbar">
        <span class="icon fa share fa-share-alt"></span>
      </div>
        <div class="pull-right collapse navbar-collapse " id="SocialNavbar"  style="padding-right:0;">
          <ul class="list-inline flex-container-social social-share-bar" style=" padding-right:0;"> 

            <li>
                <div id="share" class="sharrre-button cur-p" title="Compartir por..."><span class="fa fa-share-alt icon share"></span></div>
            </li>
			
		  <li>
                <a href="mailto:?subject=<?php echo $PageTitle; ?>&body=I think this might interest you: Beghelli - <?php echo $PageDescription; ?>. The address is <?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>" class="no-uline link"><div id="email" class="sharrre-button cur-p"><span class="fa fa-envelope icon share"></span></div></a>
            </li>
            <li>
                <a href="https://api.whatsapp.com/send?phone=525543486687&text=%C2%A1Hola!%20Me%20gustar%C3%ADa%20conocer%20m%C3%A1s%20acerca%20de%20sus%20productos." data-action="share/whatsapp/share" class="no-uline link"><div id="whatsapp" class="sharrre-button cur-p"><span class="fa fa-whatsapp icon share"></span></div></a>
            </li>
            <li>
                <a href="https://twitter.com/intent/tweet?url=<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>" class="no-uline link" target="_blank"><div id="twitter" class="sharrre-button cur-p"><span class="fa fa-twitter icon share"></span></div></a>
            </li>
            <li>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>"  class="no-uline link" target="_blank"><div id="facebook"><span class="fa fa-facebook icon share"></span></div></a>
            </li> 
            <li>
                <a href="https://www.linkedin.com/cws/share?url=<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>" class="no-uline link" target="_blank"><div id="linkedin" class="sharrre-button cur-p"><span class="fa fa-linkedin icon share"></span></div></a>
            </li>
          </ul>
        </div>
    </div>
</div>
<?php endif ?> 


