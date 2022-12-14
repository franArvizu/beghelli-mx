<?php 
  // PAGE VARIABLES
  $PageTitle= $_GET['cat'];
  $CategoryName= str_replace("_", " ", $_GET['line']);
  if ($CategoryName == 'iluminacion') {
    $CategoryName = 'ILUMINACIÓN';
  }
  $PageDescription = ($_GET['cat'])?str_replace("_", " ", $_GET['line']). " / ". $_GET['cat']:str_replace("_", " ", $_GET['line']);
  $PageKeywords= str_replace("_", " ", $_GET['line']). ", " . $_GET['cat'];
  $VersionOptionsILU = array('LOGICA');
  $VersionOptionsEM = array('SA','SE','PIR');
  $VersionOptions = array('SA','SE','PIR');
  $InstallationOptionsILU = array('EMPOTRAR','SUSPENDER','TIRA CONTINUA','SOBREPONER A TECHO','SOBREPONER A MURO','PUNTA DE POSTE','PROYECTOR');
  $InstallationOptionsEM = array('SOBREPONER A TECHO','SOBREPONER A MURO','EMPOTRAR A MURO','BATERÍA EM');
  $ProtectionGradesILU = array('IP54','IP65','IP66','IP67','IK05','IK07','IK09','NEMA4X','NSF','HAZARDOUS','SANITATION LISTED');
  $ProtectionGradesEM = array('INTERIORES','IP65','IP66','IK07','NEMA4X','NSF','HAZARDOUS','SANITATION LISTED');
  

  // Create Categories list based on product line
  if (strtolower($_GET['line']) == "iluminacion"):
    $CategoryColorTheme= "#0099ff";
    elseif (strtolower($_GET['line']) == "emergencia"):
      $CategoryColorTheme= "#d7D30E";
    elseif (strtolower($_GET['line']) == "luce_solare"):
      $CategoryColorTheme= "#fbc016";
    elseif (strtolower($_GET['line']) == "logica"):
      $CategoryColorTheme= "#0a66ca";
  endif;

  // SET VARIABLES WHEN PRODUCT SEARCH WAS USED
  if($_GET['search']):
    $PageTitle= "Resultado de productos para \"".strtoupper($_GET['search'])."\"";
    $CategoryName= "resultado de la búsqueda";
    $PageDescription = "Búsqueda productos Beghelli. Busca por nombre.";
    $PageKeywords= "Beghelli, búsqueda, búsqueda beghelli";
    $CategoryColorTheme= "#009de0";
  endif;


  // IMPORT PAGE HEADER
  require 'header.php'
 ?>

<!-- PAGE CONTENT -->

<div class="row " >
  <div class="col col-md-12 cat-header" >
    <div class="title"><?php echo ($PageTitle)?:strtoupper($CategoryName); ?></div>
    <!-- <div class="title">heey</div> -->
    <div class="abstract">
      <?php
        if($_GET['search']):
          echo CountSearchResults($_GET['search']);
        else:
          // echo "Hola"
          echo ($PageTitle)?ucwords(strtoupper($CategoryName)):''; 
        endif;
       ?></div>
  </div>  
