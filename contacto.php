<?php include("header.php"); ?>
		
	
	
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->	
	<!-- js -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- js -->
	<!-- cart -->
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
					'<h1 id="firstHeading" class="firstHeading">Høgenhaug</h1>'+
					'<div id="bodyContent">'+
					'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>'+
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

</head>
<body onload="initialize()">


            <?php include("menu.php"); ?>



        <div class="container">
            <div onload="initialize()">
                <div id="map_canvas" style="width:1000px; height:570px"></div>
            </div>
        </div>



        
	


<!-- test -->

	<div class="container">
		<!-- responsiveslides -->
							<script src="js/responsiveslides.min.js"></script>
								<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									$("#slider4").responsiveSlides({
										auto: true,
										pager: false,
										nav: false,
										speed: 500,
										namespace: "callbacks",
										before: function () {
									$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
										}
										});
										});
								</script>
		<!-- responsiveslides -->
		
        <div class="contact-form">
			<div class="contact-info">
				<h3>Envianos tu mensaje</h3>
				<div class="strip-line"></div>
			</div>

         <form method= "post" action="contact.php">

				<div class="contact-left">
					<div>
						    	<span><label>Nombre</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>Teléfono</label></span>
						    	<span><input name="userPhone" type="text" class="textbox"></span>
						    </div>
				</div>
				<div class="contact-right">
					<div>
						    	<span><label>Mensaje</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
				</div>
				<div class="clearfix"></div>
				<input type="submit" value="Enviar">
                
			</form></br>
		</div>
        
	</div>








<?php include("footer.php"); ?>