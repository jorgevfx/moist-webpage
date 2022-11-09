<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/46ad5ba21c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/usuario-datos.css">
    <link rel="stylesheet" href="../styles/usuario-common.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>MOIST</title>
</head>

<body>
    <header class="header">
        <div class="header-wrapper">
            <a href="../index.html">MOIST</a>
            <h1>Mi cuenta</h1>
        </div>
    </header>
    <main class="main">
        <section class="main-section">
            <div class="container">
                <div class="options-wrapper">
                    <div class="avatar">
                        <div class="circle-logo">U1</div>
                        <p class="welcome-txt">Hola,</p>
                        <p class="username">Usuario0001</p>
                    </div>
                    <div class="options-item ordenes">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <p>Mis ordenes</p>
                    </div>
                    <div class="options-item datos">
                        <i class="fa-solid fa-id-card"></i>
                        <p>Editar datos</p>
                    </div>
                    <div class="options-item direccion">
                        <i class="fa-solid fa-house-user"></i>
                        <p>Dirección</p>
                    </div>
                    <div class="options-item tarjetas">
                        <i class="fa-solid fa-credit-card"></i>
                        <p>Métodos de pago</p>
                    </div>
                    <div class="options-item giftcards">
                        <i class="fa-solid fa-gift"></i>
                        <p>Giftcards y/o cupones</p>
                    </div>
                    <div class="options-item ayuda">
                        <i class="fa-solid fa-circle-question"></i>
                        <p>¿Necesitas ayuda?</p>
                    </div>
                    <div class="options-item logout">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <p>Cerrar sesión</p>
                    </div>
                </div>
                <div class="option-info">
                    <div class="option-title">
                        <a href="./usuario-general.html"><i class="fa-solid fa-angle-left"></i></a>
                        <a href="./usuario-general.html"<i class="fa-solid fa-user"></a>
                        <i class="fa-solid fa-id-card"></i>
                        <h1>EDITAR DATOS</h1>
                    </div>
                    <div class="option-body">
                        <form class="general-data needs-validation" novalidate>
                            <label for="nombres">Nombres</label>
                            <input type="text" class="form-control input-field" id="nombres" autocomplete="off"
                                placeholder="John Tomas" required>
                            <div class="invalid-feedback">
                                Por favor, ingrese sus nombres
                            </div>
                            <label for="apellidos">Apellidos</label>
                            <input type="text" class="form-control input-field" id="apellidos" autocomplete="off"
                                placeholder="Kelvin Santaña" required>
                            <div class="invalid-feedback">
                                Por favor, ingrese sus apellidos
                            </div>
                            <label for="email">Correo</label>
                            <input type="email" class="form-control input-field" id="email" autocomplete="off"
                                placeholder="email@domain.com" required>
                            <div class="invalid-feedback">
                                Por favor, ingrese un correo válido
                            </div>
                            <label for="nacimiento">Fecha de nacimiento</label>
                            <input type="date" class="form-control input-field" id="nacimiento" required>
                            <div class="invalid-feedback">
                                Por favor, ingrese su fecha de nacimiento
                            </div>
                            <input type="submit" value="GUARDAR" class="form-submit">
                        </form>
                        <form class="pwd-change needs-validation" novalidate>
                            <label for="pwd">Actual contraseña</label>
                            <input type="password" class="form-control input-field" id="pwd" placeholder="************" required>
                            <div class="invalid-feedback">
                                Por favor, ingrese una contraseña
                            </div>
                            <label for="new-pwd">Nueva contraseña</label>
                            <input type="password" class="form-control input-field" id="new-pwd"
                                placeholder="************" required>
                            <div class="invalid-feedback">
                                Por favor, ingrese una contraseña
                            </div>
                            <label for="confirm-pwd">Confirmar nueva contraseña</label>
                            <input type="password" class="form-control input-field" id="confirm-pwd"
                                placeholder="************" required>
                            <div class="invalid-feedback">
                                Por favor, ingrese una contraseña
                            </div>
                            <input type="submit" value="ACTUALIZAR CONTRASEÑA" class="form-submit" required>
                        </form>
                    </div>
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
    <script>
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
    <script src="../js/usuario_scripts.js" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>