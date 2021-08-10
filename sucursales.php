<?php include("header.php"); ?>

	<script src="js/simpleCart.min.js"> </script>
	<!-- cart -->
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
    
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript">
			function initialize() {
				var latlng = new google.maps.LatLng(19.38874916, -98.94711495);
				var settings = {
					zoom: 12,
					center: latlng,
					mapTypeControl: true,
					mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
					navigationControl: true,
					navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
					mapTypeId: google.maps.MapTypeId.ROADMAP};
				var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
				var contentString = '<div id="content">'+
					'<div id="siteNotice">'+
					'</div>'+
					'<h1 id="firstHeading" class="firstHeading">Pasteles Finos del Real</h1>'+
					'<div id="bodyContent">'+
					'<p>Aquí puedes solicitar tus pedidos.</p>'+
					'</div>'+
					'</div>';
				var infowindow = new google.maps.InfoWindow({
					content: contentString
				});
				
				
				//posición sucursal cecilia
				var companyImage = new google.maps.MarkerImage('images/logosuc.png',
					new google.maps.Size(100,50),
					new google.maps.Point(0,0),
					new google.maps.Point(50,50)
				);

				var companyShadow = new google.maps.MarkerImage('images/logo_shadow.png',
					new google.maps.Size(130,50),
					new google.maps.Point(0,0),
					new google.maps.Point(65, 50));

				var companyPos = new google.maps.LatLng(19.39814216, -98.99925088);

				var companyMarker = new google.maps.Marker({
					position: companyPos,
					map: map,
					icon: companyImage,
					shadow: companyShadow,
					title:"Høgenhaug",
					zIndex: 3});
				
				
				//posición sucursal madrugada
				var trainImage = new google.maps.MarkerImage('images/logosuc.png',
					new google.maps.Size(100,50),
					new google.maps.Point(0,0),
					new google.maps.Point(50,50)
				);

				var trainShadow = new google.maps.MarkerImage('images/train_shadow.png',
					new google.maps.Size(70,50),
					new google.maps.Point(0,0),
					new google.maps.Point(60, 50)
				);

				var trainPos = new google.maps.LatLng(19.4070053, -98.9969146,17);

				var trainMarker = new google.maps.Marker({
					position: trainPos,
					map: map,
					icon: trainImage,
					shadow: trainShadow,
					title:"Train Station",
					zIndex: 2
				});

				
				//posición sucursal san lorenzo
				var parkingImage = new google.maps.MarkerImage('images/logosuc.png',
					new google.maps.Size(100,50),
					new google.maps.Point(0,0),
					new google.maps.Point(50,50)
				);

				var parkingShadow = new google.maps.MarkerImage('images/parking_shadow.png',
					new google.maps.Size(70,50),
					new google.maps.Point(0,0),
					new google.maps.Point(60, 50)
				);

				var parkingPos = new google.maps.LatLng(19.40413573, -98.97549915);

				var parkingMarker = new google.maps.Marker({
					position: parkingPos,
					map: map,
					icon: parkingImage,
					shadow: parkingShadow,
					title:"Parking Lot",
					zIndex: 1
				});
				
				//posición de la Matriz
				var parkingImage = new google.maps.MarkerImage('images/logosuc.png',
					new google.maps.Size(100,50),
					new google.maps.Point(0,0),
					new google.maps.Point(50,50)
				);

				var parkingShadow = new google.maps.MarkerImage('images/parking_shadow.png',
					new google.maps.Size(70,50),
					new google.maps.Point(0,0),
					new google.maps.Point(60, 50)
				);

				var parkingPos = new google.maps.LatLng(19.42107101, -98.97334099);

				var parkingMarker = new google.maps.Marker({
					position: parkingPos,
					map: map,
					icon: parkingImage,
					shadow: parkingShadow,
					title:"Parking Lot",
					zIndex: 1
				});
				
				//posición sucursal palacio
				var parkingImage = new google.maps.MarkerImage('images/logosuc.png',
					new google.maps.Size(100,50),
					new google.maps.Point(0,0),
					new google.maps.Point(50,50)
				);

				var parkingShadow = new google.maps.MarkerImage('images/parking_shadow.png',
					new google.maps.Size(70,50),
					new google.maps.Point(0,0),
					new google.maps.Point(60, 50)
				);

				var parkingPos = new google.maps.LatLng(19.4078404, -99.01958388);

				var parkingMarker = new google.maps.Marker({
					position: parkingPos,
					map: map,
					icon: parkingImage,
					shadow: parkingShadow,
					title:"Parking Lot",
					zIndex: 1
				});
				
				//posición sucursal México
				var parkingImage = new google.maps.MarkerImage('images/logosuc.png',
					new google.maps.Size(100,50),
					new google.maps.Point(0,0),
					new google.maps.Point(50,50)
				);

				var parkingShadow = new google.maps.MarkerImage('images/parking_shadow.png',
					new google.maps.Size(70,50),
					new google.maps.Point(0,0),
					new google.maps.Point(60, 50)
				);

				var parkingPos = new google.maps.LatLng(19.40118615, -99.04040294);

				var parkingMarker = new google.maps.Marker({
					position: parkingPos,
					map: map,
					icon: parkingImage,
					shadow: parkingShadow,
					title:"Parking Lot",
					zIndex: 1
				});
				
				//posición sucursal Chimalhuacan
				var parkingImage = new google.maps.MarkerImage('images/logosuc.png',
					new google.maps.Size(100,50),
					new google.maps.Point(0,0),
					new google.maps.Point(50,50)
				);

				var parkingShadow = new google.maps.MarkerImage('images/parking_shadow.png',
					new google.maps.Size(70,50),
					new google.maps.Point(0,0),
					new google.maps.Point(60, 50)
				);

				var parkingPos = new google.maps.LatLng(19.41854029, -98.94606804);

				var parkingMarker = new google.maps.Marker({
					position: parkingPos,
					map: map,
					icon: parkingImage,
					shadow: parkingShadow,
					title:"Parking Lot",
					zIndex: 1
				});
				
				//posición sucursal Reforma
				var parkingImage = new google.maps.MarkerImage('images/logosuc.png',
					new google.maps.Size(100,50),
					new google.maps.Point(0,0),
					new google.maps.Point(50,50)
				);

				var parkingShadow = new google.maps.MarkerImage('images/parking_shadow.png',
					new google.maps.Size(70,50),
					new google.maps.Point(0,0),
					new google.maps.Point(60, 50)
				);

				var parkingPos = new google.maps.LatLng(19.3714511, -98.9823743);

				var parkingMarker = new google.maps.Marker({
					position: parkingPos,
					map: map,
					icon: parkingImage,
					shadow: parkingShadow,
					title:"Parking Lot",
					zIndex: 1
				});
				
				//posición sucursal ixtapaluca
				var parkingImage = new google.maps.MarkerImage('images/logosuc.png',
					new google.maps.Size(100,50),
					new google.maps.Point(0,0),
					new google.maps.Point(50,50)
				);

				var parkingShadow = new google.maps.MarkerImage('images/parking_shadow.png',
					new google.maps.Size(70,50),
					new google.maps.Point(0,0),
					new google.maps.Point(60, 50)
				);

				var parkingPos = new google.maps.LatLng(19.3104505, -98.91395461);

				var parkingMarker = new google.maps.Marker({
					position: parkingPos,
					map: map,
					icon: parkingImage,
					shadow: parkingShadow,
					title:"Parking Lot",
					zIndex: 1
				});
				
				//posición sucursal torres
				var parkingImage = new google.maps.MarkerImage('images/logosuc.png',
					new google.maps.Size(100,50),
					new google.maps.Point(0,0),
					new google.maps.Point(50,50)
				);

				var parkingShadow = new google.maps.MarkerImage('images/parking_shadow.png',
					new google.maps.Size(70,50),
					new google.maps.Point(0,0),
					new google.maps.Point(60, 50)
				);

				var parkingPos = new google.maps.LatLng(19.43509053, -98.97467554);

				var parkingMarker = new google.maps.Marker({
					position: parkingPos,
					map: map,
					icon: parkingImage,
					shadow: parkingShadow,
					title:"Parking Lot",
					zIndex: 1
				});
				
					//posición sucursal texcoco
				var parkingImage = new google.maps.MarkerImage('images/logosuc.png',
					new google.maps.Size(100,50),
					new google.maps.Point(0,0),
					new google.maps.Point(50,50)
				);

				var parkingShadow = new google.maps.MarkerImage('images/parking_shadow.png',
					new google.maps.Size(70,50),
					new google.maps.Point(0,0),
					new google.maps.Point(60, 50)
				);

				var parkingPos = new google.maps.LatLng(19.37782047, -99.00894344);

				var parkingMarker = new google.maps.Marker({
					position: parkingPos,
					map: map,
					icon: parkingImage,
					shadow: parkingShadow,
					title:"Parking Lot",
					zIndex: 1
				});
				
				//posición sucursal independencia
				var parkingImage = new google.maps.MarkerImage('images/logosuc.png',
					new google.maps.Size(100,50),
					new google.maps.Point(0,0),
					new google.maps.Point(50,50)
				);

				var parkingShadow = new google.maps.MarkerImage('images/parking_shadow.png',
					new google.maps.Size(70,50),
					new google.maps.Point(0,0),
					new google.maps.Point(60, 50)
				);

				var parkingPos = new google.maps.LatLng(19.37179523, -98.98660392);

				var parkingMarker = new google.maps.Marker({
					position: parkingPos,
					map: map,
					icon: parkingImage,
					shadow: parkingShadow,
					title:"Parking Lot",
					zIndex: 1
				});
				//posición sucursal sanfelipe
				var parkingImage = new google.maps.MarkerImage('images/logosuc.png',
					new google.maps.Size(100,50),
					new google.maps.Point(0,0),
					new google.maps.Point(50,50)
				);

				var parkingShadow = new google.maps.MarkerImage('images/parking_shadow.png',
					new google.maps.Size(70,50),
					new google.maps.Point(0,0),
					new google.maps.Point(60, 50)
				);

				var parkingPos = new google.maps.LatLng(19.47634105, -99.08252209);

				var parkingMarker = new google.maps.Marker({
					position: parkingPos,
					map: map,
					icon: parkingImage,
					shadow: parkingShadow,
					title:"Parking Lot",
					zIndex: 1
				});
				//posición sucursal flamingos
				var parkingImage = new google.maps.MarkerImage('images/logosuc.png',
					new google.maps.Size(100,50),
					new google.maps.Point(0,0),
					new google.maps.Point(50,50)
				);

				var parkingShadow = new google.maps.MarkerImage('images/parking_shadow.png',
					new google.maps.Size(70,50),
					new google.maps.Point(0,0),
					new google.maps.Point(60, 50)
				);

				var parkingPos = new google.maps.LatLng(19.38877306, -99.01521564);

				var parkingMarker = new google.maps.Marker({
					position: parkingPos,
					map: map,
					icon: parkingImage,
					shadow: parkingShadow,
					title:"Parking Lot",
					zIndex: 1
				});
				
				
				google.maps.event.addListener(companyMarker, 'click', function() {
					infowindow.open(map,companyMarker);
				});
			}
		</script>
	<!-- start-smoth-scrolling -->






