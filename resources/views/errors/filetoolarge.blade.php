<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<!--begin::Head-->
	<head>
		<title>Erreur 422 - Vente de livreFormations</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
		{{-- <meta property="og:url" content="https://keenthemes.com/metronic" /> --}}
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		{{-- <link rel="canonical" href="https://preview.keenthemes.com/metronic8" /> --}}
        <link rel="shortcut icon" href="{{ asset('metronic/dist/assets/media/logos/favicon.png') }}" />
		<!--begin::Fonts(mandatory for all pages)-->
		{{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> --}}
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{ asset('metronic/dist/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('metronic/dist/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
        <!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Page bg image-->
			<style>body {background-image: url("{{ asset('metronic/dist/assets/media/auth/bg11.jpg') }}");}[data-bs-theme="dark"] body {background-image: url('metronic/dist/assets/media/auth/bg1-dark.jpg');}</style>
            <!--end::Page bg image-->
			<!--begin::Authentication - Signup Welcome Message -->
			<div class="d-flex flex-column flex-center flex-column-fluid">
				<!--begin::Content-->
				<div class="d-flex flex-column flex-center text-center p-10">
					<!--begin::Wrapper-->
					<div class="card card-flush w-lg-650px py-5">
						<div class="card-body py-15 py-lg-20">
							<!--begin::Title-->
							<h1 class="fw-bolder fs-2hx text-gray-900 mb-4">Oops!- Erreur 422</h1>
							<!--end::Title-->
							<!--begin::Text-->
							<div class="fw-semibold fs-6 text-gray-500 mb-7">Désolé vous ne pouvez pas téléverser ce fichier</div>
							<!--end::Text-->
							<!--begin::Illustration-->
							<div class="mb-3">
								<img src="{{ asset('metronic/dist/assets/media/auth/403-error.jpg') }}" class="mw-100 mh-300px theme-light-show" alt="" />
								<img src="{{ asset('metronic/dist/assets/media/auth/403-error.jpg') }}" class="mw-100 mh-300px theme-dark-show" alt="" />
							</div>
							<!--end::Illustration-->
							<!--begin::Link-->
							<div class="mb-0">
								<a href="#" class="btn btn-sm btn-primary">Merci !!</a>
							</div>
							<!--end::Link-->
						</div>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Authentication - Signup Welcome Message-->
		</div>
		<!--end::Root-->
		<!--begin::Javascript-->
		<script>var hostUrl = "metronic/dist/assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{ asset('metronic/dist/assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('metronic/dist/assets/js/scripts.bundle.js') }}"></script>
        <!--end::Global Javascript Bundle-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
