<!DOCTYPE html>
<html lang="en">


<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />

	<!-- DESCRIPTION -->
	<meta name="description" content="EduChamp : Education HTML Template" />

	<!-- OG -->
	<meta property="og:title" content="EduChamp : Education HTML Template" />
	<meta property="og:description" content="EduChamp : Education HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="{{ asset('client/assets/images/favico.png') }}" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('client/assets/images/favico.png') }}" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title>Mot de passe oublié - Vente de livre Formations </title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('client/assets/css/assets.css') }}">

	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('client/assets/css/typography.css') }}">

	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('client/assets/css/shortcodes/shortcodes.css') }}">

	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('client/assets/css/style.css') }}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('client/assets/css/color/color-1.css') }}">

</head>
<body id="bg">
<div class="page-wraper">
	<div id="loading-icon-bx"></div>
	<div class="account-form">
		<div class="account-head" style="background-image:url({{ asset('client/assets/images/background/4.png') }});">
			<a href="index.html"><img src="{{ asset('client/assets/images/logo2.png') }}" alt=""></a>
		</div>
		<div class="account-form-inner">
			<div class="account-container">
				<div class="heading-bx left">
					<h2 class="title-head">Mot de passe oublié?</h2>
					<p>Renseignez votre adresse mail ou <a href="{{ route('login') }}" class="ml-auto">Connectez-vous</a>
                    </p>
                    @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status')}}
                    </div>
                    @endif
                    @foreach ($errors->all() as $error)
                    <!--begin::Error-->
                    <div id="clientlog" class="card border-danger mb-3">
                        <div class="card-header bg-danger text-white">Erreur: {{$error}}</div>
                    </div>
                    <!--end::Error-->
                    @endforeach
				</div>
				<form class="contact-bx" action="{{ route('password.email') }}" method="post">
                @csrf
					<div class="row placeani">
						<div class="col-lg-12">
							<div class="form-group">
                                <div class="input-group">
                                    <label></label>
                                    <span class="input-group-text">
                                        <input placeholder="Email" name="email" type="email" value="{{ old('email') }}" class="form-control large-input">
                                        <span class="fa fa-envelope fs-2"></span>
                                    </span>
                                </div>
							</div>
						</div>
						<div class="col-lg-12 m-b30">
                            <button name="reset" type="submit" value="Submit" class="btn button-md">Envoyer le lien de réinitialisation</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- External JavaScripts -->
<script src="{{ asset('client/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('client/assets/vendors/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('client/assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('client/assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('client/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
<script src="{{ asset('client/assets/vendors/magnific-popup/magnific-popup.js') }}"></script>
<script src="{{ asset('client/assets/vendors/counter/waypoints-min.js') }}"></script>
<script src="{{ asset('client/assets/vendors/counter/counterup.min.js') }}"></script>
<script src="{{ asset('client/assets/vendors/imagesloaded/imagesloaded.js') }}"></script>
<script src="{{ asset('client/assets/vendors/masonry/masonry.js') }}"></script>
<script src="{{ asset('client/assets/vendors/masonry/filter.js') }}"></script>
<script src="{{ asset('client/assets/vendors/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('client/assets/js/functions.js') }}"></script>
<script src="{{ asset('client/assets/js/timeout.js') }}"></script>
<script src="{{ asset('client/assets/js/contact.js') }}"></script>
<script src="{{ asset('client/assets/vendors/switcher/switcher.js') }}"></script>
</html>
