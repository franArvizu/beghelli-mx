<?php 
  // PAGE VARIABLES
  $PageTitle="Catálogos México";
  $CategoryName="ÁREA TÉCNICA";
  $PageDescription="Literatura de productos Beghelli para México";
  $PageKeywords="beghelli, fichas técnicas, productos, lampras, iluminación, emergencia, luce solare, logica, sanificaaria, PlanetSun";
  $CategoryColorTheme= "#FFF";

  // IMPORT PAGE HEADER
  require '../header.php';
 ?>

<!-- PAGE CONTENT -->
<div class="row page-content ">
  <div class="col col-md-9">
  <div class="title">Catálogos México</div>
  <br />
  <article class="main-content">
            <header>
            <div class="abstract">Catálogo de Productos</div>
        </header>
        <section>
            <table width="689" border="0" summary="Lista técnica descargable de Beghelli México" class="table">
                <caption>&nbsp;</caption>
                <tr>
                    <th width="10%" scope="col"><div align="center">Portada</div></th>
                    <th width="27%" scope="col"><div align="center"> Nombre</div></th>
                    <th width="53%" scope="col"><div align="center">Descripción</div></th>
                    <th width="10%" scope="col"><div align="center">Descargar</div></th>
                </tr>  

    <div class="row" style="margin-top:0px">
      
      <?php GetCatalogsEEUU('catalogo'); ?>
    </div>

            </table>
        </section>
        <br />
        <header>
            <div class="abstract">Brochures</div>
        </header>
           <section>
            <table width="689" border="0" summary="Lista técnica descargable de Beghelli México" class="table">
                <caption>&nbsp;</caption>
                <tr>
                    <th width="10%" scope="col"><div align="center">Portada</div></th>
                    <th width="27%" scope="col"><div align="center"> Nombre</div></th>
                    <th width="53%" scope="col"><div align="center">Descripción</div></th>
                    <th width="10%" scope="col"><div align="center">Descargar</div></th>
                </tr>  

    <div class="row" style="margin-top:0px">
      
      <?php GetCatalogsEEUU('brochures'); ?>
    </div>

            </table>
        </section>
        <br />


		<header>
            <div class="abstract">Brochures de Producto</div>
        </header>
           <section>
            <table width="689" border="0" summary="Lista técnica descargable de Beghelli México" class="table">
                <caption>&nbsp;</caption>
                <tr>
                    <th width="10%" scope="col"><div align="center">Portada</div></th>
                    <th width="27%" scope="col"><div align="center"> Nombre</div></th>
                    <th width="53%" scope="col"><div align="center">Descripción</div></th>
                    <th width="10%" scope="col"><div align="center">Descargar</div></th>
                </tr>  

    <div class="row" style="margin-top:0px">
      
      <?php GetCatalogsEEUU('brochuresProductos'); ?>
    </div>

            </table>
        </section>
		<br>


	<header>
            <div class="abstract">Guía rápida de Aplicaciones</div>
        </header>
           <section>
            <table width="689" border="0" summary="Lista técnica descargable de Beghelli México" class="table">
                <caption>&nbsp;</caption>
                <tr>
                    <th width="10%" scope="col"><div align="center">Portada</div></th>
                    <th width="27%" scope="col"><div align="center"> Nombre</div></th>
                    <th width="53%" scope="col"><div align="center">Descripción</div></th>
                    <th width="10%" scope="col"><div align="center">Descargar</div></th>
                </tr>  

    <div class="row" style="margin-top:0px">
      
      <?php GetCatalogsEEUU('guiaRapida'); ?>
    </div>

            </table>
        </section>
		<br>
		
<header>
            <div class="abstract">Brochure por Aplicaciones</div>
        </header>
           <section>
            <table width="689" border="0" summary="Lista técnica descargable de Beghelli México" class="table">
                <caption>&nbsp;</caption>
                <tr>
                    <th width="10%" scope="col"><div align="center">Portada</div></th>
                    <th width="27%" scope="col"><div align="center"> Nombre</div></th>
                    <th width="53%" scope="col"><div align="center">Descripción</div></th>
                    <th width="10%" scope="col"><div align="center">Descargar</div></th>
                </tr>  

    <div class="row" style="margin-top:0px">
      
      <?php GetCatalogsEEUU('brochuresAplicaciones'); ?>
    </div>

            </table>
        </section>
		<br>		

		<header>
            <div class="abstract">Presentaciones</div>
        </header>
           <section>
            <table width="689" border="0" summary="Lista técnica descargable de Beghelli México" class="table">
                <caption>&nbsp;</caption>
                <tr>
                    <th width="10%" scope="col"><div align="center">Portada</div></th>
                    <th width="27%" scope="col"><div align="center"> Nombre</div></th>
                    <th width="53%" scope="col"><div align="center">Descripción</div></th>
                    <th width="10%" scope="col"><div align="center">Descargar</div></th>
                </tr>  

    <div class="row" style="margin-top:0px">
      
      <?php GetCatalogsEEUU('presentaciones'); ?>
    </div>

            </table>
        </section>
		
		
    </article><br />
  </div>
  <!-- SIDE PANEL NAVIGATION -->
  <?php include 'side_panel.php' ?>
</div>

<?php require '../footer.php' ?>
