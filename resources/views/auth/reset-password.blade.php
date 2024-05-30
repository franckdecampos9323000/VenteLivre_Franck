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
	<title>Nouveau mot de passe - Vente de livre Formations </title>

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
					<h2 class="title-head">Mon nouveau mot de passe</h2>
					<p>Remplissez les champs ou <a href="{{ route('login') }}" class="ml-auto">Connectez-vous</a>
                    </p>
                    @foreach ($errors->all() as $error)
                    <!--begin::Error-->
                    <div id="clientlog" class="card border-danger mb-3">
                        <div class="card-header bg-danger text-white">Erreur: {{$error}}</div>
                    </div>
                    <!--end::Error-->
                    @endforeach
				</div>
				<form class="contact-bx" action="{{ route('password.update') }}" method="post">
                @csrf
                    <input type="hidden" name="token" value="{{ $request->route('token')}}">
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
                        <div class="col-lg-12">
							<div class="form-group">
                                <div class="input-group">
                                    <label></label>
                                    <span class="input-group-text">
                                        <input placeholder="Nouveau mot de passe" name="password" type="password" class="form-control large-input">
                                        <span id="togglePassword" class="fa fa-eye-slash fs-2" onclick="togglePasswordVisibility()"></span>
                                    </span>
                                </div>
							</div>
						</div>
                        <div class="col-lg-12">
							<div class="form-group">
                                <div class="input-group">
                                    <label></label>
                                    <span class="input-group-text">
                                        <input placeholder="Confirmer le mot de passe" name="password_confirmation" type="password" class="form-control large-input">
                                        <span id="togglePasswordForgot" class="fa fa-eye-slash fs-2" onclick="togglePasswordForgotVisibility()"></span>
                                    </span>
                                </div> <br>
                                <div class="text-muted">
                                   <p>Utilisez au moins 8 caractères dont des majuscules, miniscules et chiffres.</p>
                                </div>
							</div>
						</div>
                        <div class="col-lg-12">
							<div class="form-group form-forget">
								<!-- <div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
									<label class="custom-control-label" for="customControlAutosizing"></label>
								</div> -->
								<a href="{{ route('login') }}" class="ml-auto">Retour</a>
							</div>
						</div>
						<div class="col-lg-12 m-b30">
                            <button  type="submit"  class="btn button-md">Valider</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<script>
  function togglePasswordVisibility() {
    var passwordInput = document.getElementsByName("password")[0];
    var toggleIcon = document.getElementById("togglePassword");

    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      toggleIcon.classList.remove("fa-eye-slash");
      toggleIcon.classList.add("fa-eye");
    } else {
      passwordInput.type = "password";
      toggleIcon.classList.remove("fa-eye");
      toggleIcon.classList.add("fa-eye-slash");
    }
  }
</script>

<script>
  function togglePasswordForgotVisibility() {
    var passwordInputF = document.getElementsByName("password_confirmation")[0];
    var toggleIconF = document.getElementById("togglePasswordForgot");

    if (passwordInputF.type === "password") {
      passwordInputF.type = "text";
      toggleIconF.classList.remove("fa-eye-slash");
      toggleIconF.classList.add("fa-eye");
    } else {
      passwordInputF.type = "password";
      toggleIconF.classList.remove("fa-eye");
      toggleIconF.classList.add("fa-eye-slash");
    }
  }
</script>

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