</div>
<div class="row">
<!-- PRODUCT FILTERS -->

  <div class="col col-md-12 cat-section " > 
    <?php 
    // HIDE FILTERS FOR PRODUCT SEARCH
    if (!$_GET['search']): 
    ?>  

    <!-- <div class="row">
      <h1>No tiene búsqueda</h1>
    </div> -->

    <div class="row">
      <div class="col col-sm-4 form-inline"> 
        <?php if ($_GET['line'] == "luce_solare"): ?>
        <div>FAMILIA</div>
        <?php endif ?>

        <?php if ($_GET['line'] != "luce_solare"): ?>
        <div>CATEGORÍA</div>
        <?php endif ?>
        
        <div class="cat-filter">
        <div class="dropdown form-group">
          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="width:250px;">
            <?php echo $_GET['cat']?:'TODOS'; ?> <span class="caret"></span></button> 
            <ul class="dropdown-menu" style="width:250px;">
            <li><a href="<?php echo RemoveCatFilter($_SERVER['REQUEST_URI'], 'cat') ?>">TODOS</a></li>
            <?php GetCategoriesFilter($_GET['line']); ?>
          </ul>
        </div>
        <?php if ($_GET['cat']): ?>
          &nbsp;<a href="<?php echo RemoveCatFilter($_SERVER['REQUEST_URI'], 'cat') ?>"><i class="fa fa-close" ></i></a>
        <?php endif ?>
        </div>
      </div>
      <?php 
        if($_GET['line'] == "iluminacion" || $_GET['line'] == "emergencia"){
      ?>
          <!-- INSTALACIÓN -->
          <div class="col col-sm-3  form-inline">
            INSTALACIÓN
            <div class="cat-filter">
              <div class="dropdown form-group">  
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="width:auto">
                  <?php echo $_GET['inst']?:'TODOS'; ?> <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo RemoveCatFilter($_SERVER['REQUEST_URI'], 'inst') ?>">TODOS</a></li>
                  <?php 
                    if($_GET['line'] == "iluminacion"){
                  ?>

                    <?php foreach ($InstallationOptionsILU as $value): ?>
                      <li><a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '?'))?RemoveCatFilter($_SERVER['REQUEST_URI'], 'inst').'&':$_SERVER['REQUEST_URI'].'?'; ?>inst=<?php echo $value ?>"><?php echo $value ?></a></li>
                    <?php endforeach ?>

                  <?php 
                  }
                  if($_GET['line'] == "emergencia"){
                  ?>

                    <?php foreach ($InstallationOptionsEM as $value): ?>
                      <li><a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '?'))?RemoveCatFilter($_SERVER['REQUEST_URI'], 'inst').'&':$_SERVER['REQUEST_URI'].'?'; ?>inst=<?php echo $value ?>"><?php echo $value ?></a></li>
                    <?php endforeach ?>

                  <?php 
                  }
                  ?>
                </ul>
              </div>
              <?php if ($_GET['inst']): ?>
                  &nbsp;<a href="<?php echo RemoveCatFilter($_SERVER['REQUEST_URI'], 'inst') ?>"><i class="fa fa-close" ></i></a>
              <?php endif ?>
            </div>
          </div>
          <!-- PROTECCIÓN -->
          <div class="col col-sm-2  form-inline">
            PROTECCIÓN
            <div class="cat-filter">
              <div class="dropdown form-group">  
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                  <?php echo $_GET['grade']?:'TODOS'; ?> 
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo RemoveCatFilter($_SERVER['REQUEST_URI'], 'grade') ?>">TODOS</a></li>
                  <?php 
                    if($_GET['line'] == "iluminacion"){
                  ?>

                    <?php foreach ($ProtectionGradesILU as $value): ?>
                      <li><a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '?'))?RemoveCatFilter($_SERVER['REQUEST_URI'], 'grade').'&':$_SERVER['REQUEST_URI'].'?'; ?>grade=<?php echo $value ?>"><?php echo $value ?></a></li>
                    <?php endforeach ?>  

                  <?php 
                  }
                  if($_GET['line'] == "emergencia"){
                  ?>

                    <?php foreach ($ProtectionGradesEM as $value): ?>
                      <li><a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '?'))?RemoveCatFilter($_SERVER['REQUEST_URI'], 'grade').'&':$_SERVER['REQUEST_URI'].'?'; ?>grade=<?php echo $value ?>"><?php echo $value ?></a></li>
                    <?php endforeach ?> 

                  <?php 
                  }
                  ?>          
                </ul>
              </div>
              <?php if ($_GET['grade']): ?>
                &nbsp;<a href="<?php echo RemoveCatFilter($_SERVER['REQUEST_URI'], 'grade') ?>"><i class="fa fa-close" ></i></a>
              <?php 
                endif 
              ?>
            </div>
          </div>
      <?php 
          if ($_GET['line'] == 'iluminacion') {
      ?>
      <!-- CONTROL -->
          <div class="col col-sm-2  form-inline">
            <div>CONTROL</div>
            <div class="cat-filter">
              <div class="dropdown  form-group">  
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                  <?php echo $_GET['ver']?:'TODOS'; ?> <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                   <li><a href="<?php echo RemoveCatFilter($_SERVER['REQUEST_URI'], 'ver') ?>">TODOS</a></li>
                    <?php foreach ($VersionOptionsILU as $value): ?>
                      <li><a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '?'))?RemoveCatFilter($_SERVER['REQUEST_URI'], 'ver').'&':$_SERVER['REQUEST_URI'].'?'; ?>ver=<?php echo $value ?>"><?php echo $value ?></a></li>
                    <?php endforeach ?>             
                  </ul>
              </div>
              <?php if ($_GET['ver']): ?>
                &nbsp;<a href="<?php echo RemoveCatFilter($_SERVER['REQUEST_URI'], 'ver') ?>"><i class="fa fa-close" ></i></a>
              <?php endif ?>
            </div>
          </div>
      <?php 
          }
          else {
      ?>
          <!-- VERSIÓN -->
          <div class="col col-sm-2  form-inline">
            <div>VERSIÓN</div>
            <div class="cat-filter">
              <div class="dropdown  form-group">  
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                  <?php echo $_GET['ver']?:'TODOS'; ?> <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo RemoveCatFilter($_SERVER['REQUEST_URI'], 'ver') ?>">TODOS</a></li>
                    <?php foreach ($VersionOptions as $value): ?>
                      <li><a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '?'))?RemoveCatFilter($_SERVER['REQUEST_URI'], 'ver').'&':$_SERVER['REQUEST_URI'].'?'; ?>ver=<?php echo $value ?>"><?php echo $value ?></a></li>
                    <?php endforeach ?>             
                  </ul>
              </div>
              <?php if ($_GET['ver']): ?>
                &nbsp;<a href="<?php echo RemoveCatFilter($_SERVER['REQUEST_URI'], 'ver') ?>"><i class="fa fa-close" ></i></a>
              <?php endif ?>
            </div>
          </div>
      <?php 
          }
        }
      ?>
    </div>
  </div>
</div>

<!-- PRODUCTS LIST -->
<div class="row">
  <!-- ITEM --> 
  <div class="col col-md-12 cat-section">
  <?php
    endif;
    GetProducts($_GET['line'], $_GET['search'], $_GET['cat']);
  ?>
  </div>
</div>
 <!-- DISABLE PRODUCTS SCRIPT -->
<script>
/*Disable HLS50LM from "Helios" Cat*/
document.querySelector("[href='products/profile.php?product=hls50lm']").style.display="none";
/*Disable HLS70LM from "Helios" Cat*/
document.querySelector("[href='products/profile.php?product=hls70lm']").style.display="none";
</script>

<!-- DISABLE PRODUCRS FROM OUTLET SECTION -->
<script>
if(window.location.href.includes("?line=outlet")){
    document.querySelector("[href='products/profile.php?product=illumina® bs100 tubo led']").style.display="none";
    document.querySelector("[href='products/profile.php?product=illumina® bs101 tubo led']").style.display="none";
    document.querySelector("[href='products/profile.php?product=wallpack 100']").style.display="none";
    document.querySelector("[href='products/profile.php?product=wallpack eco']").style.display="none";
  }
</script>

<?php require 'footer.php' ?>
