  <div class="col col-md-3 hidden-sm">
     <div class="panel panel-primary">
      <div class="panel-heading"><?php echo strtoupper($CategoryName); ?></div>
      <div class="panel-body">
        <ul class="list-unstyled">
          <li><a href="faq.php" <?php if(strstr($_SERVER['REQUEST_URI'], 'faq.php')) { echo "style=\"color: #009de0;\""; } ?>><span class="glyphicon glyphicon glyphicon-menu-right"></span>&nbsp;Preguntas Frecuentes</a></li>
          <li><a href="legal_info.php" <?php if(strstr($_SERVER['REQUEST_URI'], 'legal_info.php')) { echo "style=\"color: #009de0;\""; } ?>><span class="glyphicon glyphicon glyphicon-menu-right"></span>&nbsp;Políticas de Privacidad</a></li>
        </ul>
      </div>
    </div>
  </div>