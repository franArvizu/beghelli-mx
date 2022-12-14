  <div class="col col-md-3 hidden-sm">
     <div class="panel panel-primary">
      <div class="panel-heading"><?php echo strtoupper($CategoryName); ?></div>
      <div class="panel-body">
        <UL class="list-unstyled">
          <li><a href="product-literature.php" <?php if(strstr($_SERVER['REQUEST_URI'], 'product-literature.php')) { echo "style=\"color: #009de0;\""; } ?>><span class="glyphicon glyphicon glyphicon-menu-right"></span>&nbsp;Catálogos</a></li>
          <li><a href="success-cases.php" <?php if(strstr($_SERVER['REQUEST_URI'], 'success-cases.php')) { echo "style=\"color: #009de0;\""; } ?>><span class="glyphicon glyphicon glyphicon-menu-right"></span>&nbsp;Casos de Éxito</a></li>
          <li><a href="downloads.php" <?php if(strstr($_SERVER['REQUEST_URI'], 'downloads.php')) { echo "style=\"color: #009de0;\""; } ?>><span class="glyphicon glyphicon glyphicon-menu-right"></span>&nbsp;Información Técnica</a></li>
          <li><a href="certifications.php" <?php if(strstr($_SERVER['REQUEST_URI'], 'certifications.php')) { echo "style=\"color: #009de0;\""; } ?>><span class="glyphicon glyphicon glyphicon-menu-right"></span>&nbsp;Certificaciones</a></li>
        </UL>
      </div>
    </div>

  </div>