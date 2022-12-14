<?php 
  // PAGE VARIABLES
  $PageTitle="";
  $CategoryName="CONTACTO";
  $PageDescription="Usa el formulario de contacto para cualquier pregunta.";
  $PageKeywords="Formulario de contacto, Pedir información, Contáctanos";
  $CategoryColorTheme= "#FFF";
  
  // IMPORT PAGE HEADER
  require '../header.php'
 ?>


<!-- PAGE CONTENT -->
<div class="row page-content ">
  <div class="col col-md-9">
  <form action="thank_you.php" method="post">
  <div class="title">Contacto</div>
  <div class="abstract">Contacta al departamento de servicio a cliente de Beghelli en el siguiente número de teléfono:  <a href="tel:+525543486687">5543486687</a></div>
  <br />  
      <div class="row">      
      
        <div class="col-sm-6 form-group">
          
          <input class="form-control" id="name" name="name" placeholder="Nombre*" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="surname" name="surname" placeholder="Compañía" type="text" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="telephone" name="telephone" placeholder="Teléfono" type="number"  pattern="\d*"/ required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Correo Electrónico*" type="email" required>
        </div>
        <div class="col-sm-12 form-group">
          <input class="form-control" id="state" name="state" placeholder="Estado*" type="text" required>
        </div>
      </div>
      <textarea class="form-control" id="message" name="message" placeholder="Mensaje*" rows="5"></textarea><br>
      <center>
        <strong>*Campos requeridos. Al enviarnos un mensaje usted está aceptando los términos de <a href="/support/legal_info.php">Política y Privacidad</a>.</strong>
      </center>
      <div class="row">
        <div class="g-recaptcha col-sm-12  form-group" data-sitekey="<?php ProcessDivisionKey('GoogleRecaptcha') ?>"  data-callback="recaptchaCallback"></div><br />
        <div class="col-sm-12 form-group">
          <center>
          <button class="btn btn-primary" type="submit"  id="btnSubmit">Enviar Correo</button>

          </center>
        </div>
      </div> 
      <hr>
      <input type="hidden" name="form-type" value="contact">
      <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
      
    </form> 
    <div class="row">
      <div class="col-sm-12">
        <h2 class="abstract">BEGHELLI MÉXICO</h2>
        <p style="font-weight:900;margin-bottom:0">Planta Querétaro</p style="font-weight:900">
        <p style="margin-bottom:2px">
        Av. El Marqués No. 70 Int.4. Parque Industrial Bernardo Quintana
        CP.76246 El Marqués, Qro
        </p>
        <p style="margin-bottom:2px">
        Tel: (442) 221.62.15 / 221.64.39</p>
        <p style="margin-bottom:2px">
        Atención a clientes: 044.55.4348.6687 </p>
      </div>
      <br>
    </div>
    <hr>
    <!-- <div class="row">
      <div class="col-sm-4" >
        <center>
          <img src="/_assets/images/cotiza.jpg" style=" max-width: 500px;" alt="">
        </center>
      </div>
    </div> -->
    <hr>
    <div class="row">
      <div class="col-sm-12">
        <h2 class="abstract" style="margin-bottom:0">BEGHELLI AMÉRICA LATINA (EXCEPTO MÉXICO)</h2>
        <p style="">Para el resto de los países en Latinoamérica <strong>(excepto México)</strong>por favor comuníquese con:</p>
        <p style="margin-bottom:2px">Pedro González</p>
        <p style="margin-bottom:2px;font-weight:900">Latin America Regional Manager </p>
        <a href="mailto:pedro.gonzalez@beghellinorthamerica.com?Subject=Hola%20Buen%20">pedro.gonzalez@beghellinorthamerica.com</a>
        <p>Tel. 001-954-442-6600 ext. 207   Cel. 001-954-552-8969 </p>
      </div>
    </div>
    <hr>
    <p>
    <span class="glyphicon glyphicon-map-marker"></span> 
      Av. El Marqués No. 70 Int.4. Parque Industrial Bernardo Quintana
	  CP.76246 El Marqués, Qro
    </p>
    <!-- Add Google Maps -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.629761769512!2d-100.28417734969082!3d20.56232408618538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d34292c894b9d9%3A0x9b0b411da6a69069!2sBeghelli+De+M%C3%A9xico%2C+S.A.+De+C.V.!5e0!3m2!1ses-419!2sus!4v1556142048301!5m2!1ses-419!2sus" frameborder="0" style="height:400px;width:100%;" allowfullscreen></iframe>
    <!-- <div id="googleMap"  style="height:400px;width:100%;"></div>  -->
  </div>
  
</div>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfym9hbPcSZiOPsGq0IazaRL4sMYSGrog&callback=initMap"></script>
<!-- GOOGLE MAP -->
<script>
// function initMap() {
//   //20.5917273,-100.3744095
//   var myCenter = new google.maps.LatLng({lat:20.562625,lng:-100.281983});
//   var mapProp = {center:myCenter, zoom:15, scrollwheel:true, draggable:true, mapTypeId:google.maps.MapTypeId.ROADMAP};
//   var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
//   var marker = new google.maps.Marker({position:myCenter});
//   marker.setMap(map);
// }


// function recaptchaCallback() {
//   var btnSubmit = document.getElementById("btnSubmit");
//   if ( btnSubmit.classList.contains("hidden") ) {
//       btnSubmit.classList.remove("hidden");
//       btnSubmitclassList.add("show");
//   }
// }
</script>
<?php require '../footer.php' ?>
