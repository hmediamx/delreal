<?php include("header.php"); ?>

		
    
		

<body>
	<?php include("menu.php"); ?>

	<div class="bg-light shadow p-2 flotante">
		<a href="#">
			<i class="fab fa-whatsapp"></i>
		</a>
	</div>

	<div class="container-fluid bg-primary p-5" style="background: url(./assets/img/fondos/fondo-pasteleria-2.jpg) 50% center no-repeat; background-size: cover;">
        <div class="container p-5">
            <h1 class="text-center display-4" style="color: #ff9;" data-aos="fade-left" data-aos-duration="2000">Sucursales</h1>
        </div>
    </div>

	


	<div class="container">
		<div class="row">
			<div class="col-12">
				<div id="map"></div>
			</div>
		</div>
	</div>




	<div class="container mb-3">
		<div class="row">
			<div class="col-12 p-3">
				<div onload="initialize()">
					<!-- <div id="map_canvas" style="width: 100%; height: 570px"></div> -->
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



	
<script>
	function initMap() {
		const myLatLng = { lat: 19.38874916, lng: -99.00811495 };
		const map = new google.maps.Map(document.getElementById("map"), {
			zoom: 11,
			center: myLatLng,
		});
	
		var iconoPasteleria = new google.maps.MarkerImage('./assets/img/map/logosuc.png',
			new google.maps.Size(47,44),
			new google.maps.Point(0,0),
			new google.maps.Point(28,44)
		);

		new google.maps.Marker({
			position: { lat: 19.39814216, lng: -98.99925088 },
			map: map,
			icon: iconoPasteleria,
			title:"Cecilia"
		});


		
		new google.maps.Marker({
			position: { lat: 19.4070053, lng: -98.9969146 },
			map: map,
			icon: iconoPasteleria,
			title:"Sucursal Pastelería"
		});

		new google.maps.Marker({
			position: {lat: 19.40413573, lng: -98.97549915 },
			map: map,
			icon: iconoPasteleria,
			title:"Sucursal Pastelería"
		});

		new google.maps.Marker({
			position: {lat: 19.42107101, lng: -98.97334099 },
			map: map,
			icon: iconoPasteleria,
			title:"Sucursal Pastelería"
		});

		new google.maps.Marker({
			position: {lat: 19.4078404, lng: -99.01958388 },
			map: map,
			icon: iconoPasteleria,
			title:"Sucursal Pastelería"
		});

		new google.maps.Marker({
			position: {lat: 19.40118615, lng: -99.04040294},
			map: map,
			icon: iconoPasteleria,
			title:"Sucursal Pastelería"
		});

		new google.maps.Marker({
			position: {lat: 19.41854029, lng: -98.94606804},
			map: map,
			icon: iconoPasteleria,
			title:"Sucursal Pastelería"
		});

		new google.maps.Marker({
			position: {lat: 19.3714511,lng: -98.9823743 },
			map: map,
			icon: iconoPasteleria,
			title:"Sucursal Pastelería"
		});

		new google.maps.Marker({
			position: {lat: 19.3104505, lng: -98.91395461},
			map: map,
			icon: iconoPasteleria,
			title:"Sucursal Pastelería"
		});

		new google.maps.Marker({
			position: {lat: 19.43509053, lng: -98.97467554},
			map: map,
			icon: iconoPasteleria,
			title:"Sucursal Pastelería"
		});

		new google.maps.Marker({
			position: {lat: 19.37782047, lng: -99.00894344},
			map: map,
			icon: iconoPasteleria,
			title:"Sucursal Pastelería"
		});

		new google.maps.Marker({
			position: {lat: 19.37179523, lng: -98.98660392},
			map: map,
			icon: iconoPasteleria,
			title:"Sucursal Pastelería"
		});

		new google.maps.Marker({
			position: {lat: 19.47634105, lng: -99.08252209},
			map: map,
			icon: iconoPasteleria,
			title:"Sucursal Pastelería"
		});

		new google.maps.Marker({
			position: {lat: 19.38877306, lng: -99.01521564},
			map: map,
			icon: iconoPasteleria,
			title:"Sucursal Pastelería"
		});

	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDS40fye0H9t7ZSGrZE7_uLE6MdD7fxKjQ&callback=initMap&libraries=&v=weekly" async></script>
<?php include("footer.php"); ?>