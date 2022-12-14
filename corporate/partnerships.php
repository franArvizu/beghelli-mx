<?php 
  // PAGE VARIABLES
  $PageTitle="ASOCIACIONES";
  $CategoryName="GRUPO BEGHELLI";
  $PageDescription="ASOCIACIONES";
  $PageKeywords="ASOCIACIONES";
  $CategoryColorTheme= "#FFF";

  // IMPORT PAGE HEADER
  require '../header.php';
 ?>

<!-- PAGE CONTENT -->
<div class="row page-content ">
  <div class="col col-md-9" style="margin-bottom:90px">
    <div class="row">
      <div class="col col-md-9">
        <div class="title"><?php echo ucwords(strtolower($PageTitle)); ?></div>
      </div>
    </div>
    <div class="row" style="margin-top:20px">
      <div class="col col-md-3">
        <img src="../_assets/images/asociations/caname.jpg" alt="CANAME" style="width:100%;max-width:80px;margin:auto;margin-left:28%">
      </div>
      <div class="col col-md-9">
        <p>
          Beghelli México se afilia en 2019 a la CANAME (Cámara Nacional de 
          Manufacturas Eléctricas). La CANAME buscan apoyar a los afiliados a ser
          más competitivos, a través del trabajo con actores clave, como las
          Secretarías de Economía, de Energía, la Comisión Federal de Electricidad, el
          FIDE, la CRE, CONUEE, PROFECO, DGN, CANENA, IEC, ANCE, INEEL, Ema,
          entre otros.
        </p>
      </div>
    
    </div>
    <div class="row" style="margin-top:20px">
      <div class="col col-md-3">
        <img src="../_assets/images/asociations/adlogo.jpg" alt="IESNA" style="width:100%">
      </div>
      <div class="col col-md-9">
        <p>
          Beghelli México se vuelve miembro AD en enero 2017.
          AD es una Asociación que trabaja conectando a los distribuidores
          independientes enfocados al crecimiento, con proveedores de clase
          mundial con el objetivo de lograr un desempeño superior en el mercado y
          mantenerse por delante de la competencia.
        </p>
      </div>
      </div>
    <div class="row" style="margin-top:20px">
      <div class="col col-md-3">
        <img src="../_assets/images/asociations/ccim_logo.png" alt="CCIM" style="width:100%">
      </div>
      <div class="col col-md-9">
        <p>
          Beghelli México es socio de la Cámara de Comercio Italiana en México. 
          La CCIM es una asociación civil integrada por empresas italianas y mexicanas 
          de diferetes sectores que tiene el objetivo de fomentar relaciones comerciales entre
          las empresas asociadas. Su servicio garantiza las herramientas necesarias para 
          un crecimiento comercial. 
        </p>
      </div>
    </div>
  </div>
  <!-- SIDE PANEL NAVIGATION -->
  <?php include 'side_panel.php' ?>
</div>

<?php require '../footer.php' ?>
