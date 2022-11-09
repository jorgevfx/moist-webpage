<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/log.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <title>MOIST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <main class="main">
        <section class="main-section">
            <div class="container">
                <a href="../index.html" class="moist-title">MOIST</a>
                <div class="changer-wrapper bg">
                    <button type="button" class="toggle-btn login-page" id="rbtn">
                        Iniciar Sesión
                    </button>
                    <a href="./register.php">
                        <button type="button" class="toggle-btn register-page" id="rbtn">
                            Registrarse
                        </button>
                    </a>
                </div>
                <div class="form-wrapper">
                    <div class="alert" role="alert"></div>
                    <form class="form login bg" id="login">
                        <label for="email">Correo</label>
                        <input type="text" class="input-field log-input" id="input-email" autocomplete="off"
                            placeholder="email@domain.com">
                        <p class="error-message"></p>
                        <label for="pwd">Contraseña</label>
                        <input type="password" class="form-pwd input-field log-input" id="login-pwd"
                            placeholder="************">
                        <p class="error-message"></p>
                        <input type="button" value="INICIAR SESIÓN" class="form-submit log-submit">
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
    <script src="../js/newlogin.js" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>