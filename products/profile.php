<?php 
  $ProductName=$_GET['product'];

  $PageDescription="Beghelli presenta sus productos.";
  $PageKeywords="Beghelli México, Iluminación, Emergencia, Luce Solare, Logica, SanificaAria";
  $PageShareGraph= "/_assets/images/logo.svg";
  
  // ONLY USE THIS VARIABLE ON PAGES TO PREVENT PAGE BREADCUMB FROM BEING RENDERED
  $DoNotRenderBreadCrumbs = "1";
  
  // IMPORT PAGE HEADER
  require '../header.php';
  $product = getProductDescription($ProductName);
  $productInfo = getProductInfo($ProductName);
  echo "<br />";
  $imagenes = explode(",", $productInfo['imagenes']);
  $fichas = $productInfo['fichas'];
  $fotometrias = $productInfo['fotometrias'];
  $manuales = $productInfo['manuales'];
  
/* AGREGADO 29 OCT 2020*/
  $galerias = $productInfo['galerias'];
  $brochure = $productInfo['brochure'];
  $brochurePdto = $productInfo['brochurePdto'];
  $brochureFamilia = $productInfo['brochureFamilia'];
  $guiaAplicacion = $productInfo['guiaAplicacion'];
  $hojaPdto = $productInfo['hojaPdto'];
  $beneficios = $productInfo['beneficios'];
  $video = $productInfo['video'];
 /* FIN CÓDIGO NUEVO AGREGADO 29 OCT 2020*/ 

/* AGREGADO 31 ENE 2021 */
  $mercadolibre = $productInfo['mercadolibre'];
  /* FIN CÓDIGO NUEVO AGREGADO 31 ENE 2021 */ 

  
  $simbolos = explode(",", $productInfo['simbolos']);
  if ($simbolos[0] == "-") { 
    $simbolos = [];
  }

  // PAGE VARIABLES
  $ProductLine=$product['subtitle'];
  $CategoryName=$productInfo['productCat'];
  $PageTitle=$product['product_name'];
  
  $CategoryColorTheme = "#fff";
  ?>

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
                <a href="mailto:?subject=<?php echo $Title; ?>&body=Me interesa el producto Beghelli: <?php echo $Title." con las características: ".$product['product_description']; ?>." class="no-uline link"><div id="email" class="sharrre-button cur-p"><span class="fa fa-envelope icon share"></span></div></a>
            </li>
            <li>
                <a href="https://web.whatsapp.com/send?text=<?php echo $Title;?>%20<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>" data-action="share/whatsapp/share"  class="no-uline link"><div id="whatsapp" class="sharrre-button cur-p"><span class="fa fa-whatsapp icon share"></span></div></a>
          
				

			</li>
            <li>
                <a href="https://www.twitter.com/share?url=<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" class="no-uline link" target="_blank"><div id="twitter" class="sharrre-button cur-p"><span class="fa fa-twitter icon share"></span></div></a>
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

<div class="row page-content product-info" style="margin-bottom:50px"> 
  <div class="col col-md-12" >
    <!-- PRODUCT IMAGE -->
    <div class="img-thumbnail vertical-align pull-right product-image" data-toggle="modal" data-target="#imageModal">  
        <img src="/_assets/uploads/products/imagenes/<?php echo $imagenes[0] ?>" class="img-responsive center-block" style="height:100%" alt="<?php strtoupper($row["productName"]) ?>" />
    </div>        
    <!-- IMAGE MODAL -->
    <div class="modal fade" id="imageModal" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-body">
              <img src="/_assets/uploads/products/imagenes/<?php echo $imagenes[0] ?>" class="img-responsive center-block" style="height:100%" alt="<?php strtoupper($row["productName"]) ?>" />
          </div>
        </div>
      </div>
    </div>
    <!-- PRODUCT DESCRIPTION -->
    <div class="product-description">
      <div class="title"><?php echo strtoupper($product['product_name']) ?></div>
      <h1 class="abstract"><?php echo ucfirst($product['subtitle']) ?></h1>
      <?php 
        $paragraphs = explode(";", $product['product_description']);
        foreach ($paragraphs as $paragraph) {
          echo "<p>".$paragraph."</p>";
        }
      ?>
    </div>
  </div>
  <div class="col col-md-6" >
    <!-- PRODUCT FEATURES AND RESOURCE LINKS -->
    <?php 
      if ($product['bullets'] != '-') {
        echo "<div class='abstract'>Características:</div>";
        echo "<ul>";
        $bullets = explode(";", $product['bullets']);
        foreach ($bullets as $bullet) {
          echo "<li>".$bullet."</li>";
        }
        echo "</ul>";
      }
    ?>
  </div>


  <div class="col col-md-6">
    <!-- Sección para OUTLET -->


    <?php 
      if (count($simbolos) > 0) {
        echo '<div class="form-inline">';
        foreach ($simbolos as $simbolo) {
          echo '
                <img class="img-thumbnail" src="/_assets/uploads/products/simbolos/'.$simbolo.'.jpg" style="width:15%"/>
               ';
        }
        echo "</div>";
      }
    ?>
    <br />
    <?php 
          if($mercadolibre != "-" && $mercadolibre != ""){
            echo '<section style="margin-bottom:30px;">';
            echo '<div class="abstract">Compra en línea</div> ';
            echo '<a href="'. $mercadolibre . '" target="_blank">';
            echo '<img class="img" src="/_assets/images/mercado_libre.png" style="width:20%; margin-left: 25px"/>';
            echo '</a>';
            echo '</section>';
          }
    ?>

    <section style="margin-bottom:50px">
      <!--?php RenderProductLinks($ProductName); ?--> 
      <div class="abstract">Recursos</div> 
      <div class="resources-item">
        <?php 
          if($fichas != "-" && $fichas != ""){
            echo '<a href="/_assets/uploads/products/fichas/'. $fichas . '" class="btn btn-primary btn-block" target="_blank">Ficha Técnica</a>';
          }
        ?>
      </div>
      <div class="resources-item">
        <?php 
          if($fotometrias != "-" && $fotometrias != ""){
            echo '<a href="/_assets/uploads/products/fotometrias/'. $fotometrias . '" class="btn btn-primary btn-block" target="_blank">Fotometrías</a>';
          }
        ?>
      </div>
      <div class="resources-item">
        <?php 
          if($manuales != "-" && $manuales != ""){
            echo '<a href="/_assets/uploads/products/manuales/'. $manuales . '" class="btn btn-primary btn-block" target="_blank">Manual de Instalación</a>';
          }
        ?>
      </div>
    
