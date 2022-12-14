<?php 
  // PAGE VARIABLES
  $PageTitle="¡Gracias!";  
  $CategoryName="soporte";
  $PageDescription="Usa el formulario de contacto para cualquier pregunta.";
  $PageKeywords="contacto, formulario de contacto, contact form, info request, contact us";
  $CategoryColorTheme= "#FFF";

  // IMPORT PAGE HEADER
  require '../header.php';

  // CALL FUNCTION FROM LIBRARY
  ProcessContactForm();
 ?>

<div class="row page-content ">
  <div class="col col-md-9">
  <form action="process-form.php" methond="post">
  <div class="title">¡GRACIAS POR CONTACTARNOS!</div>
  <div class="abstract">Hemos recibido su correo electrónico.</div><br />
  Nos pondremos en contacto con usted a la brevedad. Si desea contactar a un Representante 
  directamente por favor visite <a href="/corporate/authorized-agents.php"><i>Representantes</i></a> 
  y envíe un correo o whatsapp directamente al vendedor de su zona.
</div>
<!-- SIDE PANEL NAVIGATION -->
</div>

<?php require '../footer.php' ?>
