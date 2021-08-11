<?php include("header.php"); ?>





<body>
	<?php include("menu.php"); ?>

	<div class="bg-light shadow p-2 flotante">
		<a href="#">
			<i class="fab fa-whatsapp"></i>
		</a>
	</div>

	<div class="container-fluid bg-primary p-5"
		style="background: url(./assets/img/fondos/fondo-pasteleria-2.jpg) 50% center no-repeat; background-size: cover;">
		<div class="container p-5">
			<h1 class="text-center display-4" style="color: #ff9;" data-aos="fade-left" data-aos-duration="2000">
				Contacto</h1>
		</div>
	</div>




	<div class="container mb-5">

		<div class="row mt-5">
			<div class="col-md-6">
				<img src="./assets/img/productos/gelatinas/gela3.png" alt="" width="100%">
			</div>


			<div class="col-md-6 p-3">
				<form id="mailFormulario" method="POST" enctype="application/x-www-form-urlencoded">
					<input id="destinatario" name="destinatario" type="hidden" value="alberto@gobierno.io">

					<div class="row">
						<div class="col-12 col-md pb-2 pr-md-1">
							<input id="inputNombre" name="nombre" type="text" class="form-control rounded-0 border-0"
								placeholder="Nombre">
						</div>
						<div class="col-12 col-md pb-2 pl-md-1">
							<input id="inputCorreo" name="correo" type="text" class="form-control rounded-0 border-0"
								placeholder="Correo electrónico">
						</div>
					</div>

					<div class="row">
						<div class="col pb-2">
							<input id="inputAsunto" name="asunto" type="text" class="form-control rounded-0 border-0"
								placeholder="Asunto">
						</div>
					</div>

					<div class="row">
						<div class="col pb-2">
							<textarea id="inputMensaje" class="form-control rounded-0 border-0" name="mensaje" cols="30"
								rows="10">


</textarea>
						</div>
					</div>


					<div id="mailAlert" class="alert alert-success">
						<span id="mailCargando">Enviando, espere un momento ...</span>
					</div>


					<div class="row">
						<div class="col pb-2">
							<input id="mailEnviar" type="submit" class="btn btn-primary w-100 p-2"
								value="Enviar mensaje">
						</div>
					</div>
				</form>
			</div>
		</div>


		<div class="row">
			<div class="col-12">
				<div id="map"></div>
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
				new google.maps.Size(47, 44),
				new google.maps.Point(0, 0),
				new google.maps.Point(28, 44)
			);

			new google.maps.Marker({
				position: { lat: 19.39814216, lng: -98.99925088 },
				map: map,
				icon: iconoPasteleria,
				title: "Cecilia"
			});



			new google.maps.Marker({
				position: { lat: 19.4070053, lng: -98.9969146 },
				map: map,
				icon: iconoPasteleria,
				title: "Sucursal Pastelería"
			});

			new google.maps.Marker({
				position: { lat: 19.40413573, lng: -98.97549915 },
				map: map,
				icon: iconoPasteleria,
				title: "Sucursal Pastelería"
			});

			new google.maps.Marker({
				position: { lat: 19.42107101, lng: -98.97334099 },
				map: map,
				icon: iconoPasteleria,
				title: "Sucursal Pastelería"
			});

			new google.maps.Marker({
				position: { lat: 19.4078404, lng: -99.01958388 },
				map: map,
				icon: iconoPasteleria,
				title: "Sucursal Pastelería"
			});

			new google.maps.Marker({
				position: { lat: 19.40118615, lng: -99.04040294 },
				map: map,
				icon: iconoPasteleria,
				title: "Sucursal Pastelería"
			});

			new google.maps.Marker({
				position: { lat: 19.41854029, lng: -98.94606804 },
				map: map,
				icon: iconoPasteleria,
				title: "Sucursal Pastelería"
			});

			new google.maps.Marker({
				position: { lat: 19.3714511, lng: -98.9823743 },
				map: map,
				icon: iconoPasteleria,
				title: "Sucursal Pastelería"
			});

			new google.maps.Marker({
				position: { lat: 19.3104505, lng: -98.91395461 },
				map: map,
				icon: iconoPasteleria,
				title: "Sucursal Pastelería"
			});

			new google.maps.Marker({
				position: { lat: 19.43509053, lng: -98.97467554 },
				map: map,
				icon: iconoPasteleria,
				title: "Sucursal Pastelería"
			});

			new google.maps.Marker({
				position: { lat: 19.37782047, lng: -99.00894344 },
				map: map,
				icon: iconoPasteleria,
				title: "Sucursal Pastelería"
			});

			new google.maps.Marker({
				position: { lat: 19.37179523, lng: -98.98660392 },
				map: map,
				icon: iconoPasteleria,
				title: "Sucursal Pastelería"
			});

			new google.maps.Marker({
				position: { lat: 19.47634105, lng: -99.08252209 },
				map: map,
				icon: iconoPasteleria,
				title: "Sucursal Pastelería"
			});

			new google.maps.Marker({
				position: { lat: 19.38877306, lng: -99.01521564 },
				map: map,
				icon: iconoPasteleria,
				title: "Sucursal Pastelería"
			});

		}
	</script>
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDS40fye0H9t7ZSGrZE7_uLE6MdD7fxKjQ&callback=initMap&libraries=&v=weekly"
		async></script>
	<?php include("footer.php"); ?>