<!-- AGREGADO 29 OCT 2020-->	
	  <div class="resources-item">
        <?php 
		
          if($galerias != "" && $galerias != "-"){
            echo '<a href="/_assets/uploads/products/galerias/'. $galerias . '" class="btn btn-primary btn-block" target="_blank">Galerías</a>';
          }
        ?>
      </div>
	  
	  <div class="resources-item">
        <?php 
          if($brochure != "-" && $brochure != "" ){
            echo '<a href="/_assets/uploads/products/brochure/'. $brochure . '" class="btn btn-primary btn-block" target="_blank">Brochure</a>';
          }
        ?>
      </div>	  

	  <div class="resources-item">
        <?php 
          if($brochurePdto != "-" && $brochurePdto != ""){
            echo '<a href="/_assets/uploads/products/brochureproducto/'. $brochurePdto . '" class="btn btn-primary btn-block" target="_blank">Brochure de Producto</a>';
          }
        ?>
      </div>

	  <div class="resources-item">
        <?php 
          if($brochureFamilia != "-" && $brochureFamilia != ""){
            echo '<a href="/_assets/uploads/products/brochurefamilia/'. $brochureFamilia . '" class="btn btn-primary btn-block" target="_blank">Brochure de Familia</a>';
          }
        ?>
      </div>	 

	  <div class="resources-item">
        <?php 
          if($guiaAplicacion != "-" && $guiaAplicacion != ""){
            echo '<a href="/_assets/uploads/products/guiaaplicacion/'. $guiaAplicacion . '" class="btn btn-primary btn-block" target="_blank">Guía de Aplicaciones</a>';
          }
        ?>
      </div>
	  

	  <div class="resources-item">
        <?php 
          if($hojaPdto != "-" && $hojaPdto != ""){
            echo '<a href="/_assets/uploads/products/hojaproducto/'. $hojaPdto . '" class="btn btn-primary btn-block" target="_blank">Hoja de Producto</a>';
          }
        ?>
      </div>	

	  <div class="resources-item">
        <?php 
          if($beneficios != "-" && $beneficios != ""){
            echo '<a href="/_assets/uploads/products/beneficios/'. $beneficios . '" class="btn btn-primary btn-block" target="_blank">Características y Beneficios</a>';
          }
        ?>
      </div>

	  <div class="resources-item">
        <?php 
          if($video != "-" && $video != ""){
            echo '<a href="'. $video . '" class="btn btn-primary btn-block" target="_blank">Video</a>';
          }
        ?>
      </div>	  
<!-- FIN CÓDIGO NUEVO AGREGADO 29 OCT 2020-->		  
	  
	  
    </section>
  </div>

  <!-- Gallery -->
        <!--?php RenderImageGallery($ProductName); ?-->
  <?php 
    // create counters
    if (count($imagenes) > 1) {
      $imgcount = "1"; 
      $slidecount = "1";
      $totalcount = "0";
  
      echo '<div class="col col-md-12">
              <div class="abstract">Galería</div>
                <div class="row">';
      
      // render thumbnail list
      foreach($imagenes as $imagen)
      {
        echo '<div class="column">
        <img src="/_assets/uploads/products/imagenes/'.$imagen.'" style="width:100%" onclick="openModal();currentSlide('. $imgcount . ')" class="cursor thumbnail"> 
        </div>
        ';
        $imgcount ++;
        $totalcount ++;
      }
      echo '<div id="galleryModal" class="modal "  role="dialog"> 
      <span class="close cursor" onclick="closeModal()">&times;</span>
      <div class="modal-content modal-gallery">';
      // render image modals
      foreach($imagenes as $imagen)
      {
        echo ' <div class="mySlides">
        <div class="numbertext">'. $slidecount . " / " . $totalcount .'
        </div>
        <img src="/_assets/uploads/products/imagenes/'. $imagen .'" style="width:100%">
        </div>
        ';
        $slidecount ++;
      }
      // navigation arrows	
      echo '</div>  
          <a class="prevbtn" onclick="plusSlides(-1)">&#10094;</a>
          <a class="nextbtn" onclick="plusSlides(1)">&#10095;</a>';
      
      echo '    </div>
              </div>
            </div>
            ';
    }
  ?>

<?php require '../footer.php' ?>