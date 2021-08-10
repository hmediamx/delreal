<footer class="container-fluid bg-secondary text-light shadow">
		<div class="container" style="overflow:hidden;">
			<div class="row">
				<div class="col-12 col-md-4 p-5 text-center">
				

					<i class="fas fa-phone-alt"></i> 55 5555 5555<br>
					<i class="fas fa-phone-alt"></i> 55 5555 5555<br>
					
					<address>
						Direcciones.
					</address>
	
					<p>
						<a href="mailto:contacto@pastelesfinosdelreal.com">contacto@pastelesfinosdelreal.com</a>
					</p> 
				</div>


				<div class="col-12 col-md-4 p-5 text-center">
					<img src="./assets/img/logofooter.png" alt="" class="mb-3" height="150px;">
				</div>

	
	
				<div class="col-12 col-md-4 p-5 text-center">
					<h4>Fábrica de Software</h4>
	
					<ul>
						<li>Desarrollo Web</li>
						<li>Aplicaciones móviles</li>
					</ul>



					<div class="d-block text-center redes">
						<span class="d-inline-block p-2">
							<a href="#"><i class="fab fa-linkedin"></i></a>
						</span>
						<span class="d-inline-block p-2">
							<a href="#"><i class="fab fa-youtube"></i></a>
						</span>
					</div>
	
				</div>
	
				
			</div>
		</div>

		<hr class="mb-0 pb-0">

		<div class="container" style="overflow:hidden;">
			<div class="row">
				<div class="col text-center p-3">
				</div>

				<div class="col text-center p-3">
					Política de Privacidad
				</div>

				<div class="col text-center p-3">
				</div>
			</div>
		</div>
	</footer>



	<script   src="https://code.jquery.com/jquery-3.6.0.min.js"   integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="   crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
		crossorigin="anonymous"></script>

	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init();

		// $('.go-to-top').click(function(){
		// 	$("html, body").animate({ scrollTop: 0 }, 600);
		// 	return false;
		// });

		$('.go-to-top').click(function(event) {
			event.preventDefault();
			var targetOffset = $('body').offset().top;
			$("html, body").animate({
				scrollTop: targetOffset + "px"
			},1000);
		});
	</script>
</body>

</html>