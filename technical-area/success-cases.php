<?php 
  // PAGE VARIABLES
  $PageTitle="Casos de Éxito";
  $CategoryName="ÁREA TÉCNICA";
  $CategoryNameSidePanel="ÁREA TÉCNICA";
  $PageDescription="CASOS DE ÉXITO";
  $PageKeywords="CASOS DE ÉXITO";
  $CategoryColorTheme= "#FFF";
  $linkCover = "/_assets/uploads/covers/casos_de_exito.jpg";

  // IMPORT PAGE HEADER
  require '../header.php';
 ?>

<!-- PAGE CONTENT -->
<div id="cases" class="row page-content">
  <div class="col col-md-9">
    <div class="title"><?php echo ($PageTitle); ?></div>
    
    <?php GetSuccessStories(); ?>

    <br />
  </div>
  <!-- SIDE PANEL NAVIGATION -->
  <?php include 'side_panel.php' ?>
</div>

<?php require '../footer.php' ?>
