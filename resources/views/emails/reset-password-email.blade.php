<!DOCTYPE html>
<html>
<head>
    <style>
        /* Styles globaux pour l'e-mail */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
            line-height: 1.5;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        /* Style spécifique pour le bouton */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            text-align: center;
        }

        /* Style pour le logo */
        .logo {
            max-width: 150px;
            height: auto;
            display: block;
            margin: 20px auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Réinitialisation du mot de passe</h1>
        <p>Vous recevez cet e-mail car nous avons reçu une demande de réinitialisation de mot de passe de votre part.</p>

        <a class="btn" href="{{ $resetUrl }}">Cliquez sur ce boutton</a>

        <!-- Logo -->
        <a href="/" class="app-sidebar-logo">
            <img alt="Logo" src="{{ asset('public/metronic/dist/assets/media/logos/logo.png') }}" class="logo" />
        </a>

        <p>Si vous n'avez pas demandé de réinitialisation de mot de passe, vous pouvez ignorer ce message.</p>

        <p>Cordialement, {{ config('app.name') }}</p>
    </div>
</body>
</html>