<body onload="initialize()">
	<?php include("menu.php"); ?>

	<div class="bg-light shadow p-2 flotante">
		<a href="#">
			<i class="fab fa-whatsapp"></i>
		</a>
	</div>

	<div class="container-fluid bg-primary p-5">
		<div class="container p-5">
			<h2 class="text-light" data-aos="fade-left" data-aos-duration="2000">Acceso Sucursales</h2>
		</div>
	</div>




	<div class="container mb-3">
		<div class="row">
			<div class="col-12 p-3">
				<div onload="initialize()">
					<div id="map_canvas" style="width: 100%; height: 570px"></div>
				</div>
			</div>
		</div>


		
    
                <div class="row">
                    <div class="col-6 col-md-4 mb-3">
                        <div data-aos="fade-up" data-aos-duration="100" class="card p-3 text-center shadow-sm bg-primary text-light" style="height: 180px;">
							<h5>CECILIA</h5>
							<p>Calle Cecilia No. 100 Esquina Av. Chimalhuacán, Colonia Benito Juárez.  Municipio Chimalhuacán Estado de México. C. P.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 mb-3">
                        <div data-aos="fade-up" data-aos-duration="300" class="card p-3 text-center shadow-sm bg-primary text-light" style="height: 180px;">
							<h5>MADRUGADA</h5>
							<p>Av. Madrugada No. 203 Esquina con Adelita, Colonia Benito Juárez Municipio Nezahualcóyotl Estado de México C. P. 57000.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 mb-3">
                        <div data-aos="fade-up" data-aos-duration="500" class="card p-3 text-center shadow-sm bg-primary text-light" style="height: 180px;">
							<h5>PALACIO</h5>
							<p>Av. Chimalhuacán No. 311 – C  Col. Benito Juárez, Municipio Nezahualcóyotl Estado de México  C. P. 57000.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 mb-3">
                        <div data-aos="fade-up" data-aos-duration="700" class="card p-3 text-center shadow-sm bg-primary text-light" style="height: 180px;">
							<h5>SAN LORENZO</h5>
							<p>Av. Central No. 6 Colonia San Lorenzo Ampliación, Municipio Chimalhuacán. Estado de México  C. P. 56340.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 mb-3">
                        <div data-aos="fade-up" data-aos-duration="900" class="card p-3 text-center shadow-sm bg-primary text-light" style="height: 180px;">
							<h5>MEXICO</h5>
							<p>Av. México no. 175 Col. Raúl romero municipio Nezahualcóyotl estado de México C. P. 57630.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 mb-3">
                        <div data-aos="fade-up" data-aos-duration="1100" class="card p-3 text-center shadow-sm bg-primary text-light" style="height: 180px;">
							<h5>CHIMALHUACÁN</h5>
							<p>Av. Morelos No. 2 Local “D” Colonia Cabecera Municipal de Chimalhuacán Municipio de Chimalhuacán Estado de México C. P. 56330.</p>
                        </div>
                    </div>


					









					<div class="col-6 col-md-4 mb-3">
                        <div data-aos="fade-up" data-aos-duration="100" class="card p-3 text-center shadow-sm bg-primary text-light" style="height: 180px;">
							<h5>REFORMA</h5>
							<p>Oriente 9  No. 165 esquina Av. Loma Bonita Colonia Reforma Municipio Nezahualcóyotl C. P. 57840.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 mb-3">
                        <div data-aos="fade-up" data-aos-duration="300" class="card p-3 text-center shadow-sm bg-primary text-light" style="height: 180px;">
							<h5>IXTAPALUCA</h5>
							<p>AV. Jacarandas no. 22 colonia valle verde Ixtapaluca entre Tule y Eucalipto Estado de México</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 mb-3">
                        <div data-aos="fade-up" data-aos-duration="500" class="card p-3 text-center shadow-sm bg-primary text-light" style="height: 180px;">
							<h5>INDEPENDENCIA</h5>
							<p>Av. Sur 3 casi esquina con Oriente 1 Col. Reforma Municipio Nezahualcóyotl Estado de México .</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 mb-3">
                        <div data-aos="fade-up" data-aos-duration="700" class="card p-3 text-center shadow-sm bg-primary text-light" style="height: 180px;">
							<h5>FLAMINGOS</h5>
                    		<p>Calle Villa Obregón Col. Metropolitana 3ra. Sección Municipio Nezahualcóyotl Estado de México C. P. 57750.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 mb-3">
                        <div data-aos="fade-up" data-aos-duration="900" class="card p-3 text-center shadow-sm bg-primary text-light" style="height: 180px;">
							<h5>SAN FELIPE</h5>
							<p>Puerto Papantla No. 62 Esquina Puerto Tampico Casas Alemán Delegación Gustavo A. Madero,  México D. F.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 mb-3">
                        <div data-aos="fade-up" data-aos-duration="1100" class="card p-3 text-center shadow-sm bg-primary text-light" style="height: 180px;">
							<h5>TORRES</h5>
							<p>Av. De las Torres Esquina con Yacatli Mz. 55 Lt. 10 Barrio Vidrieros municipio Chimalhuacán Estado de México.</p>
                        </div>
                    </div>


					<div class="col-6 col-md-4 mb-3">
                        <div data-aos="fade-up" data-aos-duration="1100" class="card p-3 text-center shadow-sm bg-primary text-light" style="height: 180px;">
							<h5>TEXCOCO</h5>
							<p>Av. Carmelo Pérez no. 58 casi esquina con Av. Texcoco municipio Nezahualcóyotl Estado de México  C. P. 57710.</p>
                        </div>
                    </div>
                </div>
        
	</div>




<?php include("footer.php"); ?>