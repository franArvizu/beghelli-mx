<?php
	#####################################################
	####  GLOBAL FUNCTIONS USED THROUGHOUT THE SITE ####
	#####################################################

	// DATABASE CONNECTION INFORMATION
	require 'dbconn.php';
	session_start();

	// GET DOCUMENT ROOT
	if($_SERVER['HTTP_HOST'] == 'beghelli.com.mx'){
		// LINE BELOW ON PRODUCTION SERVER
		$DocRoot = 'https://beghelli.com.mx';
	}
	else if($_SERVER['HTTP_HOST'] == 'beghelli.ochenta.com.mx') {
		// LINE BELOW ON STAGING SERVER
		$DocRoot = 'https://beghelli.ochenta.com.mx';
	}
    else {
		// LINE BELOW ONLY FOR DEV. SITE
		$DocRoot = 'http://localhost:8000';
	}

	// SET DEFAULT FACEBOOK PAGE SHARE GRAPHIC
	$PageShareGraph = $PageShareGraph ?: '/_assets/images/logo.svg';

	// HARD CODE BACKGROUND COLOR OF ACTIVE NAV BUTTON (DONE TO FIX CSS BUG WHEN USING ACTIVE CLASS)
	function checkActiveTab($tabname) { 
		return (strstr($_SERVER['REQUEST_URI'], $tabname))?'#008bc7':'#009de0'; 
	}

	// GENERATE CATEGORY MENU FOR MAIN NAVIGATION
	function SetCategoriesMenu($CatLine){
		global $dbConn, $DocRoot;
		// SANITIZE USER INPUT
		$sqlSafe_CatLine = mysqli_real_escape_string($dbConn, $CatLine);
		$sql = "SELECT * FROM categories WHERE catLine = '$sqlSafe_CatLine' ORDER BY catPriority ASC ";
		$result = $dbConn->query($sql);

			while($row = $result->fetch_assoc()):
					echo '<li><a href="'.$DocRoot.'/products.php?line='.$row["catLine"].'&cat='.$row['catName'].'" style="margin-left:27px"><span class="glyphicon glyphicon glyphicon-menu-right"></span>&nbsp; '.$row['catName'].'</a></li>';
			endwhile;
	}

	// CREATE CATEGORY LIST FOR PRODUCTS PAGE CATEGORY FILTER
	function GetCategoriesFilter($CatLine) {
		global $dbConn;
		$sqlSafe_CatLine = mysqli_real_escape_string($dbConn, $CatLine);
		$sql = "SELECT * FROM categories WHERE catLine = '$sqlSafe_CatLine' ORDER BY catPriority ASC ";
		$result = $dbConn->query($sql);

			while($row = $result->fetch_assoc()):
					echo '<li><a href="';
					echo (strpos($_SERVER['REQUEST_URI'], '?'))?RemoveCatFilter($_SERVER['REQUEST_URI'], 'cat').'&':$_SERVER['REQUEST_URI'].'?';
					echo 'cat='.$row["catName"]. '">'.$row["catName"].'</a></li>';
			endwhile;
	}

	// GET IMAGES FOR THE HOME SLIDER
	function GetSliders() {
		global $dbConn;

		$sql = "SELECT * FROM sliders";
		$result = $dbConn->query($sql);
		$aux = 1; 
		while($row = $result->fetch_assoc()):
			$name = $row['name'];
			$link = $row['link'];
			$class= "item";
			if ($aux == 1) {
				$class= "item active";
			}
			echo '
				<div class="'.$class.'">
					<a href="'.$link.'">
					<img src="/_assets/uploads/sliders/'.$name.'">
					</a>
				</div>
			';
			$aux++;
		endwhile;
	}

	// 	GET COUNT FOR THE SLIDER INDICATORS
	function GetSlidersCount(){
		global $dbConn;

		$sql = "SELECT * FROM sliders";
		$result = $dbConn->query($sql);
		$aux = 0; 
		while($row = $result->fetch_assoc()):
			if ($aux == 0) {
				echo '
					<li data-target="#ShowcaseCarousel" data-slide-to="0" class="active">
						<span>
							'.$row['title'].'
						</span> 
					</li>
				';
			}
			else {
				echo '
					<li data-target="#ShowcaseCarousel" data-slide-to="'.$aux.'">
						<span>
							'.$row['title'].'
						</span> 
					</li>
				';
			}
			$aux++;
		endwhile;
		
	}

	// LOAD ALL THE ARTICLES ON THE BLOG
	function GetArticles() {
		global $dbConn;

		$sql = "SELECT * FROM articles";
		$result = $dbConn->query($sql);

			while($row = $result->fetch_assoc()):
				if($row['tipo'] == 'archivo'){
					echo '
						<div class="row">
							<div class="col-sm-4 text-center border-hover-box">
								<a href="/_assets/uploads/articles/'.$row['link'].'" target="_blank">
									<img src="/_assets/uploads/articles/'. $row['articleImage'] .'" class="img-responsive" style="width:100%">
									<span></span>
								</a>
							</div>
							<div class="col-md-8">
								<h2 class="article-title">' . $row['articleTitle'] . '</h2>
								<p class="article-text">'. $row['articleText'] .'</p>
							</div>
						</div>
						<hr class="separator">
					';
				}
				else{
					echo '
						<div class="row">
							<div class="col-sm-4 text-center border-hover-box">
								<a href="'.$row['link'].'">
									<img src="/_assets/uploads/articles/'. $row['articleImage'] .'" class="img-responsive" style="width:100%">
									<span></span>
								</a>
							</div>
							<div class="col-md-8">
								<h2 class="article-title">' . $row['articleTitle'] . '</h2>
								<p class="article-text">'. $row['articleText'] .'</p>
							</div>
						</div>
						<hr class="separator">
					';

				}
			endwhile;
	}

	// LOAD THE PUBLICITY BANNERS FOR HOME PAGE
	function GetBanners() {
		global $dbConn;

		$sql = "SELECT * FROM banners ORDER BY priority";
		$result = $dbConn->query($sql);

			while($row = $result->fetch_assoc()):
				echo '
					<div class="col-sm-4 text-center border-hover-box" style="margin-bottom:10px;padding-right:5px; padding-left:5px">
						<a href="'.$row['link'].'">
							<img src="/_assets/uploads/banners/'. $row['name'] .'" class="img-responsive"  alt="Image">
							<span ></span>
						</a>
					</div>
				';
			endwhile;
	}

	// GET STATES FOR THE DEALERS PAGE
	function GetDealearsStates($state) {
		global $dbConn;

		$stateUtf = $state;
		$sql = "SELECT * FROM suppliers WHERE state = '$stateUtf'  ORDER BY name";
		$result = $dbConn->query($sql);

		while($row = $result->fetch_assoc()):
			$supplier = $row['id'];
			$name = $row['name'];
			echo '<div class="row" style="margin-bottom: 30px">';
			echo '
				<a href="'.$row['link'].'" style="padding: 0 15px; margin-bottom:5px" target="_blank">
					<img src="/_assets/uploads/suppliers/'.$row['logo'].'" alt="" style="max-width:250px">
				</a>
				<div class="row" style="padding: 0 15px">
				';
			GetOffices($supplier,$name);
			echo '</div>';
			echo '</div>';
		endwhile;
	}

	// GET OFFICES FOR EACH DEALERfunction GetSuccessStoriesImg($supplier) {
	function GetOffices($supplier,$name) {
		global $dbConn;

		$sql = "SELECT * FROM supplier_offices WHERE id_supplier = '$supplier'";
		$result = $dbConn->query($sql);

			while($row = $result->fetch_assoc()):
				echo '
					<div class="col col-md-4" style="margin-bottom:30px">
						<h4>'.$name.'</h4>
						<p class="office-name">'.$row['office_name'].'</p>
						<p class="address">'.$row['address'].'</p>
						<a href="tel:'.$row['phone'].'" class="phone"> T.:'.$row['phone'].'</a>
						<p class="person-name">'.$row['person_name'].'</p>
						<a href="mailto:'.$row['email'].'?Subject=Hola!" class="mail">'.$row['email'].'</a>
						<br />
				';
				if ($row['celphone'] != '#') {
					echo '<a href="tel:'.$row['celphone'].'" class="celphone"> C.:'.$row['celphone'].'</a>';
				}
				echo '</div>';
			endwhile;
	}

	// LOAD THE SUCCESS STORIES FROM DB FOR SUCESS CASES PAGE
	function GetSuccessStories() {
		global $dbConn;

		$sql = "SELECT * FROM cases";
		$result = $dbConn->query($sql);

		while($row = $result->fetch_assoc()):
			$project = $row['id'];
			echo '<div class="row" style="margin-bottom: 30px">';
			echo '
				<div class="col-md-12 abstract" style="margin-bottom:10px">'.$row['name'].'</div>
			';
			GetSuccessStoriesImg($project);
			echo '</div>';
		endwhile;
	}

	// LOAD THE SUCCESS STORIES FROM DB FOR SUCESS CASES PAGE
	function GetSuccessStoriesImg($project) {
		global $dbConn;

		$sql = "SELECT * FROM cases_img WHERE id_case = '$project'";
		$result = $dbConn->query($sql);

			while($row = $result->fetch_assoc()):
				$foto = $row['name'];
				$fotogrande = str_replace('_mini','',$foto);
				$titulo = $row['title'];
				$subtitulo = $row['subtitle'];
				echo '
					<div class="col-md-3" style="margin-bottom: 15px">
						<a href="/_assets/uploads/cases/'.$fotogrande.'" alt="'.$row['name'].'" data-toggle="lightbox" data-gallery="gallery-'.$project.'">
							<img src="/_assets/uploads/cases/'.$foto.'" alt="'.$row['name'].'" class="img-fluid" style="width:100%" >
						</a>
						<div style="background-color:#f1f1f1; padding: 5px 8px; height:75px">
							<h6>'.$titulo.'</h6>
							<h6>'.$subtitulo.'</h6>
						</div>
					</div>
				';
			endwhile;
	}

