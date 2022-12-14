<?php 
  // PAGE VARIABLES
  $PageTitle="Beghelli | Iluminación Industrial, Emergencia y Sistemas de Control";
  $PageDescription="Grupo Beghelli es una empresa italiana experta en productos de iluminación, sistemas de control, fotovoltaicos y emergencia, entre otras áreas. Su catálogo incluye una amplia variedad de productos, todos con calidad, diseño y tecnología de una empresa de clase mundial.";
  $PageKeywords="Beghelli | Iluminación Industrial, Emergencia y Sistemas de Control";
  $CategoryColorTheme= "#bb131a";
  $PageShareGraph= "/_assets/images/logo.svg";

  // ONLY USE THIS VARIABLE ON PAGES TO PREVENT PAGE BREADCUMB FROM BEING RENDERED
  $DoNotRenderBreadCrumbs = "1";

  // IMPORT PAGE HEADER
  require 'header.php'
 ?>

<div id="ShowcaseCarousel" class="carousel slide carousel-fade app-width" data-ride="carousel" style="margin-bottom:50px">
  <!-- Indicators -->
  <ol class="carousel-indicators" style="bottom: -30px">
    <?php GetSlidersCount(); ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php GetSliders(); ?>
  </div>
    
</div>
  
<div class="container text-center app-width">
  <h3 class="title">¿Qué producto te interesa?</h3><br>
  <div class="abstract" >Ingresa nombre de producto o descripción</div>
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">        
      <form action="products.php" method="get">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Busca en Beghelli..." name="search">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <i class="glyphicon glyphicon-search"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-3"></div>
  </div>
  <br />

  <hr style="border-top:2px solid #eee">

  <div id="banners" class="row" style="margin-top: 30px">
    <?php GetBanners(); ?>
  </div>

</div>

<div class="container app-width">
  <hr style="border-top:2px solid #eee;margin-top:50px">
  <h1 class="title" style="font-weight:900;">Noticias</h1>
  <div class="news">
    <?php GetArticles(); ?>
  </div>
</div>
<?php require 'footer.php' ?>
