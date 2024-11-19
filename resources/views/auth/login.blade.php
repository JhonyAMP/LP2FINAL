<x-guest-layout>
    <style>
        /* Estilos personalizados para el diseño */
        body {
            background-image: url('https://upeu.edu.pe/wp-content/uploads/2024/03/C-Lima.jpg'); /* Cambia esto por la ruta real */
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #fff;
        }

        .authentication-card {
            background-color: rgba(0, 0, 0, 0.5); /* Fondo translúcido */
            padding: 2rem;
            border-radius: 10px;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .authentication-card-logo img {
            width: 100px; /* Ajusta el tamaño del logo */
            margin-bottom: 1rem;
        }

        .input-field {
            background-color: rgba(255, 255, 255, 0.2);
            border: none;
            border-radius: 25px;
            color: #fff;
            padding: 10px 20px;
            margin-top: 1rem;
            width: 100%;
        }

        .submit-button, .microsoft-button {
            width: 100%;
            padding: 10px;
            border-radius: 25px;
            font-weight: bold;
            margin-top: 1rem;
        }

        .submit-button {
            background-color: #FFA500; /* Color naranja */
            color: #fff;
        }

        .microsoft-button {
            background-color: #0078D4; /* Color azul de Microsoft */
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .microsoft-button img {
            margin-right: 8px;
        }

        .forgot-password {
            margin-top: 1rem;
            color: #ddd;
            text-decoration: underline;
        }
    </style>

    <div class="authentication-card">
        <div class="authentication-card-logo">
            <img src="https://oauth.upeu.edu.pe/static/img/logos/logo_upeu.png" alt="Universidad Peruana Unión"style="margin-left: 120px; margin-right: 120px;">
        </div>

        <p style="color: white;">Por favor, identifíquese</p>


        <form method="POST" action="{{ route('login') }}">
            @csrf

            <input type="email" id="email" name="email" class="input-field" placeholder="Usuario" required autofocus>
            <input type="password" id="password" name="password" class="input-field" placeholder="Contraseña" required>

            <button type="submit" class="submit-button">Iniciar sesión</button>

            <button type="button" class="microsoft-button">
                <img src=" https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" height="18" width="18">
                Iniciar sesión con Microsoft
            </button>

            @if (Route::has('password.request'))
                <a class="forgot-password" href="{{ route('password.request') }}">Recuperar contraseña</a>
            @endif
        </form>
    </div>
    <img src="https://oauth.upeu.edu.pe/static/img/logos/logo_iasd.png" alt="Iglesia Adventista del Séptimo día"style="margin-left: 120px; margin-right:120px;">>
</x-guest-layout>