/* BUSQUEDA PARA META DATOS  3 NOV 2020*/
		function getMetaDatos($ProductName){
		global $dbConn;
		/*echo "Pdto:".$ProductName;
		echo "<br>Campo:".$Campo;
		echo "<br>Tabla:".$Tabla;
		exit;*/
		$sql = "SELECT * FROM products_description WHERE product_name = '$ProductName'";
		$result = $dbConn->query($sql);

		while($row = $result->fetch_assoc()):
			$product = $row;
		endwhile;
		return $product;
	}

// CATÁLOGOS EN FORMATO A EEUU 30OCT 2020
	function GetCatalogsEEUU($category) {
		global $dbConn;

		$sql = "SELECT * FROM catalogs WHERE category = '$category'";
		$result = $dbConn->query($sql);
		//echo "renglones=".mysqli_num_rows($result);
		//exit;

			while($row = $result->fetch_assoc()):
				$image = $row['image'];
				$title = $row['title'];
				$file_name = $row['file_name'];
				$description = $row['description'];
				echo '
				<tr>
                    <td><div align="center"><img src="/_assets/uploads/catalogs/'.$image.'" alt="'.$title.'" width="56" height="72" /></div></td>
                    <td><div align="center">'.$title.'</div></td>
                    <td><div align="center">'.$description.'</div></td>
                    <td>
						<div class="resources-item">
							<a href="https://www.'.$_SERVER['SERVER_NAME'].'/_assets/uploads/catalogs/'.$file_name.'" target="_blank"  class="btn btn-primary btn-block" >Ver y Descargar</a>
						</div>
                     </td>
                </tr>
				';
				//_assets/uploads/catalogs/'.$file_name.' 
				//<button class="btn btn-primary btn-block" onclick="location.href=beghelli.com.mx/assets/uploads/catalogs/'.$file_name.' ">Descargar</button>
						
			endwhile;
	}

	// LOAD CATALOGS FOR THE DIFFERENT CATEGORIES
	function GetCatalogs($category) {
		global $dbConn;

		$sql = "SELECT * FROM catalogs WHERE category = '$category'";
		$result = $dbConn->query($sql);

			while($row = $result->fetch_assoc()):
				$image = $row['image'];
				$title = $row['title'];
				$file_name = $row['file_name'];
				echo '
					<div class="col-xs-6 col-sm-2 col-md-3" style="margin-bottom:20px">
						<a href="/_assets/uploads/catalogs/'.$file_name.'" target="_blank">
							<img src="/_assets/uploads/catalogs/'.$image.'" style="width:100%">
						</a>
						<div style="background-color:#f1f1f1;min-height:30px;padding:10px">'.$title.'</div>
					</div>
				';
			endwhile;
	}

	// REDIRECTION GOOGLE SEARCH
	function redirectionSuccess(){
			echo "Función";
			Redirect('https://www.google.com/', false);
			exit();
	}

	// FILTER PRODUCTS ON PRODUCT PAGE
	function GetProducts($CatLine,$searchTerm=null){
		global $dbConn, $DocRoot;
		// SANITIZE USER INPUT
		$CatLineMy = mysqli_real_escape_string($dbConn, $CatLine);
		$sql = "SELECT * FROM products LEFT JOIN categories ON products.productCat LIKE categories.catName WHERE categories.catLine = '$CatLine' AND products.active = 1 ";
		
		$prevID = array();
		// APPLY FILTERS   
		if ($_GET['cat']!==null):
			// SANITIZE USER INPUT
			$cat = $_GET['cat'];
			$CatName = mysqli_real_escape_string($dbConn, $cat);
			// APPEND TO QUERY
			$sql .= " AND productCat LIKE '%$CatName%' ";
		endif;
		if ($_GET['ver']!==null):
			// SANITIZE USER INPUT
			$Version = mysqli_real_escape_string($dbConn, $_GET['ver']);
			// APPEND TO QUERY
			$sql .= " AND version LIKE '%$Version%' ";
		endif;	
		if ($_GET['inst']!==null):
			// SANITIZE USER INPUT
			$Installation = mysqli_real_escape_string($dbConn, $_GET['inst']);
			// APPEND TO QUERY
			$sql .= " AND installation LIKE '%$Installation%' ";
		endif;
		if ($_GET['grade']!==null):
			// SANITIZE USER INPUT
			$Grade = mysqli_real_escape_string($dbConn, $_GET['grade']);
			// APPEND TO QUERY
			$sql .= " AND grade LIKE '%$Grade%' ";
		endif;


		// QUERY FOR PRODUCTS SEARCH (OVERWRITES PREVIOUS QUERY)
		if($searchTerm!=null):
			// SANITIZE USER INPUT
			$searchTerm = mysqli_real_escape_string($dbConn, $_GET['search']);
			$sql = "SELECT * FROM products LEFT JOIN categories ON products.productCat LIKE CONCAT('%', categories.catName , '%') WHERE productName  LIKE '%{$searchTerm}%' AND products.active = 1 ";
		endif;

		// FINISH UP SQL QUERY AND ORDER BY NAME
		$sql .= "ORDER BY products.productName ASC ";
		// OR PRIORITY
		// $sql .= "ORDER BY categories.catPriority, products.prioridad ASC ";

		$result = $dbConn->query($sql);
		if ($result->num_rows > 0):
			while($row = $result->fetch_assoc()):
				$lineFolder = strtolower($row['catLine']);
				// MAKE SURE WE DO NOT DUPLICATE ANY RESULTS FOR PRODUCTS THAT HAVE MORE THAN ONE CATEGORY
				if(!in_array($row['productID'], $prevID)):
					$imagenes = explode(",", $row['imagenes']);

					if ($row["productName"] == "LOGICA-CONFIG") {
						echo '
							<a href="/_assets/uploads/software/LogicaConfigBETA_Setup.exe" target="_blank">
								<div class="panel panel-default column">      
									<div class="panel-body" >
										<img src="'.$DocRoot.'/_assets/uploads/products/imagenes/'.strtolower($imagenes[0]).'" class="img-responsive cursor" alt="'.strtoupper($row["productName"]).'" />
									</div>
									<div class="panel-footer text-center" style="height:90px">
										<span class="abstract" style="font-size:22px">
											'.strtoupper($row["productName"]).'
										</span>
									</div>      
								</div>
							</a>';
					}
					else {
						echo '
							<a href="products/profile.php?product='.strtolower($row["productName"]).'">
								<div class="panel panel-default column">      
									<div class="panel-body" >
										<img src="'.$DocRoot.'/_assets/uploads/products/imagenes/'.strtolower($imagenes[0]).'" class="img-responsive cursor" alt="'.strtoupper($row["productName"]).'" />
									</div>
									<div class="panel-footer text-center" style="height:90px">
										<span class="abstract" style="font-size:22px">
											'.strtoupper($row["productName"]).'
										</span>
									</div>      
								</div>
							</a>';
					}
					// SET PREVIOUS PRODUCT ID TO EVALUATE ON NEXT LOOP
					$prevID[] = $row['productID'];
				endif;		    
			endwhile;
			$searchCount = count($prevID);
		endif;
	}

	// GET THE PRODUCT DESCRIPTION FOR THE PRODUCT PROFILE
	function getProductDescription($ProductName){
		global $dbConn;
		$sql = "SELECT * FROM products_description WHERE product_name = '$ProductName'";
		$result = $dbConn->query($sql);

		while($row = $result->fetch_assoc()):
			$product = $row;
		endwhile;
		return $product;
	}

	// GET THE PRODUCT INFO FOR THE PRODUCT PROFILE
	function getProductInfo($ProductName){
		global $dbConn;
		$sql = "SELECT * FROM products WHERE productName = '$ProductName'";
		$result = $dbConn->query($sql);

		while($row = $result->fetch_assoc()):
			$product = $row;
		endwhile;
		return $product;
	}

	// COUNT SEARCH RESULTS
	function CountSearchResults($searchTerm){
		global $dbConn;
		$prevID = array();
		// SANITIZE USER INPUT
			$searchTerm = mysqli_real_escape_string($dbConn, $_GET['search']);
			$sql = "SELECT * FROM products LEFT JOIN categories ON products.productCat LIKE CONCAT('%', categories.catName , '%') WHERE productName LIKE '%{$searchTerm}%' AND products.active = 1 ORDER BY catPriority ASC ";

		$result = $dbConn->query($sql);
		if ($result->num_rows > 0):
			$lineFolder = strtolower(strstr($CatLine, '_', true));
			while($row = $result->fetch_assoc()):
				// MAKE SURE WE DO NOT DUPLICATE ANY RESULTS FOR PRODUCTS THAT HAVE MORE THAN ONE CATEGORY
				if(!in_array($row['productID'], $prevID)):				
						// SET PREVIOUS PRODUCT ID TO EVALUATE ON NEXT LOOP
						$prevID[] = $row['productID'];
					endif;		    
			endwhile;
			return count($prevID) . " Result(s):";
		else:
			return "No results.";
		endif;
	}

	// FORMAT CATEGORY NAMES ON THE PAGE BREADCRUMB
	function FormatCatName($CatName, $ProductLine = null){
		global $DocRoot;
		if ($ProductLine !== null):
			$ProductLineText = str_replace('_', ' ', $ProductLine);
			$ProductLineLink = str_replace(' ', '_', strtolower($ProductLine));
			return $ProductLineText.' </span><span class="separator">/</span><span class="step"> <a href="'. $DocRoot .'/products.php?line='.$ProductLineLink.'&cat='.$CatName.'" class="link no-uline"><span class="button">'. $CatName.'</span></a>';
		else:
			return str_replace('/', '</span><span class="separator">/</span><span class="step"><a href="'. $DocRoot .'/products.php?cat='.$CatName.'" class="link no-uline"><span class="button">', $CatName).'</span></a>';
		endif;
	}

	// REMOVES GET VARIABLE FROM URL
	function RemoveCatFilter($url, $varname) {  
			list($urlpart, $qspart) = array_pad(explode('?', $url), 2, '');
			parse_str($qspart, $qsvars);
			unset($qsvars[$varname]);
			$newqs = http_build_query($qsvars);
			return $urlpart . '?' . $newqs;
	}

	// AUTO-GENERATE LINKS ON PRODUCT PAGES
	function RenderProductLinks($ProductName){
		global $DocRoot;
		// path to directory to scan
		$directory = "../../_assets/downloads/*/";
		$files = glob($directory . $ProductName. "_*");
		//print each file name
		foreach($files as $file)
		{  
			$filepath = str_replace('../../', '', $file);
			$filename = basename($file);
			$url = dirname($filepath);
			$directory_name = explode('/',$url);
			$directory_name = strtoupper(str_replace('_', ' ', $directory_name[2])); 
			echo '<div class="resources-item">
			<button class="btn btn-primary btn-block"  onClick="location.href=\''.$DocRoot . "/" . $filepath . '\'">' . $directory_name . '</button>
			</div>
			';  
		}
	}

	// IMAGE GALLERY ON PRODUCT PAGES
	function RenderImageGallery($ProductName){
		global $DocRoot;
		// path to directory to scan
		$directory = "../../_assets/product-images/";
		// create counters
		$imgcount = "1"; 
		$slidecount = "1";
		$totalcount = "0";
		// get all matching image files
		$images = glob($directory . $ProductName. "_*.{jpg,jpeg,png}", GLOB_BRACE);
		// render thumbnail list
		foreach($images as $image)
		{
			$imagepath = str_replace('../../', '', $image);
			echo '<div class="column">
			<img src="'. $DocRoot . "/" . $imagepath . '" style="width:100%" onclick="openModal();currentSlide('. $imgcount . ')" class="cursor thumbnail"> 
			</div>
			';
			$imgcount ++;
			$totalcount ++;
		}
		echo '<div id="galleryModal" class="modal "  role="dialog"> 
		<span class="close cursor" onclick="closeModal()">&times;</span>
		<div class="modal-content modal-gallery">';
		// render image modals
		foreach($images as $image)
		{
			$imagepath = str_replace('../../', '', $image);
			echo ' <div class="mySlides">
			<div class="numbertext">'. $slidecount . " / " . $totalcount .'
			</div>
			<img src="'.$DocRoot . "/" . $imagepath .'" style="width:100%">
			</div>
			';
			$slidecount ++;
		}
		// navigation arrows	
		echo '</div>  
			  <a class="prevbtn" onclick="plusSlides(-1)">&#10094;</a>
			  <a class="nextbtn" onclick="plusSlides(1)">&#10095;</a>';
	}

	// THIS FUNCTION CHECKS THE URL AND OUTPUTS THE RIGHT KEY FOR EACH DIVISION
	function ProcessDivisionKey($key){
		
		// CONSTANT CONTACT INLINE KEY
		if ($key=="ConstantContactInlineKey") :
			echo "0d62897e-9a45-4a82-ab20-ab0e90ad8bd4";
		endif;

		// CONSTANT CONTACT FORM KEY
		if($key=="ContactContactFormKey"):
			echo "7276ec874b58874f0a7c15bdeb532974";
		endif;

		// GOOGLE MAPS COORDINATES
		if($key=="GoogleMapsCoordinates"):
			echo "20.5622531,-100.2823565";
		endif;

		// GOOGLE MAPS KEY
		if($key=="GoogleMapsKey"):
			echo "AIzaSyA4XgQ5Q_LFmKwYoD30ffb79TzQkOgFMsU";
		endif;

		// GOOGLE RECAPTCHA KEY
		if($key=="GoogleRecaptcha"):
			echo "6LcyoXYUAAAAANrqGQUW_utChV-ydM5y7Qz6fuf9";
		endif;

		// GOOGLE ANALYTICS
		if($key=="GoogleAnalytics"):
			echo "UA-130108041-1";
		endif;

		// GOOGLE SITE SEARCH
		if($key=="GoogleSiteSearchKey"):
			echo "009041332469782994960:thdfpr_vlua";   
		endif;

	}

	// PROCESS CONTACT FORM
	function ProcessContactForm() {
		// echo "start";
		// PROCESS FORM DATA
		// echo "<pre>"; print_r($_POST) ; echo "</pre>";
		if(isset($_POST['form-type']) && !empty($_POST['form-type'])):
			// echo "step 1 go";
			if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
				// echo "step 2 go";
				//your site secret key
				//$secret = '6LfPTnYUAAAAAKw63yy1Ju8Mn1q14HpmMyAw2rnU';
				//get verify response data
				//$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
				//$responseData = json_decode($verifyResponse);
				// if($responseData->success):
					//contact form submission code
					$name = !empty($_POST['name'])?$_POST['name']:'';
					$surname = !empty($_POST['surname'])?$_POST['surname']:'';
					$email = !empty($_POST['email'])?$_POST['email']:'';
					$telephone = !empty($_POST['telephone'])?$_POST['telephone']:'';
					$message = !empty($_POST['message'])?nl2br($_POST['message']):'';
					$state = !empty($_POST['state'])?nl2br($_POST['state']):'';
					$ip = !empty($_POST['ip'])?$_POST['ip']:'';
					// $to = 'itzel.gomez@beghelli.com.mx, marketing@beghelli.com.mx';
					$to = 'contacto@beghelli.com.mx';
					$subject = 'BEGHELLI WEB | Nuevo Mensaje';
					$htmlContent = "
							<h2>Detalle del Contacto</h2>
							<p><b>Nombre: </b>".$name."</p>
							<p><b>Compañía: </b>".$surname."</p>
							<p><b>Estado: </b>".$state."</p>
							<p><b>Email: </b>".$email."</p>
							<p><b>Teléfono: </b>".$telephone."</p>
							<p><b>Mensaje: </b>".$message."</p>
							<p><b>IP Address: </b>".$ip."</p>
					";
					// Always set content-type when sending HTML email
					$headers = "MIME-Version: 1.0" . "\r\n";
					$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
					// More headers
					$headers .= 'From:'.$name.' <'.$email.'>' . "\r\n";
					//send email
					@mail($to,$subject,$htmlContent,$headers);
					
					$succMsg = 'Your contact request have submitted successfully.';
				// else:
				// 	$errMsg = 'Robot verification failed, please try again.';
				// endif;
			else:
				$errMsg = 'Please click on the reCAPTCHA box.';
			endif;
		else:
			$errMsg = '';
			$succMsg = '';
		endif;
		//echo $errMsg;
	}

?>
