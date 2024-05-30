<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
		<title>Mot de passe oublié - Vente de livre</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
		<!-- <meta property="og:url" content="https://keenthemes.com/metronic" /> -->
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<!-- <link rel="canonical" href="https://preview.keenthemes.com/metronic8" /> -->
		<link rel="shortcut icon" href="{{ asset('metronic/dist/assets/media/logos/favicon.png') }}" />
		<!--begin::Fonts(mandatory for all pages)-->
		<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> -->
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{ asset('metronic/dist/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('metronic/dist/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="app-blank">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
					@foreach ($errors->all() as $error)
                            <!--begin::Error-->
                            <!--begin::Alert-->
							<div id="msgdanger" class="alert alert-dismissible bg-danger d-flex flex-column flex-sm-row p-5 mb-10">
								<!--begin::Icon-->
								<span class="svg-icon-light svg-icon-2hx svg-icon-light me-4 mb-5 mb-sm-0"><!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen007.svg-->
                                <span class="svg-icon svg-icon-light svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z" fill="white"/>
                                <path d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z" fill="white"/>
                                </svg></span>
                                <!--end::Svg Icon--></span>
								<!--end::Icon-->
								<!--begin::Wrapper-->
								<div class="d-flex flex-column text-light pe-0 pe-sm-10">
									<!--begin::Title-->
									<h4 class="mb-2 light">Erreur!!</h4>
									<!--end::Title-->

									<!--begin::Content-->
                                    <span>{{ $error }}</span>
									<!--end::Content-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Close-->
								<button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
									<span class="svg-icon svg-icon-2x svg-icon-light"><!--begin::Svg Icon | path: assets/media/icons/duotune/abstract/abs012.svg-->
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr019.svg-->
                                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.30001 16.5 8.50001 16.5C8.70001 16.5 9.00002 16.4 9.20002 16.2L12 13.4L10.6 12Z" fill="white"/>
                                    <path d="M21 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H21C21.6 2 22 2.4 22 3V21C22 21.6 21.6 22 21 22ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.20001 7.79999C8.80001 7.39999 8.19999 7.39999 7.79999 7.79999C7.39999 8.19999 7.39999 8.80001 7.79999 9.20001L10.6 12L7.79999 14.8C7.39999 15.2 7.39999 15.8 7.79999 16.2C7.99999 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9.00001 16.4 9.20001 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="white"/>
                                    </svg></span>
                                    <!--end::Svg Icon--></span>
								</button>
								<!--end::Close-->
							</div>
							<!--end::Alert-->
                            <!--end::Error-->
                    @endforeach
					<!--begin::Form-->
					<div class="d-flex flex-center flex-column flex-lg-row-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-500px p-10">
							<!--begin::Form-->
							<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="#" action="" method="post">
								@csrf
								<!--begin::Heading-->
								<div class="text-center mb-11">
									<!--begin::Title-->
									<h1 class="text-dark fw-bolder mb-3">Mot de passe oublié ?</h1>
									<!--end::Title-->
									<!--begin::Subtitle-->
									<div class="text-gray-500 fw-semibold fs-6">Renseignez votre mail</div>
									<!--end::Subtitle=-->
                                    @if(session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status')}}
                                    </div>
                                    @endif

                                    @if ($errors->any())
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
					                @endif
								</div>
								<!--begin::Heading-->
								<!--begin::Login options-->
								<div class="row g-3 mb-9">
									<!--begin::Col-->
									<div class="col-md-6">
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6">
									</div>
									<!--end::Col-->
								</div>
								<!--end::Login options-->
								<!--begin::Input group=-->
									<div class="fv-row mb-8">
										<!--begin::Email-->
										<!--end::Email-->
                                        <div class="input-group log-event">
										<input type="text" placeholder="Email" name="email" value="{{ old('email') }}" autocomplete="off" class="form-control bg-transparent" />
                                        <span class="input-group-text" >
                                                <span class="fas fa-envelope fs-1"></span>
                                            </span>
                                        </div>
									</div>
                                    <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
									<div></div>
									<!--begin::Link-->
									<a href="{{ route('login')}}" class="link-primary">Retour</a>
									<!--end::Link-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Submit button-->
								<div class="d-grid mb-10">
									<input name="reset" type="submit" class="btn btn-primary" value="Envoyer le lien de réinitialisation">
										<!--begin::Indicator label-->
										<span class="indicator-label"></span>
										<!--end::Indicator label-->
									</button>
								</div>
								<!--end::Submit button-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Form-->
				</div>
				<!--end::Body-->
				<!--begin::Aside-->
				<div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url({{ asset('metronic/dist/assets/media/misc/auth-bg.png') }})">
					<!--begin::Content-->
					<div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
						<!--begin::Logo-->
						<a href="#" class="mb-0 mb-lg-12">
							<img alt="Logo" src="{{ asset('metronic/dist/assets/media/logos/logo.jpeg') }}" class="h-60px h-lg-75px" />
						</a>
						<!--end::Logo-->
						<!--begin::Image-->
						<img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20" src="{{ asset('metronic/dist/assets/media/misc/4.png') }}" alt="" />
						<!--end::Image-->
						<!--begin::Title-->
						<h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">Vente de livre</h1>
						<!--end::Title-->
						<!--begin::Text-->
						<div class="d-none d-lg-block text-white fs-base text-center">Nous vous offrons des services de qualité,<br>
						<a href="#" class="opacity-75-hover text-warning fw-bold me-1">Notre devise</a>Efficacité - Rapidité - Qualité</div>
						<!--end::Text-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Aside-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
		<!--begin::Javascript-->
		<script>var hostUrl = "metronic/dist/assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{ asset('metronic/dist/assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('metronic/dist/assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{ asset('metronic/dist/assets/js/custom/authentication/sign-in/general.js') }}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
