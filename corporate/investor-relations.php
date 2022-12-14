<?php 
  // PAGE VARIABLES
  $PageTitle="DISTRIBUIDORES";
  $CategoryName="GRUPO BEGHELLI";
  $PageDescription="DISTRIBUIDORES";
  $PageKeywords="DISTRIBUIDORES";
  $CategoryColorTheme= "#FFF";

  // IMPORT PAGE HEADER
  require '../header.php';
 ?>

<!-- PAGE CONTENT -->
<div class="row page-content ">
  
  <div id="suppliers" class="col col-md-9">
    <div class="title"><?php echo ucwords(strtolower($PageTitle)); ?></div>

    <div class="panel-group" id="accordion">

      <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#ags">
                AGUASCALIENTES
                <span class="glyphicon glyphicon-chevron-down pull-right"></span>
              </a>
            </h4>
          </div>
          <div id="ags" class="panel-collapse collapse">
            <div class="panel-body">
              <?php GetDealearsStates('AGUASCALIENTES'); ?>
            </div>
          </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" href="#bcs">
              BAJA CALIFORNIA
              <span class="glyphicon glyphicon-chevron-down pull-right"></span>
            </a>
          </h4>
        </div>
        <div id="bcs" class="panel-collapse collapse">
          <div class="panel-body">
            <?php GetDealearsStates('BAJA CALIFORNIA'); ?>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#camp">
                CAMPECHE
                <span class="glyphicon glyphicon-chevron-down pull-right"></span>
              </a>
            </h4>
          </div>
          <div id="camp" class="panel-collapse collapse">
            <div class="panel-body">
              <?php GetDealearsStates('CAMPECHE'); ?>
            </div>
          </div>
      </div> 

      <!-- <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#chi">
                CHIAPAS
                <span class="glyphicon glyphicon-chevron-down pull-right"></span>
              </a>
            </h4>
          </div>
          <div id="chi" class="panel-collapse collapse">
            <div class="panel-body">
              <?php GetDealearsStates('CHIAPAS'); ?>
            </div>
          </div>
      </div> -->

      <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#chh">
                CHIHUAHUA
                <span class="glyphicon glyphicon-chevron-down pull-right"></span>
              </a>
            </h4>
          </div>
          <div id="chh" class="panel-collapse collapse">
            <div class="panel-body">
              <?php GetDealearsStates('CHIHUAHUA'); ?>
            </div>
          </div>
      </div>

       <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#coah">
                COAHUILA
                <span class="glyphicon glyphicon-chevron-down pull-right"></span>
              </a>
            </h4>
          </div>
          <div id="coah" class="panel-collapse collapse">
            <div class="panel-body">
              <?php GetDealearsStates('COAHUILA'); ?>
            </div>
          </div>
      </div> 

      <!-- <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#col">
                COLIMA
                <span class="glyphicon glyphicon-chevron-down pull-right"></span>
              </a>
            </h4>
          </div>
          <div id="col" class="panel-collapse collapse">
            <div class="panel-body">
              <?php GetDealearsStates('COLIMA'); ?>
            </div>
          </div>
      </div> -->

       <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#dur">
                DURANGO
                <span class="glyphicon glyphicon-chevron-down pull-right"></span>
              </a>
            </h4>
          </div>
          <div id="dur" class="panel-collapse collapse">
            <div class="panel-body">
              <?php GetDealearsStates('DURANGO'); ?>
            </div>
          </div>
      </div> 

      <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#edomex">
                EDO. DE MÉXICO
                <span class="glyphicon glyphicon-chevron-down pull-right"></span>
              </a>
            </h4>
          </div>
          <div id="edomex" class="panel-collapse collapse">
            <div class="panel-body">
              <?php GetDealearsStates('EDO. DE MÉXICO'); ?>
            </div>
          </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" href="#gua">
              GUANAJUATO
              <span class="glyphicon glyphicon-chevron-down pull-right"></span>
            </a>
          </h4>
        </div>
        <div id="gua" class="panel-collapse collapse">
          <div class="panel-body">
            <?php GetDealearsStates('GUANAJUATO'); ?>
          </div>
        </div>
      </div>

       <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" href="#gue">
              GUERRERO
              <span class="glyphicon glyphicon-chevron-down pull-right"></span>
            </a>
          </h4>
        </div>
        <div id="gue" class="panel-collapse collapse">
          <div class="panel-body">
            <?php GetDealearsStates('GUERRERO'); ?>
          </div>
        </div>
      </div> 

      <!-- <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" href="#hid">
              HIDALGO
              <span class="glyphicon glyphicon-chevron-down pull-right"></span>
            </a>
          </h4>
        </div>
        <div id="hid" class="panel-collapse collapse">
          <div class="panel-body">
            <?php GetDealearsStates('HIDALGO'); ?>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#jal">
                JALISCO
                <span class="glyphicon glyphicon-chevron-down pull-right"></span>
              </a>
            </h4>
          </div>
          <div id="jal" class="panel-collapse collapse">
            <div class="panel-body">
              <?php GetDealearsStates('JALISCO'); ?>
            </div>
          </div>
      </div>

      <!-- <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#cdmx">
                CDMX
                <span class="glyphicon glyphicon-chevron-down pull-right"></span>
              </a>
            </h4>
          </div>
          <div id="cdmx" class="panel-collapse collapse">
            <div class="panel-body">
              <?php GetDealearsStates('CDMX'); ?>
            </div>
          </div>
      </div> -->

      <!-- <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#mich">
                MICHOACÁN
                <span class="glyphicon glyphicon-chevron-down pull-right"></span>
              </a>
            </h4>
          </div>
          <div id="mich" class="panel-collapse collapse">
            <div class="panel-body">
              <?php GetDealearsStates('MICHOACÁN'); ?>
            </div>
          </div>
      </div> -->

       <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#mor">
                MORELOS
                <span class="glyphicon glyphicon-chevron-down pull-right"></span>
              </a>
            </h4>
          </div>
          <div id="mor" class="panel-collapse collapse">
            <div class="panel-body">
              <?php GetDealearsStates('MORELOS'); ?>
            </div>
          </div>
      </div> 

      <!-- <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#nay">
                NAYARIT
                <span class="glyphicon glyphicon-chevron-down pull-right"></span>
              </a>
            </h4>
          </div>
          <div id="nay" class="panel-collapse collapse">
            <div class="panel-body">
              <?php GetDealearsStates('NAYARIT'); ?>
            </div>
          </div>
      </div> -->
      
      <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#nln">
                NUEVO LEÓN
                <span class="glyphicon glyphicon-chevron-down pull-right"></span>
              </a>
            </h4>
          </div>
          <div id="nln" class="panel-collapse collapse">
            <div class="panel-body">
              <?php GetDealearsStates('NUEVO LEÓN'); ?>
            </div>
          </div>
      </div>

      <!-- <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#oax">
                OAXACA
                <span class="glyphicon glyphicon-chevron-down pull-right"></span>
              </a>
            </h4>
          </div>
          <div id="oax" class="panel-collapse collapse">
            <div class="panel-body">
              <?php GetDealearsStates('OAXACA'); ?>
            </div>
          </div>
      </div> -->
    
      <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#pue">
                PUEBLA
                <span class="glyphicon glyphicon-chevron-down pull-right"></span>
              </a>
            </h4>
          </div>
          <div id="pue" class="panel-collapse collapse">
            <div class="panel-body">
              <?php GetDealearsStates('PUEBLA'); ?>
            </div>
          </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" href="#qro">
              QUERÉTARO
              <span class="glyphicon glyphicon-chevron-down pull-right"></span>
            </a>
          </h4>
        </div>
        <div id="qro" class="panel-collapse collapse">
          <div class="panel-body">
            <?php GetDealearsStates('QUERÉTARO'); ?>
          </div>
        </div>
      </div>

       <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" href="#qroo">
              QUINTANA ROO
              <span class="glyphicon glyphicon-chevron-down pull-right"></span>
            </a>
          </h4>
        </div>
        <div id="qroo" class="panel-collapse collapse">
          <div class="panel-body">
            <?php GetDealearsStates('QUINTANA ROO'); ?>
          </div>
        </div>
      </div> 

      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" href="#slp">
              SAN LUIS POTOSÍ
              <span class="glyphicon glyphicon-chevron-down pull-right"></span>
            </a>
          </h4>
        </div>
        <div id="slp" class="panel-collapse collapse">
          <div class="panel-body">
            <?php GetDealearsStates('SAN LUIS POTOSÍ'); ?>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#sin">
                SINALOA
                <span class="glyphicon glyphicon-chevron-down pull-right"></span>
              </a>
            </h4>
          </div>
          <div id="sin" class="panel-collapse collapse">
            <div class="panel-body">
              <?php GetDealearsStates('SINALOA'); ?>
            </div>
          </div>
      </div>

      <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#son">
                SONORA
                <span class="glyphicon glyphicon-chevron-down pull-right"></span>
              </a>
            </h4>
          </div>
          <div id="son" class="panel-collapse collapse">
            <div class="panel-body">
              <?php GetDealearsStates('SONORA'); ?>
            </div>
          </div>
      </div>

      <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#tab">
                TABASCO
                <span class="glyphicon glyphicon-chevron-down pull-right"></span>
              </a>
            </h4>
          </div>
          <div id="tab" class="panel-collapse collapse">
            <div class="panel-body">
              <?php GetDealearsStates('TABASCO'); ?>
            </div>
          </div>
      </div> 

      <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#tam">
                TAMAULIPAS
                <span class="glyphicon glyphicon-chevron-down pull-right"></span>
              </a>
            </h4>
          </div>
          <div id="tam" class="panel-collapse collapse">
            <div class="panel-body">
              <?php GetDealearsStates('TAMAULIPAS'); ?>
            </div>
          </div>
      </div>

      <!-- <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#tlax">
                TLAXCALA
                <span class="glyphicon glyphicon-chevron-down pull-right"></span>
              </a>
            </h4>
          </div>
          <div id="tlax" class="panel-collapse collapse">
            <div class="panel-body">
              <?php GetDealearsStates('TLAXCALA'); ?>
            </div>
          </div>
      </div> -->

      <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#ver">
                VERACRUZ
                <span class="glyphicon glyphicon-chevron-down pull-right"></span>
              </a>
            </h4>
          </div>
          <div id="ver" class="panel-collapse collapse">
            <div class="panel-body">
              <?php GetDealearsStates('VERACRUZ'); ?>
            </div>
          </div>
      </div>

      <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#yuc">
                YUCATÁN
                <span class="glyphicon glyphicon-chevron-down pull-right"></span>
              </a>
            </h4>
          </div>
          <div id="yuc" class="panel-collapse collapse">
            <div class="panel-body">
              <?php GetDealearsStates('YUCATÁN'); ?>
            </div>
          </div>
      </div>

      <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#zac">
                ZACATECAS
                <span class="glyphicon glyphicon-chevron-down pull-right"></span>
              </a>
            </h4>
          </div>
          <div id="zac" class="panel-collapse collapse">
            <div class="panel-body">
              <?php GetDealearsStates('ZACATECAS'); ?>
            </div>
          </div>
      </div>

    </div>

  </div>
  <!-- SIDE PANEL NAVIGATION -->
  <?php include 'side_panel.php' ?>
</div>

<?php require '../footer.php' ?>
