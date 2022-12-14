<!-- END PAGE CONTENTS -->
  </div></div></div>
</div>
<!-- PAGE FOOTER -->
<footer class="container-fluid ">
  <div class="row app-width" style="padding: 5px;">
    <div class="col col-md-7">
  
  	&copy; Beghelli México - Av. del Marqués No. 70 Int. 4 Parque Industrial Bernardo Quintana, El Marqués, Qro. 
    <br />
    <ul class="list-inline ">
  	<li><a href="<?php echo $DocRoot ?>/contact/info_rq.php" class="footer-link">Contacto</a>
    <li>|</li>
    <li><a href="<?php echo $DocRoot ?>/support/legal_info.php" class="footer-link">Políticas de Privacidad</a>
    
    <!-- <li>|</li> <li><a href="<?php echo $DocRoot ?>/" class="footer-link">Privacy Policy</a> -->
    <li>|</li>
    <li><a href="<?php echo $DocRoot ?>/support/faq.php" class="footer-link">Preguntas Frecuentes</a>
    <li>|</li>
    <li>
    <a href="/representant-catalog/login.php" class="footer-link" target="_blank">
      <i class="icon social fa fa-lg fa-lock" style="color:white!important"></i>&nbsp; Soy Representante</span>
    </a>
    </li>
    </ul>
    </div>
  	<div class="col col-md-5 ">
      <div class="pull-right">
        <div class="phone fl-r cf">
          <a href="tel:18007264316" class="no-uline">
            <div class="title-number fl-l">
                <div class="title">Número de Teléfono</div>
                <a href="tel:+524422216215">
                  <div class="number">(442) 221 62 15 <span class="icon fa fa-phone-square "></span></div>
                </a>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>  
</footer>

<!-- NewsletterModal -->
  <div class="modal fade" id="newsletterModal" role="dialog">
    <div class="modal-dialog ">
      <div class="modal-content">
        
        <!-- Begin Constant Contact Inline Form Code -->
        <div class="ctct-inline-form" data-form-id="0d62897e-9a45-4a82-ab20-ab0e90ad8bd4"></div>
        <!-- End Constant Contact Inline Form Code -->

      </div>
    </div>
  </div>
<script type="text/javascript">
 
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});
</script>

<!-- Begin Constant Contact Active Forms -->
<script> var _ctct_m = "7276ec874b58874f0a7c15bdeb532974"; </script>
<script id="signupScript" src="//static.ctctcdn.com/js/signup-form-widget/current/signup-form-widget.min.js" async defer></script>
<!-- End Constant Contact Active Forms -->
</body>
</html>
<?php mysqli_close($dbConn); ?>