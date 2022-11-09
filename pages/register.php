<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>MOIST</title>
</head>

<body>
    <main class="main">
        <section class="main-section">
            <div class="container">
                <a href="../index.html" class="moist-title">MOIST</a>
                <div class="changer-wrapper bg">
                    <a href="./login.php">
                        <button type="button" class="toggle-btn login-page" id="rbtn">
                            Iniciar Sesión
                        </button>
                    </a>
                    <a href="./register.php">
                        <button type="button" class="toggle-btn register-page" id="rbtn">
                            Registrarse
                        </button>
                    </a>
                </div>
                <div class="form-wrapper">
                    <div class="alert" role="alert"></div>
                    <form class="form register bg" id="register">
                        <label for="nombres">Nombres</label>
                        <input type="text" class="input-field reg-input" id="nombres" autocomplete="off"
                            placeholder="John Tomas">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" class="input-field reg-input" id="apellidos" autocomplete="off"
                            placeholder="Kelvin Santaña">
                        <label>Correo</label>
                        <input type="text" class="input-field reg-input" id="input-email" autocomplete="off"
                            placeholder="email@domain.com">
                        <label>Confirmar correo</label>
                        <input type="text" class="form-input input-field reg-input" id="input-email"
                            autocomplete="off" placeholder="email@domain.com">
                        <label for="pwd">Contraseña</label>
                        <input type="password" class="form-pwd input-field reg-input" id="pwd"
                            placeholder="************">
                        <label for="pwd">Confirmar contraseña</label>
                        <input type="confirm-pwd" class="form-pwd input-field reg-input" id="confirm-pwd"
                            placeholder="************">
                        <input type="button" value="REGISTRARSE" class="form-submit reg-submit">
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer-wrapper">
            <p>MOIST</p>
            <a href="./tyc.html">Términos y condiciones</a>
            <p>© MOIST 2022</p>
        </div>
    </footer>
    <script src="../js/register.js" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>