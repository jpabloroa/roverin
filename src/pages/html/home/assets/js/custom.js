(function ($) {

	"use strict";

	// Window Resize Mobile Menu Fix
	mobileNav();


	// Scroll animation init
	window.sr = new scrollReveal();


	// Menu Dropdown Toggle
	if ($('.menu-trigger').length) {
		$(".menu-trigger").on('click', function () {
			$(this).toggleClass('active');
			$('.header-area .nav').slideToggle(200);
		});
	}


	// Menu elevator animation
	$('a[href*=\\#]:not([href=\\#])').on('click', function () {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				var width = $(window).width();
				if (width < 991) {
					$('.menu-trigger').removeClass('active');
					$('.header-area .nav').slideUp(200);
				}
				$('html,body').animate({
					scrollTop: (target.offset().top) - 130
				}, 700);
				return false;
			}
		}
	});

	$(document).ready(function () {
		$(document).on("scroll", onScroll);

		//smoothscroll
		$('a[href^="#"]').on('click', function (e) {
			e.preventDefault();
			$(document).off("scroll");

			$('a').each(function () {
				$(this).removeClass('active');
			})
			$(this).addClass('active');

			var target = $(this.hash);
			console.log(target.offset());
			$('html, body').stop().animate({
				scrollTop: ((target.offset() == null) ? 130 : target.offset().top) - 130
			}, 500, 'swing', function () {
				window.location.hash = target;
				$(document).on("scroll", onScroll);
			});
		});

		//
		var cookie_last_request = JSON.parse(getCookie("last-request"));
		if (cookie_last_request != "") {

			//
			var estado = "enviada";
			var fecha = new Date(cookie_last_request.fechaDeCreacion);

			//
			switch (cookie_last_request.estado) {
				case 0:
					estado = "recibida por un asesor";
					break;
				case 1:
					estado = "respondida y enviada vía email";
					break;
				case 2:
					estado = "gestionada con éxito";
					break;
			}
			$("#server-response-concact").html(`Tiene una solicitud en curso...<br>Creada el <strong>${fecha.toLocaleDateString()}</strong> a las <strong>${fecha.toLocaleTimeString()}</strong><br>Su solicitud fue ${estado}`);
			$("#nombre").val(cookie_last_request.nombre);
			$("#correo").val(cookie_last_request.correo);
			$("#celular").val(cookie_last_request.celular);
			$("#mensaje").val(cookie_last_request.mensaje);
			$("#form-submit-search").css({ "display": "block" });
			$("#form-submit-search").click(function (e) {

				e.preventDefault(); // avoid to execute the actual submit of the form.

				var url = "src/mvc/vista/formulario_home.php";
				var datos = {
					codigoConteo: cookie_last_request.codigoConteo,
					correo: cookie_last_request.correo
				};

				if (!submitted) {
					$.ajax({
						type: "GET",
						url: url,
						data: datos
					}).done(function (data) {
						submitted = true;
						var respuesta = data.datos;
						if (respuesta != null && respuesta != "") {
							//
							var estado = "enviada";
							var fecha = new Date(respuesta.fechaDeCreacion);

							//
							switch (respuesta.estado) {
								case 0:
									estado = "recibida por un asesor";
									break;
								case 1:
									estado = "respondida y enviada vía email";
									break;
								case 2:
									estado = "gestionada con éxito";
									break;
							}
							$("#server-response-concact").html(`Tiene una solicitud en curso...<br>Creada el <strong>${fecha.toLocaleDateString()}</strong> a las <strong>${fecha.toLocaleTimeString()}</strong><br>Su solicitud fue ${estado}`);
							$("#nombre").val(respuesta.nombre);
							$("#correo").val(respuesta.correo);
							$("#celular").val(respuesta.celular);
							$("#mensaje").val(respuesta.mensaje);
							$("#server-response-concact").html(respuesta.replace("\n", "<br>"));
						}
					});
				} else {
					alert("Su solicitud ha sido enviada");
				}
			});
		}

	});

	//
	function onScroll(event) {
		var scrollPos = $(document).scrollTop();
		$('.nav a').each(function () {
			var currLink = $(this);
			var refElement = $(currLink.attr("href"));
			if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
				$('.nav ul li a').removeClass("active");
				currLink.addClass("active");
			}
			else {
				currLink.removeClass("active");
			}
		});
	}

	//
	var submitted = false;
	var dataSended = { mensaje: "" };

	// this is the id of the form
	$("#contacto").submit(function (e) {

		e.preventDefault(); // avoid to execute the actual submit of the form.

		var form = $(this);
		//var url = form.attr('action');
		var url = "src/mvc/vista/formulario_home.php";
		var datos = {
			nombre: $("#nombre").val(),
			correo: $("#correo").val(),
			celular: $("#celular").val(),
			mensaje: $("#mensaje").val()
		};

		if (datos.mensaje != dataSended.mensaje) {
			$.ajax({
				type: "POST",
				url: url,
				data: datos
			}).done(function (data) {
				submitted = true;
				var respuesta = data.info;
				dataSended = datos;
				$("#server-response-concact").html(respuesta.replace("\n", "<br>"));
			});
		} else {
			alert("Su solicitud ha sido enviada");
		}
	});

	//checks if cookies exists
	function getCookie(cname) {
		let name = cname + "=";
		let decodedCookie = decodeURIComponent(document.cookie);
		let ca = decodedCookie.split(';');
		for (let i = 0; i < ca.length; i++) {
			let c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
		return "";
	}

	// Home seperator
	if ($('.home-seperator').length) {
		$('.home-seperator .left-item, .home-seperator .right-item').imgfix();
	}


	// Home number counterup
	if ($('.count-item').length) {
		$('.count-item strong').counterUp({
			delay: 10,
			time: 1000
		});
	}


	// Page loading animation
	$(window).on('load', function () {
		if ($('.cover').length) {
			$('.cover').parallax({
				imageSrc: $('.cover').data('image'),
				zIndex: '1'
			});
		}

		$("#preloader").animate({
			'opacity': '0'
		}, 600, function () {
			setTimeout(function () {
				$("#preloader").css("visibility", "hidden").fadeOut();
			}, 300);
		});
	});


	// Window Resize Mobile Menu Fix
	$(window).on('resize', function () {
		mobileNav();
	});


	// Window Resize Mobile Menu Fix
	function mobileNav() {
		var width = $(window).width();
		$('.submenu').on('click', function () {
			if (width < 992) {
				$('.submenu ul').removeClass('active');
				$(this).find('ul').toggleClass('active');
			}
		});
	}


})(window.jQuery);