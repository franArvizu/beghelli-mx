<?php 
  // PAGE VARIABLES
  $PageTitle="CERTIFICACIONES";
  $CategoryName=utf8_decode("ÁREA TÉCNICA");
  $CategoryNameSidePanel="ÁREA TÉCNICA";
  $PageDescription="CERTIFICACIONES";
  $PageKeywords="CERTIFICACIONES";
  $CategoryColorTheme= "#FFF";

  // IMPORT PAGE HEADER
  require '../header.php';
 ?>

<!-- PAGE CONTENT -->
<div class="row page-content ">
  <div id="certifications" class="col col-md-9">
    <div class="row">
      <div class="col col-md-9">
        <div class="title"><?php echo ucwords(strtolower($PageTitle)); ?></div>
      </div>
    </div>
    <div class="row" style="margin-top:20px">
      <div class="col col-md-3">
        <img src="/_assets/images/certifications/certificaciones-30.jpg" alt="CE" style="width:100%;">
      </div>
      <div class="col col-md-9">
        <p>
          La colocación del marcado CE en un producto obliga al fabricante 
          a cumplir con las normas acordadas dentro del territorio de la Unión Europea con respecto a la 
          seguridad, el rendimiento y el impacto ambiental, así como a garantizar al consumidor que el producto 
          en cuestión cumple con estas normativas. 
        </p>
      </div>
    </div>
    <div class="row" style="margin-top:20px">
      <div class="col col-md-3">
        <img src="/_assets/images/certifications/certificaciones-24.jpg" alt="UL" style="width:100%;">
      </div>
      <div class="col col-md-9">
        <p>
          La marca UL, certificación emitida por Underwriters Laboratories, significa que ha realizado pruebas 
          en el producto y que ha determinado que éste cumple con las normativas vigentes u otros requisitos 
          aplicables con respecto a su potencial riesgo de incendio, descarga eléctrica y peligros mecánicos. 
          La Marca UL en un producto representa la conformidad del fabricante con la normativa vigente de forma 
          continuada. 
        </p>
      </div>
    </div>
    <div class="row" style="margin-top:20px">
      <div class="col col-md-3">
        <img src="/_assets/images/certifications/certificaciones-09.jpg" alt="NOM" style="width:100%">
      </div>
      <div class="col col-md-9">
        <p>
          NOM (Norma Oficial Mexicana) es el símbolo que le permite al consumidor constatar que los productos cumplan 
          con las normas oficiales de nuestro país que le aplican. Éste se obtiene por medio de la evaluación de conformidad
           efectuada por el Organismo de Certificación. Para ello, se toma como base la información técnica de los productos 
           así como los resultados de las pruebas realizadas en laboratorios acreditados y aprobados conforme a la Ley Federal 
           sobre Metrología y Normalización.
        </p>
      </div>
    </div>
    <div class="row" style="margin-top:20px">
      <div class="col col-md-3">
        <img src="/_assets/images/certifications/certificaciones-37.jpg" alt="DLC" style="width:100%">
      </div>
      <div class="col col-md-9">
        <p>
          DLC (DesignLights Consortium) es una certificación específica para la industria de la iluminación y si un 
          producto de iluminación ha obtenido la certificación de esa organización, indica un alto nivel de eficiencia 
          energética.
        </p>
      </div>
    </div>
    <div class="row" style="margin-top:20px">
      <div class="col col-md-3">
        <img src="/_assets/images/certifications/certificaciones-05.jpg" alt="ETL" style="width:100%">
      </div>
      <div class="col col-md-9">
        <p>
          ETL (Electrical Testing Laboratories) es una organización independiente privada que lleva activa más de 100 años 
          en el ámbito de las mediciones. La marca ETL Listed indica que el producto ha sido probado por un laboratorio de 
          tercera parte acreditado como Intertek con arreglo a las normas de producto aplicables (estándar ANSI, estándar UL, 
          estándares CSA, ASTM, NFPA) y a los requisitos mínimos de seguridad para poder venderse y distribuirse en el 
          territorio norteamericano.
        </p>
      </div>
    </div>
    <div class="row" style="margin-top:20px">
      <div class="col col-md-3">
        <img src="/_assets/images/certifications/certificaciones-31.jpg" alt="CSA" style="width:100%">
      </div>
      <div class="col col-md-9">
        <p>
          CSA International (Canadian Standards Association), es un proveedor de servicios de certificación y prueba 
          de productos para electricidad, mecánica, entre otros productos. Las marcas de certificación internacional de CSA 
          indican que un producto, proceso o servicio se ha probado según un estándar canadiense o estadounidense y cumple con 
          los requisitos de un estándar CSA aplicable u otro documento reconocido utilizado como base para la certificación.
        </p>
      </div>
    </div>
    <br>
  </div>
  <!-- SIDE PANEL NAVIGATION -->
  <?php include 'side_panel.php' ?>
</div>

<?php require '../footer.php' ?>
