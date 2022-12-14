  <div class="col col-md-3 hidden-sm">
     <div class="panel panel-primary">
      <div class="panel-heading"><?php echo strtoupper($CategoryName); ?></div>
      <div class="panel-body">
        <UL class="list-unstyled">
          <li><a href="beghelli-group.php" <?php if(strstr($_SERVER['REQUEST_URI'], 'beghelli-group.php')) { echo "style=\"color: #009de0;\""; } ?>><span class="glyphicon glyphicon glyphicon-menu-right"></span>&nbsp;Quiénes Somos</a></li>
          <li><a href="authorized-agents.php" <?php if(strstr($_SERVER['REQUEST_URI'], 'authorized-agents.php')) { echo "style=\"color: #009de0;\""; } ?>><span class="glyphicon glyphicon glyphicon-menu-right"></span>&nbsp;Representantes de Ventas</a></li>
          <li><a href="investor-relations.php" <?php if(strstr($_SERVER['REQUEST_URI'], 'investor-relations.php')) { echo "style=\"color: #009de0;\""; } ?>><span class="glyphicon glyphicon glyphicon-menu-right"></span>&nbsp;Distribuidores</a></li>
          <li><a href="partnerships.php" <?php if(strstr($_SERVER['REQUEST_URI'], 'partnerships.php')) { echo "style=\"color: #009de0;\""; } ?>><span class="glyphicon glyphicon glyphicon-menu-right"></span>&nbsp;Asociaciones</a></li>
        </UL>
      </div>
    </div>
  </div>