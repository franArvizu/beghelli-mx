<?php 
  // PAGE VARIABLES
  $PageTitle="Información Técnica";
  $CategoryName="ÁREA TÉCNICA";
  $PageDescription="Información Técnica";
  $PageKeywords="Información Técnica";
  $CategoryColorTheme= "#FFF";

  // IMPORT PAGE HEADER
  require '../header.php';
 ?>

<!-- PAGE CONTENT -->
<div class="row page-content">
  <div class="col col-md-9" style="margin-bottom:100px">
    <div class="title"><?php echo ucwords(strtolower($PageTitle)); ?></div>
    <div class="abstract">CLASIFICACIONES</div>
    <ul>
      <li style="margin-top:20px">
        <div style="font-size:16px">
          <a href="/_assets/downloads/technical_info/Clasificacion_CuartosLimpios.pdf" target="_blank">
            Clasificación de Cuartos Limpios
          </a>
        </div>
      </li>
      <li style="margin-top:20px">
        <div style="font-size:16px">
          <a href="/_assets/downloads/technical_info/Codigo_IK.pdf" target="_blank">
            Tabla de Código IK
          </a>
        </div>
        <div style="font-size:16px"></div>
      </li>
      <li style="margin-top:20px">
        <div style="font-size:16px">
          <a href="/_assets/downloads/technical_info/Proteccion_IP.pdf" target="_blank">
            Tabla de Grado de Protección IP
          </a>
        </div>
      </li>
      <li style="margin-top:20px">
        <div style="font-size:16px">
          <a href="/_assets/downloads/technical_info/AgentesCorrosivos.pdf" target="_blank">
            Tabla de Agentes Corrosivos
          </a>
        </div>
      </li>
      <li style="margin-top:20px">
        <div style="font-size:16px">
          <a href="/_assets/downloads/technical_info/Resistencia_Policarbonato.pdf" target="_blank">
            Resistencia al Acrílico 
          </a>
        </div>
      </li>
      <li style="margin-top:20px">
        <div style="font-size:16px">
          <a href="/_assets/downloads/technical_info/CuestionarioDeAplicacionesLUCE_SOLARE.pdf" target="_blank">
            Cuestionario de aplicaciones LUCE SOLARE
          </a>
        </div>
      </li>
      <li style="margin-top:20px">
        <div style="font-size:16px">
          <a href="/_assets/downloads/technical_info/RecomendacionesLUCE_SOLARE.pdf" target="_blank">
            Recomendaciones de luminarios LUCE SOLARE
          </a>
        </div>
      </li>
		      <li style="margin-top:20px">
        <div style="font-size:16px">
          <a href="https://beghelli.com.mx/_assets/uploads/products/fotometrias/" target="_blank">
            Fotometrías del catálogo completo
          </a>
        </div>
      </li>
	
    </ul>
  </div>
  <!-- SIDE PANEL NAVIGATION -->
  <?php include 'side_panel.php' ?>
</div>

<?php require '../footer.php' ?>
